<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thelink;

/**
 * ThelinkSearch represents the model behind the search form of `app\models\Thelink`.
 */
class ThelinkSearch extends Thelink
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_link', 'urutan'], 'integer'],
            [['alamat_link', 'caption'], 'safe'],
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
        $query = Thelink::find();

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
            'id_link' => $this->id_link,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'alamat_link', $this->alamat_link])
            ->andFilterWhere(['like', 'caption', $this->caption]);

        return $dataProvider;
    }
}
