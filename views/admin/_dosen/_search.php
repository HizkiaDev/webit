<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DosenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dosen') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'ttl') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'riwayat_pendidikan') ?>

    <?= $form->field($model, 'bidang_keilmuwan') ?>

    <?php // echo $form->field($model, 'mata_kuliah') ?>

    <?php // echo $form->field($model, 'minat_penelitian') ?>

    <?php // echo $form->field($model, 'publikasi') ?>

    <?php // echo $form->field($model, 'penelitian') ?>

    <?php // echo $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
