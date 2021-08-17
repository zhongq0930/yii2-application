<?php

namespace api\components;

/**
 * Class ResponseTrait
 * @package api\components
 */
trait ResponseTrait
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param $message
     * @return array
     */
    protected function returnResult($message): array
    {
        $response = [
            'errorCode' => 0,
            'message' => $message,
        ];

        if ($this->data !== null) $response['data'] = $this->data;

        return $response;
    }
}