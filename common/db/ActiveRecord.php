<?php

namespace common\db;

use yii\db\Exception;

/**
 * Class ActiveRecord
 * @package common\db
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * @return ActiveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActiveQuery(get_called_class());
    }

    /**
     * @throws Exception
     */
    public function saveAndThrow()
    {
        if (!$this->save()) {
            throw new Exception($this->formatErrors());
        }
    }

    /**
     * @throws Exception
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function deleteAndThrow()
    {
        if (!$this->delete()) {
            throw new Exception($this->formatErrors());
        }
    }

    /**
     * Formats all model errors into a single string
     * @return string
     */
    public function formatErrors(): string
    {
        $result = '';

        foreach ($this->getErrors() as $attribute => $errors) {
            $result .= implode(" ", $errors) . " ";
        }

        return $result;
    }

    /**
     * @return array
     */
    public function toDetail(): array
    {
        return $this->toArray();
    }
}