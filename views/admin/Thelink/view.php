<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Thelink */

$this->title = $model->id_link;
$this->params['breadcrumbs'][] = ['label' => 'Thelinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="thelink-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_link' => $model->id_link], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_link' => $model->id_link], [
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
            'id_link',
            'alamat_link',
            'caption',
            'urutan',
        ],
    ]) ?>

</div>
