<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/morris.js/morris.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini layout-fixed">

    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="empModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Item Info</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Item Showcase
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php include 'table_join.php';
                    $result = array();
                    while ($fetch =  mysqli_fetch_assoc($query)) {
                        $result[] = $fetch;
                    }
                    foreach ($result as $fetch) {
                    ?>
                        <div class="col-4">
                            <p><?php echo $fetch['item_image']; ?></p>
                            <br>
                            <p><?php echo $fetch['item_name']; ?></p>
                            <br>
                            <p><?php echo $fetch['item_price']; ?></p>
                            <br>
                            <p><?php echo $fetch['description']; ?></p>
                            <br>
                            <p><?php echo $fetch['item_type']; ?></p>
                            <a><button class="userinfo">Click for details</button></a>
                        </div>
                    <?php
                    }
                    ?>
                    <div>
                         <a href="login.php"><span style="display: block;">Click to login</span></a>
                    </div>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

        <!-- jQuery 3 -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/raphael/raphael.min.js"></script>
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="https://adminlte.io/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/moment/min/moment.min.js"></script>
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="https://adminlte.io/themes/AdminLTE/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>

        <script>
            $(document).ready(function() {

                $('.userinfo').click(function() {

                    var userid = $(this).data('id');

                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {
                            userid: userid
                        },
                        success: function(response) {
                            $('.modal-body').html(response);
                            $('#empModal').modal('show');
                        }
                    });
                });
            });
        </script>
</body>

</html>
