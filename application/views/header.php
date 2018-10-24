<?php $url=$this->uri->segment(1)?>
<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url(); ?>assets/CoolAdmin-master/images/icon/logo_amd1.png" alt="Aplikasi Manajemen Dokumen" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--<?php if($this->session->flashdata("login_gagal")) { ?>
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Berhasil</span>
            Anda berhasil login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php } ?>-->
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li <?php if($url =="halaman_utama"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("Halaman_Utama"); ?>">
                                <i class="fas fa-tachometer-alt"></i>Halaman Utama</a>
                        </li>
                        <li <?php if($url =="draft"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("draft"); ?>">
                                <i class="fas fa-list-alt"></i>Draft Surat</a>
                        </li>
                        <li <?php if($url =="surat_keluar"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("surat_keluar"); ?>">
                                <i class="fas fa-envelope"></i>Surat Keluar</a>
                        </li>
                        <li <?php if($url =="ekspedisi"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("ekspedisi"); ?>">
                                <i class="fas fa-clipboard-check"></i>Ekspedisi</a>
                        </li>
                        <li <?php if($url =="surat_masuk"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("surat_masuk"); ?>">
                                <i class="fas fa-envelope-open"></i>Surat Masuk</a>
                        </li>
                        <li <?php if($url =="jenis_surat"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("jenis_surat"); ?>">
                                <i class="fas fa-envelope-square"></i>Jenis Surat</a>
                        </li>
                        <li <?php if($url =="laporan"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("laporan"); ?>">
                                <i class="fas fa-file"></i>Laporan</a>
                        </li>
                        <li <?php if($url =="kelola_user"){ echo "class='active' "; } ?> >
                            <a href="<?php echo site_url ("kelola_user"); ?>">
                                <i class="fas fa-users"></i>Kelola User</a>
                        </li>
                            </ul>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->