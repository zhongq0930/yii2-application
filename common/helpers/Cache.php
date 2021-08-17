<?php

namespace common\helpers;

use Yii;

/**
 * Class Cache
 * @package app\helpers
 */
class Cache
{
    /**
     * @param $key
     * @param $callable
     * @param int $duration
     * @param null $dependency
     * @return mixed
     */
    public static function set($key, $callable, $duration = 3600, $dependency = null)
    {
        return Yii::$app->cache->getOrSet($key, $callable, $duration, $dependency);
    }

    /**
     * @param $key
     */
    public static function flush($key)
    {
        if (is_array($key)) {
            foreach ($key as $value) {
                Yii::$app->cache->delete($value);
            }
        } else {
            Yii::$app->cache->delete($key);
        }
    }
}