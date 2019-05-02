<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02/05/2019
 * Time: 11:41
 */

namespace App\Http\Services;


class CacheClearService
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Clear cached view templates
     */
    public function clearViewsCache() {

        try {
            // clear view cache
            foreach (glob("../storage/framework/views/*.php") as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }

        } catch (\Exception $e) {
            // write log
            $this->logService->setLog('ERROR', $e->getMessage());
        }
    }
}