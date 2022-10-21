<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Thelink */

$this->title = 'Create Thelink';
$this->params['breadcrumbs'][] = ['label' => 'Thelinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thelink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
