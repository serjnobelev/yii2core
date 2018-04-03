<?php

use yii\db\Migration;

/**
 * Class m180403_181859_create_table_pagetexts
 */
class m180403_181859_create_table_pagetexts extends Migration
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
        echo "m180403_181859_create_table_pagetexts cannot be reverted.\n";
        return false;
    }

    public function up()
    {
        $this->createTable('pagetexts', [
            'id' => $this->primaryKey(3),
            'head_ua' => $this->string(512),
            'head_ru' => $this->string(512),
            'subhead_ua' => $this->string(1024),
            'subhead_ru' => $this->string(1024),
            'descr_ua' => $this->text(),
            'sdescr_ru' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('pagetexts');
    }
}