                <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Draft</h3>
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <div class="col-md-12">
                                        <?php if($this->session->flashdata('sukses')){?>
                                            <div class="alert alert-success mr-top close-alert">
                                              <strong><?php echo $this->session->flashdata('sukses'); ?>
                                             
                                              <i class="glyphicon glyphicon-remove"></i></strong> 
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr><div class="table-data__tool-right">
                                            <a href="<?php echo site_url("draft/add"); ?>" class="btn btn-outline-success">
                                            <i class="fas fa-plus"></i> Tambah</a>
                                            </div></tr>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="15%">Tanggal</th>
                                                <th width="25%">Input By</th>
                                                <th width="25%">Isi Surat</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($record->num_rows() > 0){
                                            $no = 1;
                                            foreach ($record->result() as $row) { ?>
                                            <tr class="tr-shadow">
                                                <td> <?php echo $no; ?></td>
                                                <td><?php echo tgl_jam_indo($row->waktu_input); ?></td>
                                                <td><?php echo $row->nama_lengkap; ?></td>
                                                <td><?php echo word_limiter($row->isi_surat,10); ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="<?php echo site_url("draft/edit/". $row->id_surat_keluar); ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" id="p" class=" btn btn-sm btn-danger" onclick="confirm_modal('<?php echo "draft/delete/".$row->id_surat_keluar; ?>');"><i class="fa fa-trash-alt"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php $no++; 
                                            }
                                            }else{ ?>
                                            <tr>
                                                <td colspan="6" class="text-center">Data Kosong</td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>