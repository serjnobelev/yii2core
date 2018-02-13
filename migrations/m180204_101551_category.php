<?php

use yii\db\Migration;

/**
 * Class m180204_101551_category
 */
class m180204_101551_category extends Migration
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
        echo "m180204_101551_category cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
