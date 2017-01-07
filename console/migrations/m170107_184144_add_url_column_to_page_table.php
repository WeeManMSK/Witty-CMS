<?php

use yii\db\Migration;

/**
 * Handles adding url to table `{{%page}}`.
 */
class m170107_184144_add_url_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%page}}', 'url', $this->string(255)->notNull()->unique());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%page}}', 'url');
    }
}
