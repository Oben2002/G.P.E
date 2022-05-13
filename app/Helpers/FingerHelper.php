<?php


namespace App\Helpers;

require 'zklibrary.php';

class FingerHelper
{
    public function init($ip, $port = 4370): ZKLibrary
    {
        return new ZKLibrary($ip, $port);
    }

    public function getStatus(ZKLibrary $zk): bool
    {
        return $zk->connect();
    }

    public function getStatusFormatted(ZKLibrary $zk): bool
    {
        return $zk->connect() ? "Active" : "Deactivate";
    }

    public function getSerial(ZKLibrary $zk)
    {
        if ($zk->connect()) {
            return substr(strstr($zk->serialNumber(), '='), 1);
        }
        return false;
    }
}
