<?php

use yii\db\Migration;

/**
 * Class m180407_093527_create_table_conditions
 */
class m180407_093527_create_table_conditions extends Migration
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
        echo "m180407_093527_create_table_conditions cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('conditions', [
            'id' => $this->primaryKey(3),
            'title_ru' => $this->string(128)->notNull(),
            'title_ua' => $this->string(128)->notNull(),
            'text_ru' => $this->string(512)->notNull(),
            'text_ua' => $this->string(512)->notNull(),
            'image' => $this->string(64),
            'type' => $this->string(32)
        ]);

        $this->createIndex(
            'idx-conditions-type',
            'conditions',
            'type'
        );
    }

    public function down()
    {
        $this->dropTable('conditions');
    }
}
