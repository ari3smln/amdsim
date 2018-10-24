                <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Data Users</h3>
                                <div class="table-data__tool">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr><div class="table-data__tool-right">
                                            <a href="<?php echo site_url("users/add"); ?>" class="btn btn-outline-success">
                                            <i class="fas fa-plus"></i> Tambah</a>
                                            </div></tr>
                                            <tr>
                                                <th>no</th>
                                                <th>username</th>
                                                <th>nama lengkap</th>
                                                <th>jabatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($record->num_rows() > 0){
                                            $no = 1;
                                            foreach ($record->result() as $row) { ?>
                                            <tr class="tr-shadow">
                                                <td> <?php echo $no; ?></td>
                                                <td><?php echo $row->username; ?></td>
                                                <td><?php echo $row->nama_lengkap; ?></td>
                                                <td><?php echo $row->jabatan; ?></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="<?php echo site_url("users/edit/". $row->id_user); ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" id="p" class=" btn btn-sm btn-danger" onclick="confirm_modal('<?php echo "users/delete/".$row->id_user; ?>');"><i class="fa fa-trash-alt"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php $no++; 
                                            }
                                            }else{ ?>
                                            <tr>
                                                <td colspan="5" class="text-center">Data Kosong</td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>