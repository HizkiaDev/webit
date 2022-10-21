<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAssetAdmin;
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;

AppAssetAdmin::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="AdminLTE + Mukhaimy">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="/vendors/adminkit/img/icons/icon-48x48.png" />

    <!-- Google Font: GANTI -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>

    <div class="login-box">
        <div class="login-logo">
            <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
				<?= $content ?>  
            </div>
        </div>
    </div>
    <!-- /.login-box -->


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>