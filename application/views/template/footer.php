<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url().'plugins/jquery/jquery.min.js'; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url().'plugins/jquery-ui/jquery-ui.min.js'; ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url().'plugins/chart.js/Chart.min.js'; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'plugins/sparklines/sparkline.js'; ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url().'plugins/jqvmap/jquery.vmap.min.js'; ?>"></script>
<script src="<?php echo base_url().'plugins/jqvmap/maps/jquery.vmap.usa.js'; ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url().'plugins/jquery-knob/jquery.knob.min.js'; ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url().'plugins/moment/moment.min.js'; ?>"></script>
<script src="<?php echo base_url().'plugins/daterangepicker/daterangepicker.js'; ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url().'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'; ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url().'plugins/summernote/summernote-bs4.min.js'; ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url().'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'dist/js/adminlte.js'; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'dist/js/demo.js'; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'dist/js/pages/dashboard.js'; ?>"></script>

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
</script>



</body>
</html>