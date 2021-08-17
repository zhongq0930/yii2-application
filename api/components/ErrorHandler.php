<?php

namespace api\components;

use api\exceptions\ApiException;
use yii\web\ErrorHandler as BaseErrorHandler;

/**
 * Class ErrorHandler
 * @package api\components
 */
class ErrorHandler extends BaseErrorHandler
{
    /**
     * {@inheritdoc}
     */
    protected function convertExceptionToArray($exception)
    {
        if (!$exception instanceof ApiException) {
            if (YII_DEBUG) {
                return parent::convertExceptionToArray($exception);
            } else {
                return [
                    'message' => '服务器内部错误',
                    'errorCode' => 1,
                ];
            }
        }

        return [
            'message' => $exception->getMessage(),
            'errorCode' => $exception->getCode(),
        ];
    }
}