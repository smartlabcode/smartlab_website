<?php

namespace App\Http\Controllers;

use App\Http\Services\UploadService;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    private $uploader;

    public function __construct(UploadService $uploadService)
    {
        $this->uploader = $uploadService;
    }

    public function index(){

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
    }

    public function update(Request $request) {

        $imageName = $request->input('image_name');

        // change uploaded file name
        $_FILES['files']['name'][0] = $imageName;

        $path = "images/";
        unlink($path . $imageName);

        $this->uploader->uploadFiles($_FILES, $path);

//        foreach (glob("../storage/framework/views/*.php") as $file) {
//            if (is_file($file)) {
//                unlink($file);
//            }
//        }

        return back()->with('message', 'Image changed successfully.');
    }
}
