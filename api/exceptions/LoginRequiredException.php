<?php

namespace api\exceptions;

/**
 * Class LoginRequiredException
 * @package api\exceptions
 */
class LoginRequiredException extends ApiException
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message, 21);
    }
}