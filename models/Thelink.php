<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thelink".
 *
 * @property int $id_link
 * @property string|null $alamat_link
 * @property string|null $caption
 * @property int|null $urutan
 */
class Thelink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thelink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan'], 'integer'],
            [['alamat_link'], 'string', 'max' => 500],
            [['caption'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_link' => 'Id Link',
            'alamat_link' => 'Alamat Link',
            'caption' => 'Caption',
            'urutan' => 'Urutan',
        ];
    }
}
