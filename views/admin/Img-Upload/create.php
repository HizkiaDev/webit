<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImgUpload */

$this->title = 'Create Img Upload';
$this->params['breadcrumbs'][] = ['label' => 'Img Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="img-upload-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
