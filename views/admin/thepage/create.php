<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thepage */

$this->title = 'Create Thepage';
$this->params['breadcrumbs'][] = ['label' => 'Thepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thepage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
