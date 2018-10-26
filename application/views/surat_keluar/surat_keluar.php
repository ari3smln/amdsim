                            <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Surat Keluar</h3>
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <div class="col-md-12">
                                        <?php if($this->session->flashdata('sukses')){?>
                                            <div class="alert alert-success mr-top close-alert">
                                              <span><?php echo $this->session->flashdata('sukses'); ?>
                                              <i class="glyphicon glyphicon-remove"></i></span> 
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr><div class="table-data__tool-right">
                                            <a href="<?php echo site_url("surat_keluar/add"); ?>" class="btn btn-outline-success">
                                            <i class="fas fa-plus"></i> Tambah</a>
                                            </div></tr>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Surat Keluar</th>
                                                <th>Tanggal</th>
                                                <th>Perihal</th>
                                                <th>Tujuan</th>
                                                <th>Waktu Input</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if($record->num_rows() > 0){
                                            $no = 1;
                                            foreach ($record->result() as $row) {
                                             $tglSrt = $row->tgl_surat_keluar;
                                                if($tglSrt!="0000-00-00"){
                                                    $tgl1 = tgl_indo($row->tgl_surat_keluar);
                                                }else{
                                                    $tgl1 = "";
                                                }

                                             $tglInp = $row->waktu_input;

                                                if($tglInp!="0000-00-00"){
                                                    $tgl2 = tgl_jam_indo($row->waktu_input);
                                                }else{
                                                    $tgl2 = "";
                                                }
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $no; ?></td>
                                                <td> <?php echo $row->no_surat_keluar; ?></td>
                                                <td><?php echo $tgl1; ?></td>
                                                <td><?php echo $row->perihal; ?></td>
                                                <td><?php echo $row->tujuan; ?></td>
                                                <td><?php echo $tgl2; ?></td>
                                                <td>
                                                    <a target="_blank" class="btn btn-info btn-sm" href="<?php echo site_url("surat_keluar/cetak/". $row->id_surat_keluar); ?>"><i class="fa fa-print"></i> Cetak</a>
                                                    <a class="btn btn-warning btn-sm" href="<?php echo site_url("surat_keluar/edit/". $row->id_surat_keluar); ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" id="p" class=" btn btn-sm btn-danger" onclick="confirm_modal('<?php echo "surat_keluar/delete/".$row->id_surat_keluar; ?>');"><i class="fa fa-trash-alt"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php $no++; 
                                            }
                                            }else{ ?>
                                            <tr>
                                                <td colspan="8" class="text-center">Data Kosong</td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>