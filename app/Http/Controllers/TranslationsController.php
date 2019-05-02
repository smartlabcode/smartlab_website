<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TranslationsController extends Controller
{

    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * List all pages in the system
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        try {
            // initialize empty array
            $files = array();

            // start session TODO check why we need this
            session_start();

            // set which files shouldnot be listed
            $out = ['validation.php', 'pagination.php', 'auth.php', 'passwords.php'];

            // set path where we will look for translation files depending on the current language of the page
            $path = "../resources/lang/" . App::getlocale() . "/*";

            // loop through all files and set neccessary files to $files array
            foreach (glob($path) as $file) {
                if (is_file($file)) {

                    $fileName = basename($file);

                    if(!in_array($fileName, $out)) {
                        // remove .php part of the file name
                        $fileName = substr($fileName, 0, -4);
                        array_push($files, $fileName);
                    }
                }
            }

            // return view with data
            return view('pages.translations.index', [
                'files' => $files
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Return edit page
     *
     * @param $file
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($file) {

        try {
            // import array of translation terms depending ond the current system language and page for which user wants to edit translations
            $translations = include "../resources/lang/" . App::getlocale() . "/" . $file . ".php";

            // return page with neccessary data
            return view('pages.translations.edit', [
                'data' => is_array($translations) ? $translations : [],
                'page' => $file
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Update translations file
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {

        try {
            // get neccessary data
            $fileName = $request->input('file_name');

            // exclude data from the incoming request
            $translations = $request->except([
                '_token',
                '_method',
                'file_name'
            ]);

            // open translations file to edit
            $file = fopen("../resources/lang/" . App::getlocale() . "/" . $fileName . ".php", 'w');

            // insert before values
            fwrite($file, '<?php' . PHP_EOL . PHP_EOL . 'return [' . PHP_EOL);

            // loop through all terms from hte request and add them to the translations file
            foreach ($translations as $key => $translation) {
                // replace single with double qoutes to avoid errors
                $translation = str_replace("'", '"', $translation);

                // set new line to be insert into the file
                $line = "\t'" . $key . "'" . " => " . "'" . $translation . "'," . PHP_EOL;

                // write new line to the file
                fwrite($file, $line);
            }

            // insert after values
            fwrite($file, '];');

            // close file
            fclose($file);

            return back()->with('message', 'Translations successfully edited.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            return back()->withErrors('message', 'Translations couldnt be edited.');
        }

    }
}
