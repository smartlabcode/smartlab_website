<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TranslationsController extends Controller
{

    public function index() {

        $files = array();

        session_start();

        $path = "../resources/lang/" . App::getlocale() . "/*";
        foreach (glob($path) as $file) {
            if (is_file($file)) {

                $fileName = basename($file);
                array_push($files, substr($fileName, 0, -4));
            }
        }

        return view('pages.translations.index', [
            'files' => $files
        ]);
    }

    public function edit($file) {

        $translations = include "../resources/lang/" . App::getlocale() . "/" . $file . ".php";

        return view('pages.translations.edit', [
            'data' => is_array($translations) ? $translations : [],
            'page' => $file
        ]);
    }

    public function update(Request $request) {

        try {
            // get neccessary data
            $fileName = $request->input('file_name');
            $translations = $request->except([
                '_token',
                '_method',
                'file_name'
            ]);

            // open translations file to edit
            $file = fopen("../resources/lang/" . App::getlocale() . "/" . $fileName . ".php", 'w');

            // insert before values
            fwrite($file, '<?php' . PHP_EOL . PHP_EOL . 'return [' . PHP_EOL);

            foreach ($translations as $key => $translation) {

                // replace single with double qoutes
                $translation = str_replace("'", '"', $translation);

                $line = "\t'" . $key . "'" . " => " . "'" . $translation . "'," . PHP_EOL;
                fwrite($file, $line);
            }

            // insert after values
            fwrite($file, '];');

            // close file
            fclose($file);

            return back()->with('message', 'Translations successfully edited.');

        } catch (\Exception $e) {

        }

    }
}
