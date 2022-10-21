<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;


use app\widgets\MenuTI;
?>


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +62 8134 5678 922</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li> -->
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>             -->
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?= Url::toRoute(['admin/dashboard/index']) ?>"><i class="ti-user"></i>admin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="<?= Url::toRoute(['site/index']) ?>"><img src="/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="<?= Url::toRoute(['site/index']) ?>">Home</a>
            </li>
            
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Tentang TI
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= Url::toRoute(['thepage/view?kodelink=vmts']) ?>">Visi Misi</a>
                <a class="dropdown-item" href="<?= Url::toRoute(['thepage/view?kodelink=sejarah']) ?>">Sejarah</a>
                <!-- <a class="dropdown-item" href="notice.html">Notice</a> -->
              </div>
            </li>

            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Berita
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= Url::toRoute(['blog/index']) ?>">Berita</a>
                <a class="dropdown-item" href="<?= Url::toRoute(['pengabdian/index']) ?>">Pengabdian</a>
                <a class="dropdown-item" href="<?= Url::toRoute(['penelitian/index']) ?>">Penelitian</a>
                <?= MenuTI::widget() ?>
                <!-- <a class="dropdown-item" href="notice.html">Notice</a> -->
              </div>
            </li>

            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Profil
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= Url::toRoute(['dosen/index']) ?>">Dosen</a>
                <!-- <a class="dropdown-item" href="notice.html">Notice</a> -->
              </div>
            </li>

            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Mahasiswa
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= Url::toRoute(['']) ?>">Info Capaian</a>
                <a class="dropdown-item" href="<?= Url::toRoute(['']) ?>">Kegiatan Hima TI</a>
                <!-- <a class="dropdown-item" href="notice.html">Notice</a> -->
              </div>
            </li>

            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Alumni
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= Url::toRoute(['thepage/view?kodelink=vmts']) ?>">Tracer Study</a>
              </div>
            </li>
            
            <li class="nav-item @@events">
              <a class="nav-link" href="<?= Url::toRoute(['pengumuman/index']) ?>">Pengumuman</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
