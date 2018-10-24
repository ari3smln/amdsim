<script src="<?php echo base_url() ?>assets/ckeditor/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/adapters/jquery.js"></script>
<style type="text/css">
    .msg-box{display: none;}
</style>
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Ekspedisi</h3>
                                <div class="col-lg-12 msg-box">
                                <div class="alert alert-success mr-top close-alert">
                                  <strong> Draft Berhasil di simpan
                                  <i class="glyphicon glyphicon-remove"></i></strong> 
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                            </div>
                                
                        </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Draft Surat</div>
                                    <div class="card-body">
                                        <form  method="POST" action="<?php echo site_url("draft/simpan_draft"); ?>">
                                            <input type="hidden" name="inputBy" id="inputBy" value="<?php  echo $this->session->userdata("id_user")?>">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Draft Surat</h3>
                                        </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Isi Surat</label>
                                                <textarea name="isi_surat" class="form-control editor" id="isi_surat"></textarea>
                                            </div>  
                                            <div class="row">
                                                <div class="col-lg-10"></div>
                                                <div class="col-lg-4">
                                                    <button class="btn btn-success" id="submit" name="submit" type="submit">Simpan</button>
                                                    <a class="btn btn-warning" href="<?php echo site_url("draft"); ?>">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                             
                    </div>
                </div>
<script type="text/javascript">$( 'textarea.editor' ).ckeditor();</script>
<script type="text/javascript">
$(document).ready(function(e) {

    $('#submit').click(function() {
         for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
            CKEDITOR.instances[instance].setData('');
        }
            var inputBy = $.trim($("#inputBy").val());
            var isi_surat = $("#isi_surat").val();
        
        $.ajax({
            url: "<?php echo site_url("draft/simpan_draft"); ?>",
            type: "POST",
            data: {'isi_surat': isi_surat,'inputBy': inputBy},
            // cache: false,
            success: function(data) {
                $("#ajax-response").append(data);
               $("#isi_surat").val("");
               $(".msg-box").slideDown("slow");
            },
            error: function(data){
               alert("gagal input");

            }
        });
        return false;
    });
});
</script>