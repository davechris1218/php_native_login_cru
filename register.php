<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/iCheck/square/blue.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Jquery UI bootstrap theme for datepicker-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="https://adminlte.io/themes/AdminLTE/index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="register.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <!-- Give error if field empty when submit -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="datepicker" placeholder="Date of birth">
                </div>
                <!-- Give error if age under 18yo can't register -->
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <!-- Give error if email regex not valid -->
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <!-- Give error if field empty when submit -->
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <!-- Give error if password not match -->
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
            </form>
            <a href="login.php" class="text-center">I already have a membership</a>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="https://adminlte.io/themes/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <!-- Jquery UI-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });

        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    </script>
</body>

</html>