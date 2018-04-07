<?php

use yii\db\Migration;

/**
 * Class m180407_070930_create_table_contacts
 */
class m180407_070930_create_table_contacts extends Migration
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
        echo "m180407_070930_create_table_contacts cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(3),
            'sales_addr_ru' => $this->string(128)->notNull(),
            'sales_addr_ua' => $this->string(128)->notNull(),
            'phone_city' => $this->string(32)->notNull(),
            'phone_city_link' => $this->string(32)->notNull(),
            'phone_kyivstar' => $this->string(32)->notNull(),
            'phone_kyivstar_link' => $this->string(32)->notNull(),
            'phone_vodafone' => $this->string(32)->notNull(),
            'phone_vodafone_link' => $this->string(32)->notNull(),
            'schedule1_ru' => $this->string(32)->notNull(),
            'schedule1_ua' => $this->string(32)->notNull(),
            'schedule2_ru' => $this->string(32)->notNull(),
            'schedule2_ua' => $this->string(32)->notNull(),
            'phone_supply' => $this->string(32)->notNull(),
            'phone_supply_link' => $this->string(32)->notNull(),
            'facebook' => $this->string(128),
            'instagram' => $this->string(128),
            'viber' => $this->string(256),
        ]);
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
}
