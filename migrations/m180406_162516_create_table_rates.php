<?php

use yii\db\Migration;

/**
 * Class m180406_162516_create_table_rates
 */
class m180406_162516_create_table_rates extends Migration
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
        echo "m180406_162516_create_table_rates cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('rates', [
            'id' => $this->primaryKey(3),
            'addrLink' => $this->string(64)->notNull(),
            'addr_ru' => $this->string(128)->notNull(),
            'addr_ua' => $this->string(128)->notNull(),
            'floor_rates' => $this->float()->notNull(),
            'another_rates' => $this->float()->notNull(),
            'with_meters' => $this->float()->notNull(),
            'without_meters' => $this->float()->notNull(),
            'watter' => $this->float()->notNull(),
            'drainage' => $this->float()->notNull(),
            'apartment' => $this->float()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('rates');
    }
}
