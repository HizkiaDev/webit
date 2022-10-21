<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="themefisher.com + Mukhaimy">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | Informatika UMBanjarmasin</title>
    <?php $this->head() ?>

    <!--Favicon-->
    <link rel="shortcut icon" href="vendors/educenter/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="vendors/educenter/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php $this->beginBody() ?>

    <?php $this->beginContent("@app/views/layouts/main_header.php") ?>
    <?php $this->endContent() ?>


    <!-- page title -->
    <section class="page-title-section overlay" data-background="/vendors/educenter/images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item">
                            <h3 class="text-primary font-secondary"><?= Html::encode($this->title) ?></h3>
                        </li> 
                    </ul>
                    <p class="text-lighten">
                        <?php
                            if (isset($this->params['summary'])){
                                echo $this->params['summary'];
                            }
                        ?> 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- isi -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /isi -->

    <?php $this->beginContent("@app/views/layouts/main_footer.php") ?>
    <?php $this->endContent() ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>