<?php

namespace console\migrations;

/**
 * Class Migration
 * @package console\migrations
 */
class Migration extends \yii\db\Migration
{
    /**
     * {@inheritdoc}
     */
    public function createTable($table, $columns, $options = null)
    {
        parent::createTable($table, $columns, 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB');
    }
}