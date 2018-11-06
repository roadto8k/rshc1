<?php

use yii\db\Migration;

/**
 * Handles the creation of table `list11`.
 */
class m180917_194626_create_list11_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('list11', [
            'id' => $this->primaryKey(),
            'value' => $this->string(),
            'comment' => $this->string(),
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
        $this->dropTable('list11');
    }
}
