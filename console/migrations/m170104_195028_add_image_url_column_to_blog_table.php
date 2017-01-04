<?php

use yii\db\Migration;

/**
 * Handles adding image_url to table `{{%blog}}`.
 */
class m170104_195028_add_image_url_column_to_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%blog}}', 'image_url', $this->string(1000)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%blog}}', 'image_url');
    }
}
