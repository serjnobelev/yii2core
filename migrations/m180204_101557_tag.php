<?php

use yii\db\Migration;

/**
 * Class m180204_101557_tag
 */
class m180204_101557_tag extends Migration
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
        echo "m180204_101557_tag cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('tag');
    }
}
