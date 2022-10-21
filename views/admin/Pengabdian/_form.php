<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use floor12\summernote\Summernote;

/* @var $this yii\web\View */
/* @var $model app\models\Pengabdian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengabdian-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ringkasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isi')->widget(Summernote::class); ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
