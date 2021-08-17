<?php

namespace api\exceptions;

/**
 * Class MissParamException
 * @package App\Api\Exceptions
 */
class MissParamException extends ApiException
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message, 12);
    }
}
