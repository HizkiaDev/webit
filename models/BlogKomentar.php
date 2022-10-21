<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_komentar".
 *
 * @property int $id
 * @property int $id_blog
 * @property string $nama
 * @property string $email
 * @property string|null $komentar
 * @property string|null $created_at
 * @property int|null $terperiksa
 *
 * @property Blog $blog
 */
class BlogKomentar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_komentar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_blog', 'nama', 'email'], 'required'],
            [['id_blog', 'terperiksa'], 'integer'],
            [['created_at'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 145],
            [['komentar'], 'string', 'max' => 400],
            [['id_blog'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::className(), 'targetAttribute' => ['id_blog' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_blog' => 'Id Blog',
            'nama' => 'Nama',
            'email' => 'Email',
            'komentar' => 'Komentar',
            'created_at' => 'Created At',
            'terperiksa' => 'Terperiksa',
        ];
    }

    /**
     * Gets query for [[Blog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'id_blog']);
    }
}
