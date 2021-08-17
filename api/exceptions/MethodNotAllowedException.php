<?php

namespace api\exceptions;

/**
 * Class MethodNotAllowedException
 * @package api\exceptions
 */
class MethodNotAllowedException extends ApiException
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message, 11);
    }
}