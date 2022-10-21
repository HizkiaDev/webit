<?php
/* @var $this yii\web\View */

$this->title = $model->judul;
$this->params['summary'] = $model->ringkasan;
?>
<h1><?= $model->judul ?></h1>
<h2><?= $model->sub_judul ?></h2>

<hr />
<?= $model->isi ?>
