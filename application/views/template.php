<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Surat Keluar</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/CoolAdmin-master/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">

        <?php $this->load->View("header"); ?>
<!-- MENU SIDEBAR-->
        <?php $this->load->View("menu"); ?>
<!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->View("header_desktop"); ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php echo $contents; ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 SMK Al-Chasanah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets/ckeditor/jquery.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/CoolAdmin-master/js/main.js"></script>
<div class="modal" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>
      <!-- Modal footer -->
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
         <a href="#" class="btn btn-danger" id="delete_link">Iya</a>
        <button type="button" id="cancel" class="btn btn-warning" data-dismiss="modal">Tidak</button>
      </div>

    </div>
  </div>
</div>  
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/lib/select2/js/jquery.js"></script> -->
<script type="text/javascript">
 $("#checkAll").click(function () {
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
function confirm_modal(delete_url)
{
  $('#modal_delete').modal('show', {backdrop: 'static'});
    $(".modal-title").empty();
   $(".modal-title").append("Apakah anda yakin ingin hapus data ini ?");
    document.getElementById('delete_link').setAttribute('href' , delete_url);
}

  
</script>
</body>

</html>
<!-- end document-->
