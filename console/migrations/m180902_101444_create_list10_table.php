<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list10`.
 */
class m180902_101444_create_list10_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list10', [
            'id' => $this->primaryKey(),
            'value' => $this->string(),
            'comment' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('list10');
    }
}
