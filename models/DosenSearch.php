<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dosen;

/**
 * DosenSearch represents the model behind the search form of `app\models\Dosen`.
 */
class DosenSearch extends Dosen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dosen'], 'integer'],
            [['nama_lengkap', 'ttl', 'email', 'riwayat_pendidikan', 'bidang_keilmuwan', 'mata_kuliah', 'minat_penelitian', 'penelitian', 'jabatan', 'foto'], 'safe'],
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
        $query = Dosen::find();

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
            'id_dosen' => $this->id_dosen,
            'ttl' => $this->ttl,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'ttl', $this->ttl])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'riwayat_pendidikan', $this->riwayat_pendidikan])
            ->andFilterWhere(['like', 'bidang_keilmuwan', $this->bidang_keilmuwan])
            ->andFilterWhere(['like', 'mata_kuliah', $this->mata_kuliah])
            ->andFilterWhere(['like', 'minat_penelitian', $this->minat_penelitian])
            // ->andFilterWhere(['like', 'publikasi', $this->publikasi])
            ->andFilterWhere(['like', 'penelitian', $this->penelitian])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
