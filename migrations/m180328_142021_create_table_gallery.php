<?php

use yii\db\Migration;

/**
 * Class m180328_142021_create_table_gallery
 */
class m180328_142021_create_table_gallery extends Migration
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
        echo "m180328_142021_create_table_gallery cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(3),
            'image' => $this->string(128),
            'number' => $this->smallInteger(2),
        ]);

        $this->createIndex(
            'idx-gallery-number',
            'gallery',
            'number'
        );
    }

    public function down()
    {
        $this->dropTable('gallery');
    }
}
