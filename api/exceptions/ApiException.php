<?php

namespace api\exceptions;

use Exception;
use yii\web\HttpException;

/**
 * Class ApiException
 * @package api\exceptions
 */
class ApiException extends HttpException
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(string $message, int $code, Exception $previous = null)
    {
        parent::__construct(200, $message, $code, $previous);
    }
}