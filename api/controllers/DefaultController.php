<?php

namespace api\controllers;

use api\components\ApiController;

/**
 * Class DefaultController
 * @package api\controllers
 */
class DefaultController extends ApiController
{
    /**
     * @var array
     */
    protected $loginExcept = ['index'];

    /**
     * @return string[]
     */
    public function actionIndex()
    {
        return [
            'message' => 'hello world'
        ];
    }
}
