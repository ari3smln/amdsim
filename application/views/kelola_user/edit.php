<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Kelola Data User</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Edit Data User</h3>
                                        </div>
                                        <hr>
                                        <form action="<?php echo site_url("users/edit/". $record["id_user"]);?>" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama Lengkap</label>
                                                <input value="<?php echo $record["nama_lengkap"]; ?>" id="cc-pament" name="nama_lengkap" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <input type="hidden" name="id_user" value="<?php echo $record["id_user"];?>">
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Username</label>
                                                <input value="<?php echo $record["username"]; ?>" id="cc-name" name="username" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Password</label>
                                                <input value="<?php echo $record["password"]; ?>" id="cc-number" name="password" type="password" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Jabatan</label>
                                                        <select name="jabatan" class="form-control">
                                                            <option value=""></option>
                                                            <option value="tu" <?php if($record["jabatan"]=="tu"){echo " selected='selected' "; } ?> >TU</option>
                                                            <option value="kepsek" <?php if($record["jabatan"]=="kepsek"){echo " selected='selected' "; } ?> >Kepsek</option>
                                                            <option value="admin" <?php if($record["jabatan"]=="admin"){echo " selected='selected' "; } ?> >Admin</option>
                                                        </select>
                                                    </div>
                                            <div class="row">
                                            <div class="col-lg-8"></div>
                                            <div class="col-lg-4">
                                                <button class="btn btn-success" name="submit" type="submit">Simpan</button>
                                                <a class="btn btn-warning" href="<?php echo site_url("users"); ?>">Kembali</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>