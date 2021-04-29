<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>

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

                    <div class="pull-left">

                        <p><strong>
                                <font color="white"><?php echo $_SESSION['email']; ?></font>
                            </strong></p>

                        <a href="index.php?logout='1'">
                            <font color="red">Sign Out</font>
                        </a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Menu</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                            <li><a href="index_2.php"><i class="fa fa-circle-o"></i> Item</a></li>
                            <li><a href="crud.php"><i class="fa fa-circle-o"></i> Table</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Add/Update Data from table
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- /.box -->

                        <div class="box">
                            <div class="box-header">
                                <p class="text-left"><a href="javascript.void(0)" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="datatable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody id="modal-data">
                                        <?php

                                        include "connect.php";
                                        $x = 0;
                                        $modal = mysqli_query($connect, "SELECT * FROM user_item ORDER BY id DESC");
                                        while ($r = mysqli_fetch_array($modal)) {
                                            $x++;

                                        ?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo  $r['item_name']; ?></td>
                                                <td><?php echo  $r['description']; ?></td>
                                                <td>
                                                    <a href="javascript:void(0)" class='open_modal' id='<?php echo  $r['id']; ?>'>Edit</a>
                                                    <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $r['id']; ?>'>Delete</a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                            <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h2 class="modal-title"><strong>Add Data</strong></h2>
                                        </div>

                                        <div class="modal-body">
                                            <form id="form-save" action="save.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                                                <div class="form-group" style="padding-bottom: 20px;">
                                                    <label for="Name">Name</label>
                                                    <input type="text" name="item_name" id="item-name" class="form-control" placeholder="Name" required />
                                                </div>

                                                <div class="row form-group" style="padding-bottom: 20px;">
                                                    <div class="col-md-3">
                                                        <label for="Type">Type</label>
                                                        <br>
                                                        <select class="form-select form-select-lg mb-3" name="item_type">
                                                            <option value="Food">Food</option>
                                                            <option value="Drink">Drink</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group" style="padding-bottom: 20px;">
                                                    <label for="Description">Description</label>
                                                    <br>
                                                    <textarea rows="4" cols="75" name="description"></textarea>
                                                </div>

                                                <div class="form-group" style="padding-bottom: 20px;">
                                                    <label for="Price">Price</label>
                                                    <input type="text" name="item_price" id="item-price" class="form-control" placeholder="Price" required />
                                                </div>item_priceitem_priceitem_priceitem_price

                                                <div class="form-group" style="padding-bottom: 20px;">
                                                    <label for="Image">Image</label>
                                                    <input type="file" name="item_image" accept="image/x-png,image/gif,image/jpeg" />
                                                </div>

                                                <div class="modal-footer">
                                                    <button class="btn btn-success" type="submit">
                                                        Save
                                                    </button>

                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                        </div>

                        <div class="modal fade" id="modal_delete">
                            <div class="modal-dialog">
                                <div class="modal-content" style="margin-top:100px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Are you sure to delete this data ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                        <button type="button" class="btn btn-danger" id="delete_link">Delete</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').on('click', '.open_modal', function(e) {
                var m = $(this).attr("id");
                $.ajax({
                    url: "modal_edit.php",
                    type: "GET",
                    data: {
                        id: m,
                    },
                    success: function(ajaxData) {
                        $("#ModalEdit").html(ajaxData);
                        $("#ModalEdit").modal('show', {
                            backdrop: 'true'
                        });
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $('body').on('submit', '#form-save', function(e) {
            e.preventDefault();
            $.ajax({
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: {
                        item_name: $('#modal-name').val(),
                        description: $('#description').val(),
                    },
                    success: function(response) {
                        console.log(response);
                        $("#modal-data").empty();
                        $("#modal-data").html(response.data);
                        $("#ModalAdd").modal('hide');
                        $(".modal-backdrop").hide();
                    },
                    error: function(e) {
                        // Error function here
                    },
                    beforeSend: function(b) {
                        // Before function here
                    }
                })
                .done(function(d) {
                    // When ajax finished
                });
        });
    </script>

    <script type="text/javascript">
        $('body').on('submit', '#form-update', function(e) {
            e.preventDefault();
            $.ajax({
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: {
                        id: $('#edit-id').val(),
                        item_name: $('#edit-name').val(),
                        description: $('#edit-description').val(),
                    },
                    success: function(response) {
                        console.log(response);
                        $("#modal-data").empty();
                        $("#modal-data").html(response.data);
                        $("#ModalEdit").modal('hide');
                    },
                    error: function(e) {
                        // Error function here
                    },
                    beforeSend: function(b) {
                        // Before function here
                    }
                })
                .done(function(d) {
                    // When ajax finished
                });
        });
    </script>

    <script type="text/javascript">
        $('body').on('click', '.delete_modal', function(e) {
            let modalId = $(this).data('id');
            $('#modal_delete').modal('show', {
                backdrop: 'static'
            });
            $("#delete_link").on("click", function() {
                e.preventDefault();
                $.ajax({
                        method: 'POST',
                        url: 'delete.php',
                        data: {
                            id: modalId
                        },
                        success: function(response) {
                            console.log(response);
                            $("#modal-data").empty();
                            $("#modal-data").html(response.data);
                            $("#modal_delete").modal('hide');

                        },
                        error: function(e) {
                            // Error function here
                        },
                        beforeSend: function(b) {
                            // Before function here
                        }
                    })
                    .done(function(d) {
                        // When ajax finished
                    });
            });
        });
    </script>
    
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
</body>

</html>