<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kartofel;

/**
 * KartofelSearch represents the model behind the search form of `common\models\Kartofel`.
 */
class KartofelSearch extends Kartofel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['filial', 'regnom', 'ncert', 'nblank', 'datavidachi', 'datadeistviya', 'object', 'sort', 'categoriya', 'npartiya', 'godurojaya', 'strana', 'edizmereniya', 'qty', 'prochie', 'codeok005', 'codeobject', 'sootvetstvietrebovani', 'proizvoditel', 'komuvidani', 'fio', 'vidannaosnovanii', 'ispitaniyaprovedeni', 'sozdano', 'cert'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kartofel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'datavidachi' => $this->datavidachi,
            'datadeistviya' => $this->datadeistviya,
            'sozdano' => $this->sozdano,
        ]);

        $query->andFilterWhere(['like', 'filial', $this->filial])
            ->andFilterWhere(['like', 'regnom', $this->regnom])
            ->andFilterWhere(['like', 'ncert', $this->ncert])
            ->andFilterWhere(['like', 'nblank', $this->nblank])
            ->andFilterWhere(['like', 'object', $this->object])
            ->andFilterWhere(['like', 'sort', $this->sort])
            ->andFilterWhere(['like', 'categoriya', $this->categoriya])
            ->andFilterWhere(['like', 'npartiya', $this->npartiya])
            ->andFilterWhere(['like', 'godurojaya', $this->godurojaya])
            ->andFilterWhere(['like', 'strana', $this->strana])
            ->andFilterWhere(['like', 'edizmereniya', $this->edizmereniya])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'prochie', $this->prochie])
            ->andFilterWhere(['like', 'codeok005', $this->codeok005])
            ->andFilterWhere(['like', 'codeobject', $this->codeobject])
            ->andFilterWhere(['like', 'sootvetstvietrebovani', $this->sootvetstvietrebovani])
            ->andFilterWhere(['like', 'proizvoditel', $this->proizvoditel])
            ->andFilterWhere(['like', 'komuvidani', $this->komuvidani])
            ->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'vidannaosnovanii', $this->vidannaosnovanii])
            ->andFilterWhere(['like', 'ispitaniyaprovedeni', $this->ispitaniyaprovedeni])
            ->andFilterWhere(['like', 'cert', $this->cert]);

        return $dataProvider;
    }
}
