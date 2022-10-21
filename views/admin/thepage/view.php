<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Thepage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Thepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->kodelink;
\yii\web\YiiAsset::register($this);
?>
<div class="thepage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'kodelink',
            'judul',
            'sub_judul',
            'ringkasan',
            'isi:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
