<script src="<?php echo base_url() ?>assets/ckeditor/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/ckeditor/adapters/jquery.js"></script>
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Kelola Surat Masuk</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Tambah Surat Masuk</h3>
                                        </div>
                                        <hr>
                                        <form action="<?php echo site_url("surat_masuk/add");?>" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label class="control-label mb-1">Nomor Surat</label>
                                                <input id="" name="no_surat_keluar" type="text" class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Tanggal Surat</label>
                                                <input id="" name="tgl_surat_keluar" type="date" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Perihal Surat</label>
                                                <input id="" name="perihal" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Tujuan Surat</label>
                                                <input id="" name="tujuan" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Isi Surat</label>
                                                <textarea name="isi_surat" class="form-control editor" id=""></textarea>
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