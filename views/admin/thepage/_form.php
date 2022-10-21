<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use floor12\summernote\Summernote;

/* @var $this yii\web\View */
/* @var $model app\models\Thepage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thepage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodelink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ringkasan')->textarea(['rows' => 3, 'maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->widget(Summernote::class); ?>   


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
