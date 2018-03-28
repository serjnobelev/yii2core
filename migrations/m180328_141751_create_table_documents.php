<?php

use yii\db\Migration;

/**
 * Class m180328_141751_create_table_documents
 */
class m180328_141751_create_table_documents extends Migration
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
        echo "m180328_141751_create_table_documents cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('documents', [
            'id' => $this->primaryKey(3),
            'title_ua' => $this->string(256)->notNull(),
            'title_ru' => $this->string(256)->notNull(),
            'image' => $this->string(128),
            'number' => $this->smallInteger(2),
        ]);

        $this->createIndex(
            'idx-documents-number',
            'documents',
            'number'
        );
    }

    public function down()
    {
        $this->dropTable('documents');
    }
}
