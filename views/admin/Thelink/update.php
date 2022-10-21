<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thelink */

$this->title = 'Update Thelink: ' . $model->id_link;
$this->params['breadcrumbs'][] = ['label' => 'Thelinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_link, 'url' => ['view', 'id_link' => $model->id_link]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thelink-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
