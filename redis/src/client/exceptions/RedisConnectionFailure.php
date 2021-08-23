<?php

namespace Redis\src\client\exceptions;

use Exception;

class RedisConnectionFailure extends Exception
{
    public function __construct()
    {
        parent::__construct($message = 'Connection Failure!', $code = 0, $previous = null);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}