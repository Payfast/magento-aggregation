<?php

namespace Payfast\Payfast\Logger;

use Magento\Framework\Logger\Handler\Base;
use Psr\Log\LogLevel;

class Handler extends Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = LogLevel::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/payfast.log';
}
