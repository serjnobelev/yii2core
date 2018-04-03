<?php

use yii\db\Migration;

/**
 * Class m180403_183606_create_table_phones
 */
class m180403_183606_create_table_phones extends Migration
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
        echo "m180403_183606_create_table_phones cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('phones', [
            'id' => $this->primaryKey(3),
            'title_ua' => $this->string(256)->notNull(),
            'title_ru' => $this->string(256)->notNull(),
            'phone' => $this->string(32)->notNull(),
            'link' => $this->string(32)->notNull(),
            'number' => $this->smallInteger(2),
        ]);
    }

    public function down()
    {
        $this->dropTable('phones');
    }
}
