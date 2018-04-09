<?php

use yii\db\Migration;

/**
 * Class m180407_124746_create_table_news
 */
class m180407_124746_create_table_news extends Migration
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
        echo "m180407_124746_create_table_news cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'link' => $this->string(256)->notNull(),
            'title_ru' => $this->string(256)->notNull(),
            'title_ua' => $this->string(256)->notNull(),
            'text_ru' => $this->text()->notNull(),
            'text_ua' => $this->text()->notNull(),
            'image' => $this->string(64),
        ]);
    }

    public function down()
    {
        $this->dropTable('news');
    }
}
