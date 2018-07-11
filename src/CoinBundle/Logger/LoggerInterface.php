<?php


namespace App\CoinBundle\Logger;

interface LoggerInterface
{
    /**
     * @return boolean
     */
    public function log($string);

}
