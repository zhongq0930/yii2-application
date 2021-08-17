<?php

namespace common\behaviors;

use Yii;
use yii\base\Behavior;
use yii\base\InvalidConfigException;
use yii\db\BaseActiveRecord;

/**
 * Class CacheBehavior
 * @package app\behaviors
 */
class CacheBehavior extends Behavior
{
    /**
     * @var string
     */
    public $key;

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (empty($this->key)) {
            throw new InvalidConfigException('The "key" property must be set.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_AFTER_INSERT => 'flush',
            BaseActiveRecord::EVENT_AFTER_UPDATE => 'flush',
            BaseActiveRecord::EVENT_AFTER_DELETE => 'flush',
        ];
    }

    /**
     * Flush cache of this table
     */
    public function flush()
    {
        if ($this->key) {
            Yii::$app->cache->delete($this->key);
        }
    }
}