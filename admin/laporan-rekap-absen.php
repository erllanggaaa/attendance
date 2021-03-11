<?php
include "include/koneksi.php";
include "include/fungsi_tgl.php";
date_default_timezone_set('Asia/Jakarta');
$tanggal1 = mktime(date("m"),date("d"),date("Y"));
$tanggal = date("Y-m", $tanggal1);
?>				
			<table id="data" class="table table-bordered table-striped table-scalable">
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
					if(empty($_POST['tgl1']) && empty($_POST['tgl2'])){
						$sqltampillaporanrekap = mysqli_query($konek, "SELECT a.nip, a.tanggal, a.jam, a.keterangan, a.catatan, a.surat_bukti, b.nama_pegawai FROM tbl_absen a JOIN tbl_pegawai b ON a.nip=b.nip WHERE SUBSTR(tanggal,1,7) = '$tanggal' ORDER BY a.tanggal ASC");
						while ($hasiltampillaporanrekap = mysqli_fetch_array($sqltampillaporanrekap)){
							
							echo "
								<tr>
									<td>$hasiltampillaporanrekap[nip]</td>
									<td>$hasiltampillaporanrekap[nama_pegawai]</td>
									<td>".tgl_indo($hasiltampillaporanrekap['tanggal'])." $hasiltampillaporanrekap[jam]</td>
									<td>$hasiltampillaporanrekap[keterangan]</td>
									<td>$hasiltampillaporanrekap[catatan]</td>
									<td><a target='_blank' href='/attendance-app/pegawai/images/$hasiltampillaporanrekap[surat_bukti]'>Buka</a></td>
								</tr>";
                            }
                }else{
                    $queryrekap = mysqli_query ($konek, "SELECT a.nip, a.tanggal, a.jam, a.keterangan, a.catatan, a.surat_bukti, b.nama_pegawai FROM tbl_absen a JOIN tbl_pegawai b ON a.nip=b.nip WHERE a.tanggal BETWEEN '".$_POST['tgl1']."' AND '".$_POST['tgl2']."' ORDER BY a.tanggal ASC");
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
                            <td><a target='_blank' href='/attendance-app/pegawai/images/$hasilrekap[surat_bukti]'>Buka</a></td>
                            </tr>";
                    }
                }
                    
                ?>
            </tbody>
        </table>
        * Keterangan <b>Datang</b> & <b>Pulang</b> Tidak memakai Catatan dan Surat Bukti *<br>
* Hanya Keterangan <b>Izin</b> & <b>Sakit</b> Yang memakai Catatan dan Surat Bukti*
<script type="text/javascript">
$(document).ready(function(){
$('#data').DataTable();
});
</script>