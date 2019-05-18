<?php


namespace App\Http\Controllers;

use App\Http\Services\XLFExportReader;
use Illuminate\Http\Request;

class ExtractTermsFromXliffController extends Controller
{
    public function export()
    {
        $uploadedXlfFile = "";
        $choosenLanguages = $_POST["languages"];

        if (isset($_FILES['file'])) {
            $uploadedXlfFile = $_FILES['file']['tmp_name'];
            $fileName = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
        }

        if ($uploadedXlfFile != "") {
            // create reader object and read the file
            $reader = new XLFExportReader($uploadedXlfFile, $choosenLanguages, $fileName);
            $reader->readFile();

        } else {
            die("No file");
        }

    }
}
