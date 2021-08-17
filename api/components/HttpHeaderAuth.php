<?php

namespace api\components;

use api\exceptions\LoginRequiredException;
use yii\filters\auth\HttpHeaderAuth as BaseHttpHeaderAuth;

/**
 * Class HttpHeaderAuth
 * @package api\components
 */
class HttpHeaderAuth extends BaseHttpHeaderAuth
{
    /**
     * {@inheritdoc}
     * @throws LoginRequiredException
     */
    public function handleFailure($response)
    {
        throw new LoginRequiredException('此操作需要认证');
    }
}