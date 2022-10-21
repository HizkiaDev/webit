<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::toRoute(['admin/dashboard/index']) ?>" class="brand-link">
        <img src="/vendors/adminlte/img/umb.png" alt="lLogo" class="brand-image img-circle elevation-2" style="opacity: .6">
        <span class="brand-text font-weight-light">Web Informatika</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/vendors/adminlte/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><span
                        class="text-warning"><?= \Yii::$app->user->identity->username ?></span></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- tambahkan apabila perlu -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/img-upload/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-regular fa-images"></i>                        
                        <p>Image Upload</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/thepage/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-clone"></i>
                        <p>The Pages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/blog/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-newspaper"></i>
                        <p>Berita / Blog</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/dosen/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-id-card"></i>
                        <p>Profil Dosen</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/pengabdian/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-chalkboard-teacher"></i>
                        <p>Pengabdian</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/penelitian/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-microscope"></i>
                        <p>Penelitian</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/pengumuman/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-calendar-alt"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['/admin/thelink/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-code"></i>
                        <p>TheLink</p>
                    </a>
                </li>

                
<!--                 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-computer"></i>
                        <p>Barang Umum<i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar barang</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Status Barang</p>
                            </a>
                        </li> -->

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>