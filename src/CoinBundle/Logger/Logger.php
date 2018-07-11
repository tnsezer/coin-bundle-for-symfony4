<?php

namespace App\CoinBundle\Logger;

use \Monolog\Logger as MonoLogger;
use \Monolog\Handler\StreamHandler;
use \Monolog\Formatter\LineFormatter;

class Logger implements LoggerInterface
{

    private $logger;

    public function __construct()
    {
        $this->logger = new MonoLogger('files');
        $formatter = new LineFormatter(null, null, false, true);
        $debugHandler = new StreamHandler('/var/log/coinlog.log', MonoLogger::DEBUG);
        $debugHandler->setFormatter($formatter);
        $this->logger->pushHandler($debugHandler);
    }
    /**
     * {@inheritdoc}
     */
    public function log($string)
    {
        // add records to the log
        $this->logger->notice($string);
    }
}
