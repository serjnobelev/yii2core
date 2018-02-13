<?php

use yii\db\Migration;

/**
 * Class m180204_101658_acrticle_tag
 */
class m180204_101658_article_tag extends Migration
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
        echo "m180204_101658_article_tag cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer()
        ]);

        $this->createIndex(
            'tag-article_article_id',
            'article_tag',
            'article_id'
        );

        $this->addForeignKey(
            'tag-article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-tag_id',
            'article_tag',
            'tag_id'
        );

        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('article_tag');
    }
}
