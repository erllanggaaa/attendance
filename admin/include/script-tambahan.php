

<!-- Js Tambahan -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- chart js -->
    <script src="../aset/plugins/chartjs/Chart.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
    <!-- Daterange Picker -->
    <script src="../aset/plugins/daterangepicker/moment.min.js"></script>
    <script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../aset/plugins/select2/select2.full.min.js"></script>
    <script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../asset/bootbox.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {   
        // Daterange Picker
        $('#tglawal').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            format: 'YYYY-MM-DD'
            
        });
        
        // Daterange Picker
        $('#tglakhir').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            format: 'YYYY-MM-DD'
        });
        
          // Data Table
        $("#data").dataTable({
        });     
      });
    </script>


    <!-- Date Time Picker -->
    <script>
        $(function (){
            $('#Jam_Mulai').datetimepicker({
                format: 'HH:mm'
            });
            
            $('#Jam_Selesai').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
    
    <!-- Javascript Edit--> 
    <script type="text/javascript">
        $(document).ready(function () {
        
        // pegawai
        $(document).on('click','.open_modal',function(e) {
            e.preventDefault();
            var m = $(this).attr("id");
                $.ajax({
                    url: "pegawai-modal-ubah.php",
                    type: "POST",
                    data : {kode: m,},
                    success: function (ajaxData){
                    $("#ModalUbahPegawai").html(ajaxData);
                    $("#ModalUbahPegawai").modal('show',{backdrop: 'true'});
                    }
                });
            });

        // jabatan
        $(document).on('click','.open_modal',function(e) {
            e.preventDefault();
            var m = $(this).attr("id");
                $.ajax({
                    url: "jabatan-modal-ubah.php",
                    type: "POST",
                    data : {kode: m,},
                    success: function (ajaxData){
                    $("#ModalUbahJabatan").html(ajaxData);
                    $("#ModalUbahJabatan").modal('show',{backdrop: 'true'});
                    }
                });
            });

        // user
        $(document).on('click','.open_modal',function(e) {
            e.preventDefault();
            var m = $(this).attr("id");
                $.ajax({
                    url: "user-modal-ubah.php",
                    type: "POST",
                    data : {kode: m,},
                    success: function (ajaxData){
                    $("#ModalUbahUser").html(ajaxData);
                    $("#ModalUbahUser").modal('show',{backdrop: 'true'});
                    }
                });
            });    
            
        });
    </script>