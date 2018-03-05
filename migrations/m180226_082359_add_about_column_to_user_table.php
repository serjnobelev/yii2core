<?php

use yii\db\Migration;

/**
 * Handles adding about to table `user`.
 */
class m180226_082359_add_about_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'about', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'about');
    }
}
