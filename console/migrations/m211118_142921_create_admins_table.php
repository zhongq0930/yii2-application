<?php

use common\models\Admin;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%admins}}`.
 */
class m211118_142921_create_admins_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%admins}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'avatar' => $this->text()->null(),
            'auth_key' => $this->string(100)->notNull(),
            'access_token' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $admin = new Admin();
        $admin->username = 'admin';
        $admin->status = Admin::STATUS_ACTIVE;
        $admin->setPassword('admin');
        $admin->generateAuthKey();
        $admin->generateAccessToken();
        $admin->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admins}}');
    }
}
