<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */

$this->title = $model->id_dosen;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dosen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_dosen' => $model->id_dosen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_dosen' => $model->id_dosen], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dosen',
            'nama_lengkap',
            'ttl',
            'email:email',
            'riwayat_pendidikan:ntext',
            'bidang_keilmuwan',
            'mata_kuliah',
            'minat_penelitian:ntext',
            'publikasi',
            'penelitian:ntext',
            'jabatan',
            'foto',
        ],
    ]) ?>

</div>
