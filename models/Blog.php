<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property int $id_blog_kategori
 * @property string $judul
 * @property string|null $sub_judul
 * @property string|null $ringkasan
 * @property string|null $isi
 * @property string|null $gambar
 * @property string|null $penulis
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $dipublikasi
 *
 * @property BlogKategori $blogKategori
 * @property BlogKomentar[] $blogKomentars
 * @property BlogReadcount[] $blogReadcounts
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_blog_kategori', 'judul'], 'required'],
            [['id_blog_kategori', 'dipublikasi'], 'integer'],
            [['isi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul', 'sub_judul'], 'string', 'max' => 245],
            [['ringkasan'], 'string', 'max' => 400],
            [['gambar'], 'string', 'max' => 75],
            [['penulis'], 'string', 'max' => 145],
            [['id_blog_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => BlogKategori::className(), 'targetAttribute' => ['id_blog_kategori' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_blog_kategori' => 'Id Blog Kategori',
            'judul' => 'Judul',
            'sub_judul' => 'Sub Judul',
            'ringkasan' => 'Ringkasan',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
            'penulis' => 'Penulis',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'dipublikasi' => 'Dipublikasikan?',
        ];
    }

    /**
     * Gets query for [[BlogKategori]].
     *
     * @return \yii\db\ActiveQuery|BlogKategoriQuery
     */
    public function getBlogKategori()
    {
        return $this->hasOne(BlogKategori::className(), ['id' => 'id_blog_kategori']);
    }

    /**
     * Gets query for [[BlogKomentars]].
     *
     * @return \yii\db\ActiveQuery|BlogKomentarQuery
     */
    public function getBlogKomentars()
    {
        return $this->hasMany(BlogKomentar::className(), ['id_blog' => 'id']);
    }

    /**
     * Gets query for [[BlogReadcounts]].
     *
     * @return \yii\db\ActiveQuery|BlogReadcountQuery
     */
    public function getBlogReadcounts()
    {
        return $this->hasMany(BlogReadcount::className(), ['id_blog' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlogQuery(get_called_class());
    }
}
