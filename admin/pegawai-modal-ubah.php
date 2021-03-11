<?php

include "include/koneksi.php";

$querytampilpegawai = mysqli_query($konek, "SELECT * FROM tbl_pegawai WHERE nip = '".$_POST['kode']."'");
if($querytampilpegawai == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
$hasilpegawai = mysqli_fetch_array($querytampilpegawai);

?>
<!-- Modal Popup hasillpegawai -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><i class="glyph-icon icon-edit"> <strong>Ubah Data Pegawai</strong></i></h4>
					</div>
					<div class="modal-body">
						<form action="Ubah-Data-Pegawai" name="modal_popup" enctype="multipart/form-data" method="post">
                        <div class="form-group">
								<label>NIP</label><br>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-xing"></i>
										</div>
										<input name="nip" class="form-control" size="10" value="<?php echo $hasilpegawai["nip"]; ?>" readonly />
									</div>
							</div>
                            <div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-user"></i>
										</div>
										<input name="nama_pegawai" type="text" class="form-control" value="<?php echo $hasilpegawai["nama_pegawai"]; ?>" required 
											oninvalid="this.setCustomValidity('Harus diisi !')"
											oninput="setCustomValidity('')"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jabatan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-building-o"></i>
										</div>
										<select name="id_jabatan" class="form-control" required>
						<?php
$x="select * from tbl_jabatan where id_jabatan";
$y=mysqli_query($konek,$x);
while($z=mysqli_fetch_array($y)){
$pilih = ($z['id_jabatan']==$l['id_jabatan'])?"selected" : "";
echo "<option value=\"$z[id_jabatan]\" $pilih>$z[nama_jabatan]</option>";
}
?>
					</select>
									</div>
							</div>
                            <div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
									  <div class="input-group date">
										<div class="input-group-addon">
											<i class="glyph-icon icon-calendar"></i>
										</div>
                                        <input type="text" name="tgl_lahir" class="bootstrap-datepicker form-control" value="<?php echo $hasilpegawai['tgl_lahir']; ?>" data-date-format="yyyy/mm/dd" required>
									</div>
								</div>
							</div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="L" <?php if($hasilpegawai['jenis_kelamin']=='L') echo 'checked'?>>
                                    </span>
                                  <div class="form-control">Laki-Laki</div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" id="input-id-21" class="custom-radio" name="jenis_kelamin" value="P" <?php if($hasilpegawai['jenis_kelamin']=='P') echo 'checked'?>>
                                    </span>
                                  <div class="form-control">Perempuan</div>
                                </div>
                            </div>
                            <div class="form-group">
								<label>Agama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-archive"></i>
										</div>
										<select name="agama" class="form-control" required>
										<?php
											if($hasilpegawai["agama"] == 'Islam'){
												echo "<option selected value='Islam'>Islam</option>
													<option value='Katholik'>Katholik</option>
                                                    <option value='Protestan'>Protestan</option>
                                                    <option value='Hindu'>Hindu</option>
                                                    <option value='Budha'>Budha</option>";
											}else if($hasilpegawai["agama"] == 'Katholik'){
												echo "<option selected value='Katholik'>Katholik</option>
                                                <option value='Islam'>Islam</option>
                                                <option value='Protestan'>Protestan</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Budha'>Budha</option>";
											}else if($hasilpegawai["agama"] == 'Protestan'){
												echo "<option selected value='Protestan'>Protestan</option>
                                                <option value='Islam'>Islam</option>
                                                <option value='Katholik'>Katholik</option>
                                                <option value='Hindu'>Hindu</option>
                                                <option value='Budha'>Budha</option>";
                                            }else if($hasilpegawai["agama"] == 'Hindu'){
												echo "<option selected value='Hindu'>Hindu</option>
                                                <option value='Islam'>Islam</option>
                                                <option value='Katholik'>Katholik</option>
                                                <option value='Protestan'>Protestan</option>
                                                <option value='Budha'>Budha</option>";
                                            }else if($hasilpegawai["agama"] == 'Budha'){
												echo "<option selected value='Budha'>Budha</option>
                                                <option value='Islam'>Islam</option>
                                                <option value='Katholik'>Katholik</option>
                                                <option value='Protestan'>Protestan</option>
                                                <option value='Hindu'>Hindu</option>";
											}else{
												echo "error";
											}
										?>
										</select>
									</div>
							</div>
                            <div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-thumb-tack"></i>
										</div>
                                        <textarea name="alamat" rows="3" class="form-control textarea-sm"><?php echo $hasilpegawai["alamat"]; ?></textarea>
									</div>
							</div>
                            <div class="form-group">
								<label>No Telpon</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-tty"></i>
										</div>
										<input name="no_telp" maxLength="13" type="text" class="form-control" value="<?php echo $hasilpegawai["no_telp"]; ?>" onkeypress="return hanyaAngka(event)" required/>
									</div>
							</div>
							<div class="form-group">
								<label>Email</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-envelope"></i>
										</div>
										<input name="email" type="email" class="form-control" value="<?php echo $hasilpegawai["email"]; ?>" required/>
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
                            <div class="form-group">
								<label>Aktif</label>
									<div class="input-group">
										<div class=" radio-info">
                        <label>
                             <input type="radio" id="inlineRadio110" class="custom-radio" name="aktif" value="Y" <?php if($hasilpegawai['aktif']=='Y') echo 'checked'?>>
                                 Aktif
                        </label>
                        </div>
                        <div class=" radio-info">
                        <label>
                             <input type="radio" id="inlineRadio110" class="custom-radio" name="aktif" value="T" <?php if($hasilpegawai['aktif']=='T') echo 'checked'?>>
                                 Tidak
                        </label>
                        </div>
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

<!-- Bootstrap Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="../demo/monarch/assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="../demo/monarch/assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'yyyy-mm-dd'
        });
    });

</script>