<?php

include "include/koneksi.php";

$querytampiljabatan = mysqli_query($konek, "SELECT * FROM tbl_jabatan WHERE id_jabatan = '".$_POST['kode']."'");
if($querytampiljabatan == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
$hasiljabatan = mysqli_fetch_array($querytampiljabatan);

?>
<!-- Modal Popup hasiljabatan -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><i class="glyph-icon icon-edit"> <strong>Ubah Data Jabatan</strong></i></h4>
					</div>
					<div class="modal-body">
						<form action="Ubah-Data-Jabatan" name="modal_popup" enctype="multipart/form-data" method="post">
                        <div class="form-group">
								<label>Nama Jabatan</label><br>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="glyph-icon icon-building-o"></i>
										</div>
										<input name="id_jabatan" type="hidden" class="form-control" placeholder="ID Jabatan" value="<?php echo $hasiljabatan['id_jabatan'] ?>" readonly="readonly"/>
										<input name="nama_jabatan" class="form-control" value="<?php echo $hasiljabatan["nama_jabatan"]; ?>" />
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