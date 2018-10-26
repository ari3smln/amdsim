<?php
$bln = getRomawi(date("m"));
$thn = date("Y");
?>
<script src="<?php echo base_url() ?>assets/ckeditor/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/adapters/jquery.js"></script>
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Kelola Surat Keluar</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Surat Keluar</h3>
                                        </div>
                                        <hr>
                                        <form action="<?php echo site_url("surat_keluar/edit/1212");?>" method="post" novalidate="novalidate">

                                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata("id_user")?>">

                                            <input type="hidden" id="id_surat_keluar" name="id_surat_keluar" value="<?php echo $edit["id_surat_keluar"]; ?>">

                                             <div class="form-group">
                                                <label class="control-label mb-1">Jenis Surat</label>
                                                <select name="jenis_surat" class="form-control" id="jenis_surat">
                                                    <?php foreach ($record as $row) { ?>
                                                        <option value="<?php echo $row->id_jenis_surat; ?>" 
                                                            <?php if($edit["id_jenis_surat"]==$row->id_jenis_surat){ echo "selected='selected' ";}?>>
                                                            <?php echo $row->tujuan; ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <?php
                                            if($edit["no_surat_keluar"]==""){
                                                $noSurat = $param;
                                            }else{
                                                $noSurat = $edit["no_surat_keluar"];
                                            }

                                            ?>

                                            <div class="form-group">
                                                <label class="control-label mb-1">Nomor Surat</label>
                                                <input id="no_surat_keluar" name="no_surat_keluar" type="text" class="form-control" value="<?php echo $noSurat; ?>" readonly="readonly">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Tanggal Surat</label>
                                                <input id="" name="tgl_surat_keluar" type="date" class="form-control" value="<?php echo $edit["tgl_surat_keluar"]; ?>">

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Perihal Surat</label>
                                                <input id="" name="perihal" type="text" class="form-control" value="<?php echo $edit["perihal"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tujuan Surat</label>
                                                <input id="" name="tujuan" type="text" class="form-control" value="<?php echo $edit["tujuan"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Isi Surat</label>
                                                <textarea name="isi_surat" class="form-control editor" id=""><?php echo $edit["isi_surat"]; ?></textarea>
                                            </div>  
                                            <div class="row">
                                            <div class="col-lg-10"></div>
                                            <div class="col-lg-4">
                                                <button class="btn btn-success" name="submit" type="submit">Simpan</button>
                                                <a class="btn btn-warning" href="<?php echo site_url("surat_keluar"); ?>">Kembali</a>
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
                
                $('#jenis_surat').change(function(){
                    var jenis_surat = $('#jenis_surat').val();
                    var id_surat = $('#id_surat_keluar').val();

                    $.ajax({
                        url: "<?php echo site_url("surat_keluar/selectJenis");?>",
                        type : "POST",
                        data: {'jenis_surat':jenis_surat, 'id_surat': id_surat},
                        cache: false,
                        dataType : 'json',
                        success: function(data){
                            $('#no_surat_keluar').val(data);
                            
                        }, error: function(data){
                            alert("gagal");
                        }
                  });
                   

                });
               
   
            
        </script>