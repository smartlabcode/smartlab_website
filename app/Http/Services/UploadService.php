<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30/04/2019
 * Time: 19:24
 */

namespace App\Http\Services;


class UploadService
{

    public function uploadFiles($files, $contactType = false) {
        // Count # of uploaded files in array
        $total = count($files['files']['name']);

        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

            //Get the temp file path
            $tmpFilePath = $files['files']['tmp_name'][$i];

            //Make sure we have a file path
            if ($tmpFilePath != ""){
                //Setup our new file path
                $newFilePath = "temp_files/" . $contactType. "/" . $files['files']['name'][$i];

                move_uploaded_file($tmpFilePath, $newFilePath);

                //Upload the file into the temp dir
//                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
//
//                    //die("moved");
//
//                }
            }
        }
    }
}