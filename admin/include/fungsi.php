<?php
    date_default_timezone_set('Asia/Jakarta');
        $thedate = getdate();
        $day= $thedate["mday"];
        $month = $thedate["mon"];
        $year = $thedate["year"];
        $hours = $thedate["hours"];
        $minutes = $thedate["minutes"];
        $secounds = $thedate["seconds"];
        $tanggal ="$year/$month/$day";
?>


<script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>


<?php       
    $sqlnip = mysqli_query ($konek, "SELECT nip FROM tbl_pegawai WHERE SUBSTR(nip,7,4) = (SELECT MAX(SUBSTR(nip,7,4)) FROM tbl_pegawai) GROUP BY SUBSTR(nip,7,4)");
        $rowpegawai = mysqli_fetch_array($sqlnip);
            if($rowpegawai){
                $nilainip = substr($rowpegawai[0],6,4);
                $nonip = (int) $nilainip;
                $nonip = $nonip + 1;
                $nonip1 = date('d').date('m').date('y').str_pad($nonip, 4, "0", STR_PAD_LEFT);
            }else {
                $nonip1 = "0901210001";
            }
?>