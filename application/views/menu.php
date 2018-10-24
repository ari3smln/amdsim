       <?php
       $url = $this->uri->segment(1);
       ?>
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/CoolAdmin-master/images/icon/logo_amd.png" alt="Aplikasi Manajemen Dokumen" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
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
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->