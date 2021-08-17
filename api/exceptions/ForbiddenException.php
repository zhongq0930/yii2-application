<?php

namespace api\exceptions;

/**
 * Class ForbiddenException
 * @package api\exceptions
 */
class ForbiddenException extends ApiException
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message, 22);
    }
}