<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kartofel`.
 */
class m180827_161552_create_kartofel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kartofel', [
            'id' => $this->primaryKey(),
            'filial' => $this->string(),
            'regnom' => $this->string(),
            'ncert' => $this->string(),
            'nblank' => $this->string(),
            'datavidachi' => $this->date(),
            'datadeistviya' => $this->date(),
            'object' => $this->string(),
            'sort' => $this->string(),
            'categoriya' => $this->string(),
            'npartiya' => $this->string(),
            'godurojaya' => $this->string(),
            'strana' => $this->string(),
            'edizmereniya' => $this->string()->defaultValue('тонн.'),
            'qty' => $this->string(),
            'prochie' => $this->string(),
            'codeok005' => $this->string(),
            'codeobject' => $this->string(),
            'sootvetstvietrebovani' => $this->string(),
            'proizvoditel' => $this->string(),
            'komuvidani' => $this->string(),
            'fio' => $this->string(),
            'vidannaosnovanii' => $this->string(),
            'ispitaniyaprovedeni' => $this->string(),
            'sozdano' => $this->date(),
            'cert' => $this->string(),

            'proba' => $this->string(),
            'chistota' => $this->string(),
            'botanichsort' => $this->string(),
            'bolezn' => $this->string(),
            'jelezist' => $this->string(),
            'mehanich' => $this->string(),
            'vredit' => $this->string(),
            'razmer' => $this->string(),
            'primes' => $this->string(),
            'scritoi' => $this->string(),
            'probissled' => $this->string(),
            'fitopatog' => $this->string(),
            'xbk' => $this->string(),
            'uvk' => $this->string(),
            'bakter' => $this->string(),
            'drugie' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('kartofel');
    }
}
