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

    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">

                    <div class="text-center">
                        <a href="login.php" onMouseOver="this.style.color='#0F0'" onMouseOut="this.style.color='#FFF'"><span><u>Click to login</u></span></a>
                    </div>
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="box">
            <div class="box-body">
                <div class="modal fade" id="empModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Item Info</h4>
                            </div>
                            <div class="modal-body" id="details">

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
                        <div class="container">
                            <div class="row">
                                <?php include 'table_join.php'; ?>
                                <form method="GET" action="localhost/php_native_login_crud/ajaxfile.php">
                                    <?php $result = mysqli_query($conn, $sql);
                                    while ($fetch =  mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="col-xs-3">
                                            <?php echo $fetch['item_image']; ?>
                                            <br>
                                            <?php echo $fetch['item_name']; ?>
                                            <br>
                                            <?php echo $fetch['item_price']; ?>
                                            <br>
                                            <?php echo $fetch['description']; ?>
                                            <br>
                                            <?php echo $fetch['item_type']; ?>
                                            <br>
                                            <p class="text-left"><a href="javascript:void(0)" class="btn btn-success userinfo" id="<?php echo $row['id']; ?>" data-target=".modal-body" data-toggle="modal">Show Details</a></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                            <!-- /.row -->
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
            </div>
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
                        method: 'GET',
                        data: {
                            id: userid
                        },
                        success: function(response) {
                            $('#details').html(response);
                            $('#empModal').modal('show');
                        }
                    });
                });
            });
        </script>
</body>

</html>