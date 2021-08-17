<?php

namespace api\components;

use api\exceptions\ForbiddenException;
use yii\filters\AccessControl;
use yii\filters\Cors;
use yii\web\Controller;

/**
 * Class ApiController
 * @package api\components
 */
class ApiController extends Controller
{
    use RequestTrait, ResponseTrait;

    /**
     * @var array
     */
    protected $loginExcept = [];

//    /**
//     * @var array[]
//     */
//    protected $accessRules = [];

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            [
                'class' => Cors::className(),
            ],
            [
                'class' => HttpHeaderAuth::className(),
                'header' => 'X-Token',
                'except' => $this->loginExcept
            ],
//            [
//                'class' => AccessControl::className(),
//                'rules' => $this->accessRules,
//                'denyCallback' => function ($rule, $action) {
//                    throw new ForbiddenException('没有访问权限');
//                }
//            ],
        ];
    }
}