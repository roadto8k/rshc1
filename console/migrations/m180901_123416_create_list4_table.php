<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list4`.
 */
class m180901_123416_create_list4_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list4', [
            'id' => $this->primaryKey(),
            'value' => $this->string(),
            'comment' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('list4');
    }
}
