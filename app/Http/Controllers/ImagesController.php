<?php

namespace App\Http\Controllers;

use App\Http\Services\CacheClearService;
use App\Http\Services\LogService;
use App\Http\Services\UploadService;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    private $uploader;
    private $logService;
    private $clearerService;

    public function __construct(UploadService $uploadService, LogService $logService, CacheClearService $clearerService)
    {
        $this->uploader = $uploadService;
        $this->logService = $logService;
        $this->clearerService = $clearerService;
    }

    public function index(){

        try {
            // initialize array for collecting image links
            $links = array();

            // go to images folder and get all images links
            foreach (glob("images/*") as $file) {
                if (is_file($file)) {
                    array_push($links, [
                        'path' => $file,
                        'name' => substr($file, strpos($file, '/') + 1)
                    ]);
                }
            }

            return view('pages.images', [
                'links' => $links
            ]);

        } catch (\Exception $e) {
            // write log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error page
            return view('pages.general_error');
        }

    }

    public function update(Request $request) {

        try {
            // get name of image to replace
            $imageName = $request->input('image_name');

            // change uploaded file name to old image name
            $_FILES['files']['name'][0] = $imageName;

            // set path where new image should be uploaded
            $path = "images/";

            // delete old image
            unlink($path . $imageName);

            // clear views cache
            $this->clearerService->clearViewsCache();

            // upload new image with same name as the old one so that image links are not broken
            $this->uploader->uploadFiles($_FILES, $path);

            // set message and return
            return back()->with('message', 'Image changed successfully.');

        } catch (\Exception $e) {
            // write log
            $this->logService->setLog('ERROR', $e->getMessage());

            return back()->withErrors('message', 'Image couldnt be changed');
        }

    }
}
