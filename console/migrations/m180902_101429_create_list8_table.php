<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list8`.
 */
class m180902_101429_create_list8_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list8', [
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
        $this->dropTable('list8');
    }
}
