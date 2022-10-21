<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_dosen".
 *
 * @property int $id_dosen
 * @property string $nama_lengkap
 * @property string|null $ttl
 * @property string|null $email
 * @property string|null $riwayat_pendidikan
 * @property string|null $bidang_keilmuwan
 * @property string|null $mata_kuliah
 * @property string|null $minat_penelitian
 
 * @property string|null $penelitian
 * @property string|null $jabatan
 * @property string|null $foto
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap'], 'required'],
            [['ttl'], 'safe'],
            [['riwayat_pendidikan', 'minat_penelitian', 'penelitian'], 'string'],
            [['nama_lengkap', 'email'], 'string', 'max' => 75],
            [['bidang_keilmuwan', 'mata_kuliah',], 'string', 'max' => 200],
            [['jabatan'], 'string', 'max' => 100],
            [['foto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nama_lengkap' => 'Nama Lengkap',
            'ttl' => 'Tanggal Lahir',
            'email' => 'Email',
            'riwayat_pendidikan' => 'Riwayat Pendidikan',
            'bidang_keilmuwan' => 'Bidang Keilmuwan',
            'mata_kuliah' => 'Mata Kuliah',
            'minat_penelitian' => 'Minat Penelitian',
            // 'publikasi' => 'Publikasi',
            'penelitian' => 'Penelitian',
            'jabatan' => 'Jabatan',
            'foto' => 'Foto',
        ];
    }
}
