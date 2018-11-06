<?php

use yii\db\Migration;

/**
 * Handles the creation of table `semenardk`.
 */
class m180902_084321_create_semenardk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('semenardk', [
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

            '1sortovaya' => $this->string(),
            '2chistota' => $this->string(),
            '2vtomchisle' => $this->string(),
            '3drcult' => $this->string(),
            '3vtcviki' => $this->string(),
            '4cormovie' => $this->string(),
            '5drrasten' => $this->string(),
            '6sornih' => $this->string(),
            '6vtcnaibvred' => $this->string(),
            '6karant' => $this->string(),
            '6yadovit' => $this->string(),
            '7energiya' => $this->string(),
            '8vshojest' => $this->string(),
            '8vtctvrd' => $this->string(),
            'uslprorash' => $this->string(),
            'catsortchis' => $this->string(),
            '9jiznesp' => $this->string(),
            '9metod' => $this->string(),
            '10vlajnost' => $this->string(),
            '11massa' => $this->string(),
            '12zarajenn' => $this->string(),
            '12skleroc' => $this->string(),
            '12golovnevie' => $this->string(),
            '13zaselenvred' => $this->string(),
            '14odnorast' => $this->string(),
            '15stebel' => $this->string(),
            '16viravnen' => $this->string(),
            '17odnosem' => $this->string(),
            '18sostav' => $this->string(),
            '19drugie' => $this->string(),
            '20sert' => $this->string(),
            '21pasport' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('semenardk');
    }
}
