<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
?>

<!-- footer -->
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="/images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="text-white fw-bold mb-2">Kampus Utama, Jalan Gubernur Syarkawi (Lingkar Luar Utara) Handil Bakti, Kabupaten Barito Kuala, Kalimantan Selatan</li>
            <li class="text-white fw-bold mb-2">0511 - 3363002</li>
            <li class="mb-2"></li>
            <li class="text-white fw-bold mb-2">informatika.umbjm@gmail.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">TENTANG TI</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="thepage/view?kodelink=vmts">Visi Misi</a></li>
            <li class="mb-3"><a class="text-color" href="thepage/view?kodelink=sejarah">Sejarah</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li> -->
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">BERITA</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="<?= Url::toRoute(['blog/index']) ?>">Berita</a></li>
            <li class="mb-3"><a class="text-color" href="event.html">Pengabdian</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">Penelitian</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li> -->
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">PROFIL</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Dosen</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li> -->
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">MAHASISWA</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Info Capaian</a></li>
            <li class="mb-3"><a class="text-color" href="#">Kegiatan Hima TI</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <!-- <p class="mb-0">Copyright -->
            <!-- <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>  -->
            <!-- © Theme By <a href="https://themefisher.com">themefisher.com</a></p>
			<p>All Rights Reserved.</p> -->
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://dribbble.com/themefisher"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->
