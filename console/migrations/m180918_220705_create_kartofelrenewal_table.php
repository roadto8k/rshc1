<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kartofelrenewal`.
 */
class m180918_220705_create_kartofelrenewal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kartofelrenewal', [
            'id' => $this->primaryKey(),
            'cert_kartofel_id' => $this->integer(),
            'organ' => $this->string(),
            'fio' => $this->string(),
            'naosndoc' => $this->string(),
            'date' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('kartofelrenewal');
    }
}
