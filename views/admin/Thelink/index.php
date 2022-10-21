<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ThelinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thelinks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thelink-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Thelink', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_link',
            'alamat_link',
            'caption',
            'urutan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Thelink $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_link' => $model->id_link]);
                 }
            ],
        ],
    ]); ?>


</div>
