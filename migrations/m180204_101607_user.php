<?php

use yii\db\Migration;

/**
 * Class m180204_101607_user
 */
class m180204_101607_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180204_101607_user cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->defaultValue(null),
            'password' => $this->string(),
            'isAdmin' => $this->integer()->defaultValue(0),
            'photo' => $this->string()->defaultValue(null)
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
