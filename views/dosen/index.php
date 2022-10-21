<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_dosen',
            'nama_lengkap',
            'email:email',
            'ttl',
            'riwayat_pendidikan:ntext',
            'bidang_keilmuwan',
            //'mata_kuliah',
            //'minat_penelitian:ntext',
            //'publikasi',
            //'penelitian:ntext',
            //'jabatan',
            //'foto',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/dosen/'. $data['foto'],
                        ['width' => '70px']);
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Dosen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dosen' => $model->id_dosen]);
                 }
            ],
        ],
    ]); ?>


</div>
