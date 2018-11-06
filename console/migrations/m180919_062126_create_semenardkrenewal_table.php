<?php

use yii\db\Migration;

/**
 * Handles the creation of table `semenardkrenewal`.
 */
class m180919_062126_create_semenardkrenewal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('semenardkrenewal', [
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
        $this->dropTable('semenardkrenewal');
    }
}
