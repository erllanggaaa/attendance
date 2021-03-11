<?php

//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Rekap Absen'; //Beri nama file PDF hasil.
define('_MPDF_PATH','mpdf60/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4-L', 10.5, 'arial'); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

?>
<!doctype html>
<html>
    <head>
        <title>ATTENDANCE APP - ADMIN [REKAP ABSEN]</title>
		<?php
			include "include/css.php";
		?>
    </head>
    <body>
        <?php
		include "include/koneksi.php";
		include "include/fungsi_tgl.php";
		date_default_timezone_set('Asia/Jakarta');
		$tanggal1 = mktime(date("m"),date("d"),date("Y"));
		$tanggal = date("Y-m", $tanggal1);
		?>
		<table id="data" width="100" class="table table-striped table-scalable">	
				<thead>
					<tr>
						<th colspan="2" style='text-align:center'><h2>Attendance App</h2></th>
					</tr>
				</thead>
		</table>
		<table width="100%" id="data" class="table table-striped table-scalable">	
				<tbody>
					<tr>
						<?php
							if(empty($_POST['tglawal']) && empty($_POST['tglakhir'])){
								echo "<td>Tanggal : -</td>";
							}else{
								echo "<td>Tanggal :$_POST[tglawal] s/d tanggal :$_POST[tglakhir]</td>";
							}
						?>
						
					</tr>
				</tbody>
		</table>
		<div class="box box-info">
            
              <h5 class="box-title">Rekap Absen</h5>
            
		</div>
		<table width="100%" id="data" class="table table-bordered table-striped table-scalable">	
				<thead>
					<tr>
						<th>NIP</th>
                        <th>Nama</th>
                        <th>Waktu</th>
						<th>Keterangan</th>
                        <th>Catatan</th>
						<th>Surat Bukti</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(empty($_POST['tglawal']) && empty($_POST['tglakhir'])){
						$sqltampillaporanrekap = mysqli_query($konek, "SELECT a.nip, a.tanggal, a.jam, a.keterangan, a.catatan, a.surat_bukti, b.nama_pegawai FROM tbl_absen a JOIN tbl_pegawai b ON a.nip=b.nip WHERE SUBSTR(tanggal,1,7) = '$tanggal' ORDER BY a.tanggal ASC");
						if($sqltampillaporanrekap == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($hasiltampillaporanrekap = mysqli_fetch_array ($sqltampillaporanrekap)){
								echo "
								<tr>
								<td>$hasiltampillaporanrekap[nip]</td>
								<td>$hasiltampillaporanrekap[nama_pegawai]</td>
								<td>".tgl_indo($hasiltampillaporanrekap['tanggal'])." $hasiltampillaporanrekap[jam]</td>
								<td>$hasiltampillaporanrekap[keterangan]</td>
								<td>$hasiltampillaporanrekap[catatan]</td>
								<td>/attendance-app/pegawai/images/$hasiltampillaporanrekap[surat_bukti]</td>
							</tr>";
								}
					}else{
						$queryrekap = mysqli_query ($konek, "SELECT a.nip, a.tanggal, a.jam, a.keterangan, a.catatan, a.surat_bukti, b.nama_pegawai FROM tbl_absen a JOIN tbl_pegawai b ON a.nip=b.nip WHERE a.tanggal BETWEEN '".$_POST['tglawal']."' AND '".$_POST['tglakhir']."'");
						if($queryrekap == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($hasilrekap = mysqli_fetch_array ($queryrekap)){
							
							echo "
							<tr>
                            <td>$hasilrekap[nip]</td>
                            <td>$hasilrekap[nama_pegawai]</td>
                            <td>".tgl_indo($hasilrekap['tanggal'])." $hasilrekap[jam]</td>
                            <td>$hasilrekap[keterangan]</td>
                            <td>$hasilrekap[catatan]</td>
                            <td>/attendance-app/pegawai/images/$hasilrekap[surat_bukti]</td>
                            </tr>";
						}
					}
						
					?>
				</tbody>
			</table>
<script type="text/javascript">
  $(document).ready(function(){
    $('#data').DataTable();
});
</script>
</body>
</html>

<?php
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf

$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>