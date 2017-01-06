<?php

use yii\db\Migration;

/**
 * Handles adding is_visible to table `{{%blog}}`.
 */
class m170104_195707_add_is_visible_column_to_blog_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%blog}}', 'is_visible', $this->boolean()->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%blog}}', 'is_visible');
    }
}
