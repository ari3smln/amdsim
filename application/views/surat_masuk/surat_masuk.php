                            <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Surat Masuk</h3>
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr><div class="table-data__tool-right">
                                            <a href="<?php echo site_url("surat_masuk/add"); ?>" class="btn btn-outline-success">
                                            <i class="fas fa-plus"></i> Tambah</a>
                                            </div></tr>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nomor Surat Masuk</th>
                                                <th>Tanggal Surat</th>
                                                <th>Asal</th>
                                                <th>Perihal</th>
                                                <th>Tujuan</th>
                                                <th>Scan Surat</th>
                                                <th>Waktu Input</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($record->num_rows() > 0){
                                            $no = 1;
                                            foreach ($record->result() as $row) { ?>
                                            <tr class="tr-shadow">
                                                <td> <?php echo $id_surat_masuk; ?></td>
                                                <td><?php echo $row->no_surat_masuk; ?></td>
                                                <td><?php echo $row->tgl_surat; ?></td>
                                                <td><?php echo $row->asal; ?></td>
                                                <td><?php echo $row->perihal; ?></td>
                                                <td><?php echo $row->tujuan; ?></td>
                                                <td><?php echo $row->scan_surat; ?></td>
                                                <td><?php echo $row->waktu_input; ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="<?php echo site_url("surat_masuk/edit/". $row->id_user); ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" id="p" class=" btn btn-sm btn-danger" onclick="confirm_modal('<?php echo "surat_masuk/delete/".$row->id_user; ?>');"><i class="fa fa-trash-alt"></i> Hapus</a>
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