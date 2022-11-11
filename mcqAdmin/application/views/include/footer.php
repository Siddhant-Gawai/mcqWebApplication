<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://erstellen.tech" target="_blank"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('plugins/sparklines/sparkline.js');?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?php echo base_url('plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo base_url('plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js');?>"></script>

<!-- jquery-validation -->
<script src="<?php echo base_url('plugins/jquery-validation/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('plugins/jquery-validation/additional-methods.min.js');?>"></script>


<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url('plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fullcalendar/main.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fullcalendar-daygrid/main.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fullcalendar-timegrid/main.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fullcalendar-interaction/main.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fullcalendar-bootstrap/main.min.js');?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>

<!-----export options------>
<!-- <script src='https://code.jquery.com/jquery-3.5.1.js'></script> -->
<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
 <script src="<?php echo base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
<!-- <script src= 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script> -->
<script src="<?php echo base_url('plugins/pdfmake/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('plugins/pdfmake/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>
<!-----export options------>
<script>
	$(document).ready(function() {
    var table = $('#example1').DataTable( {
        buttons: [ 'pdf', 'csv']
    } );
 
    table.buttons().container()
        .appendTo( '#example1_wrapper .col-md-6:eq(0)' );
} );
</script>

