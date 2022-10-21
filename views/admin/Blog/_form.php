<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use floor12\summernote\Summernote;
use yii\helpers\ArrayHelper;

use app\models\BlogKategori;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
$blogKategoriSet = BlogKategori::find()->all();
$cmbBlogKategori = ArrayHelper::map($blogKategoriSet, 'id', 'nama');

?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'id_blog_kategori')->dropDownList(
        $cmbBlogKategori, ['prompt'=>'pilih...']) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ringkasan')->textarea(['rows' => 3, 'maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->widget(Summernote::class); ?>   

    <?= $form->field($model, 'dipublikasi')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
