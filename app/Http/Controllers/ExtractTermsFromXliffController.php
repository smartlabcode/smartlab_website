<?php


namespace App\Http\Controllers;

use App\Http\Services\XLFExportReader;
use Illuminate\Http\Request;

class ExtractTermsFromXliffController extends Controller
{
    public function export()
    {

        $uploadedXlfFile = "";
        $choosenLanguages = isset($_POST["languages"]) ? $_POST["languages"] : [];

        if (isset($_FILES['file']['name'][0])) {
            $uploadedXlfFile = $_FILES['file']['tmp_name'];
            $fileName = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
        } else {
            // redirect with message
            return redirect('pages/xlf')->withErrors([
                'message' => 'Invalid file'
            ]);
        }

        if(empty($choosenLanguages)) {
            // redirect with message
            return redirect('pages/xlf')->withErrors([
                'message' => 'No languages selected'
            ]);
        }

        // create reader object and read the file
        $reader = new XLFExportReader($uploadedXlfFile, $choosenLanguages, $fileName);
        $reader->readFile();

    }
}
