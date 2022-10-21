<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImgUpload */

$this->title = 'Update Img Upload: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Img Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="img-upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
