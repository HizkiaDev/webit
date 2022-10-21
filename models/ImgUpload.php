<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "img_upload".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $img_path
 */
class ImgUpload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img_upload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 45],
            [['img_path'], 'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'img_path' => 'Img Path',
        ];
    }
}
