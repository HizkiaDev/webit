<?php
/* @var $this yii\web\View */

$this->title = $model->judul;
$this->params['summary'] = $model->ringkasan;
?>
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <img src="/img/blog/<?= $model->gambar ?>" alt="blog-thumb" class="img-fluid w-100">
            </div>

            <br>

            <div class="col-12">
                <ul class="list-inline">
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span
                            class="font-weight-bold mr-2">Post:</span>Somrat</li>
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">August 28, 2017</li>
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="#"><i
                                class="ti-comments mr-2"></i>265</a></li>
                </ul>
            </div>
            <!-- border -->
            <div class="col-12 mt-4">
                <div class="border-bottom border-primary"><br /></div>
            </div>
            <div class="col-12 mb-5">
                <h1><?= $model->judul ?></h1>
                <h2><?= $model->sub_judul ?></h2>

                <hr />
                <?= $model->isi ?>
            </div>
        </div>
    </div>
</section>

<!-- recommended post -->
<!-- <section class="section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Komentar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
</section> -->
<!-- /recommended post -->