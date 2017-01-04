<?php

use yii\db\Migration;

/**
 * Handles adding subtitle to table `{{%blog}}`.
 */
class m170104_193257_add_subtitle_column_to_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%blog}}', 'subtitle', $this->string(100)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%blog}}', 'subtitle');
    }
}
