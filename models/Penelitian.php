<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penelitian".
 *
 * @property int $id
 * @property string|null $judul
 * @property string|null $ringkasan
 * @property string|null $isi
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Penelitian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penelitian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ringkasan', 'isi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'ringkasan' => 'Ringkasan',
            'isi' => 'Isi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
