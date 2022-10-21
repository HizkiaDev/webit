<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thepage".
 *
 * @property int $id
 * @property string|null $kodelink
 * @property string $judul
 * @property string|null $sub_judul
 * @property string|null $ringkasan
 * @property string|null $isi
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Thepage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thepage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul'], 'required'],
            [['isi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['kodelink'], 'string', 'max' => 45],
            [['judul', 'sub_judul'], 'string', 'max' => 245],
            [['ringkasan'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kodelink' => 'Kodelink',
            'judul' => 'Judul',
            'sub_judul' => 'Sub Judul',
            'ringkasan' => 'Ringkasan',
            'isi' => 'Isi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
