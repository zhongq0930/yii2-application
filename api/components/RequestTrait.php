<?php

namespace api\components;

use api\exceptions\MethodNotAllowedException;
use api\exceptions\MissParamException;
use Yii;

/**
 * Class RequestTrait
 * @package api\components
 */
trait RequestTrait
{
    /**
     * @throws MethodNotAllowedException
     */
    protected function requirePostRequest()
    {
        if (!Yii::$app->request->isPost) {
            throw new MethodNotAllowedException('必须使用 POST 方法请求');
        }
    }

    /**
     * @param string $name
     * @param null $defaultValue
     * @return mixed
     */
    protected function getQueryParam(string $name, $defaultValue = null)
    {
        $value = Yii::$app->request->getQueryParam($name, $defaultValue);

        if ($value === null || $value === '') {
            $value = $defaultValue;
        }

        return $value;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws MissParamException
     */
    protected function getRequiredQueryParam(string $name)
    {
        $value = $this->getQueryParam($name);

        if ($value !== null) {
            return $value;
        }

        throw new MissParamException('缺少必须参数: ' . $name);
    }

    /**
     * @param string $name
     * @param null $defaultValue
     * @return mixed
     */
    protected function getBodyParam(string $name, $defaultValue = null)
    {
        $value = Yii::$app->request->getBodyParam($name, $defaultValue);

        if ($value === null || $value === '') {
            $value = $defaultValue;
        }

        return $value;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws MissParamException
     */
    protected function getRequiredBodyParam(string $name)
    {
        $value = $this->getBodyParam($name);

        if ($value !== null) {
            return $value;
        }

        throw new MissParamException('缺少必须参数: ' . $name);
    }
}