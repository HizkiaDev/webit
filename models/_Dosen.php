<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_dosen".
 *
 * @property int $id_dosen
 * @property string $nama_lengkap
 * @property string $email
 * @property string $riwayat_pendidikan
 * @property string $bidang_keilmuwan
 * @property string $mata_kuliah
 * @property string $minat_penelitian
 * @property string $publikasi
 * @property string $penelitian
 * @property string $jabatan
 * @property string $foto
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
            [['ttl'], 'string'],
            [['riwayat_pendidikan', 'minat_penelitian', 'penelitian'], 'string'],
            [['ttl'],'datetime'],
            [['nama_lengkap', 'email'], 'string', 'max' => 75],
            [['bidang_keilmuwan', 'mata_kuliah', 'publikasi'], 'string', 'max' => 200],
            [['jabatan'], 'string', 'max' => 25],
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
            'publikasi' => 'Publikasi',
            'penelitian' => 'Penelitian',
            'jabatan' => 'Jabatan',
            'foto' => 'Foto',
        ];
    }
}
