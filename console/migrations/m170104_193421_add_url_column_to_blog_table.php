<?php

use yii\db\Migration;

/**
 * Handles adding url to table `{{%blog}}`.
 */
class m170104_193421_add_url_column_to_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%blog}}', 'url', $this->string(100)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%blog}}', 'url');
    }
}
