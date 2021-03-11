<?php

include "include/koneksi.php";

$querytampiluser = mysqli_query($konek, "SELECT * FROM tbl_admin WHERE id_admin = '".$_POST['kode']."'");
if($querytampiluser == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
$hasiluser = mysqli_fetch_array($querytampiluser);

?>
<!-- Modal Popup hasilluser -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><i class="glyph-icon icon-edit"> <strong>Ubah Data User</strong></i></h4>
					</div>
					<div class="modal-body">
						<form action="Ubah-Data-User" name="modal_popup" enctype="multipart/form-data" method="post">
						<div class="form-group">
								<label>ID</label><br>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-xing"></i>
										</div>
										<input name="id_admin" class="form-control" value="<?php echo $hasiluser["id_admin"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $hasiluser["nama"]; ?>" required 
											oninvalid="this.setCustomValidity('Harus diisi !')"
											oninput="setCustomValidity('')"/>
									</div>
							</div>
							<div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="L" <?php if($hasiluser['jenis_kelamin']=='L') echo 'checked'?>>
                                    </span>
                                  <div class="form-control">Laki-Laki</div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="P" <?php if($hasiluser['jenis_kelamin']=='P') echo 'checked'?>>
                                    </span>
                                  <div class="form-control">Perempuan</div>
                                </div>
                            </div>
                            <div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-tty"></i>
										</div>
										<input name="no_telp" maxLength="13" type="text" class="form-control" value="<?php echo $hasiluser["no_telp"]; ?>" onkeypress="return hanyaAngka(event)" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-envelope"></i>
										</div>
										<input name="email" type="email" class="form-control" value="<?php echo $hasiluser["email"]; ?>" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-lock"></i>
										</div>
										<input name="password" minlength="6" type="password" class="form-control" placeholder="Password"/>
									</div>
							</div>
                            <div class="form-group">
								<label>Foto</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-camera-retro"></i>
										</div>
										<input name="foto" type="file" class="form-control"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-default"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>