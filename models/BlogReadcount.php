<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_readcount".
 *
 * @property int $id
 * @property int $id_blog
 * @property string|null $readtime
 *
 * @property Blog $blog
 */
class BlogReadcount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_readcount';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_blog'], 'required'],
            [['id_blog'], 'integer'],
            [['readtime'], 'safe'],
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
            'readtime' => 'Readtime',
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
