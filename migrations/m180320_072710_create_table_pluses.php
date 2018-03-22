<?php

use yii\db\Migration;

/**
 * Class m180320_072710_create_table_pluses
 */
class m180320_072710_create_table_pluses extends Migration
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
        echo "m180320_072710_create_table_pluses cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('pluses', [
            'id' => $this->primaryKey(3),
            'title_ua' => $this->string(128)->notNull(),
            'text_ua' => $this->string(512)->notNull(),
            'title_ru' => $this->string(128)->notNull(),
            'text_ru' => $this->string(512)->notNull(),
            'image' => $this->string(128),
            'number' => $this->smallInteger(2),
        ]);

        $this->createIndex(
            'idx-pluses-number',
            'pluses',
            'number'
        );
    }

    public function down()
    {
        $this->dropTable('pluses');
    }
}
