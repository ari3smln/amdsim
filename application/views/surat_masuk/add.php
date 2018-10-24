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
                                                <label class="control-label mb-1">Nomor Surat Masuk</label>
                                                <input id="" name="no_surat_masuk" type="text" class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Tanggal Surat</label>
                                                <input id="" name="tgl_surat_masuk" type="date" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Asal Surat Masuk</label>
                                                <input id="" name="asal" type="text" class="form-control">
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
                                                <label class="control-label mb-1">Scan Surat Masuk</label>
                                                <input id="" name="scan_surat" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-1">Waktu Input</label>
                                                <input id="" name="waktu_input" type="date" class="form-control">
                                            </div>  
                                            <div class="row">
                                            <div class="col-lg-10"></div>
                                            <div class="col-lg-4">
                                                <button class="btn btn-success" name="submit" type="submit">Simpan</button>
                                                <a class="btn btn-warning" href="<?php echo site_url("surat_masuk"); ?>">Kembali</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>