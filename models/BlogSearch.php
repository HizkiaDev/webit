<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blog;

/**
 * BlogSearch represents the model behind the search form of `app\models\Blog`.
 */
class BlogSearch extends Blog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_blog_kategori', 'dipublikasi'], 'integer'],
            [['judul', 'sub_judul', 'ringkasan', 'isi', 'gambar', 'penulis', 'created_at', 'updated_at'], 'safe'],
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
        $query = Blog::find();

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
            'id_blog_kategori' => $this->id_blog_kategori,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'dipublikasi' => $this->dipublikasi,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'sub_judul', $this->sub_judul])
            ->andFilterWhere(['like', 'ringkasan', $this->ringkasan])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'penulis', $this->penulis]);

        return $dataProvider;
    }
}
