<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Berita Informatika';
// $this->params['summary'] = $model->ringkasan;

?>

<section class="section">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $item): ?>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="/img/blog/<?= $item->gambar ?>" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">
                                <?= date_format(new DateTime($item->updated_at), "D d/m/Y") ?></li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By <?= $item->penulis ?></li>
                        </ul>
                        <a href="<?= Url::toRoute(['blog/view?id=' . $item->id]) ?>">
                            <h4 class="card-title"><?= $item->judul ?></h4>
                        </a>
                        <p class="card-text"><?= $item->ringkasan ?></p>
                        <a href="<?= Url::toRoute(['blog/view?id=' . $item->id]) ?>" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>

        </div>

        <div class="row">
            <br />
            <?=  LinkPager::widget(['pagination' => $pagination,]) ?>
        </div>
    </div>
</section>