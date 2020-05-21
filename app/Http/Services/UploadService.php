<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30/04/2019
 * Time: 19:24
 */

namespace App\Http\Services;


use Illuminate\Support\Facades\Storage;

class UploadService
{

    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     *
     * @param $files
     * @param bool $path
     */
    public function uploadFiles($files, $path = false) {
        // count number of uploaded files
        $total = count($files['files']['name']);

        // loop through each file which has been uploaded (one or many)
        for( $i = 0 ; $i < $total ; $i++ ) {

            //Get the temp file path
            $tmpFilePath = $files['files']['tmp_name'][$i];

            // check if path is set
            if ($tmpFilePath != ""){

                // set up our new file path
                $newFilePath = $path . "/" . $files['files']['name'][$i];

                // upload file into the temp folder
                if (!move_uploaded_file($tmpFilePath, $newFilePath)) {
                    // add log if file couldnt be stored(uploaded)
                    $this->logService->setLog('ERROR', 'UploadService - uploadFiles: ' . 'Couldnt upload file to the server.');
                }
            }
        }
    }
}