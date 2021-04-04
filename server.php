<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost', 'nagax21', 'Fiorenasitalia1234', 'native_login_crud');

    // REGISTER
    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $birthDate = mysqli_real_escape_string($db, $_POST['birth_date']);
        $password1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password2 = mysqli_real_escape_string($db, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($birthDate)) {
            array_push($errors, "Date of birth is required");
        }

        if ($birthDate > 2003) {
            array_push($errors, "Age must be 18 or higher");
        }

        if (empty($password1)) {
            array_push($errors, "Password is required");
        }

        if ($password1 != $password2) {
            array_push($errors, "The passwords do not match");
        }

        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password1);
            $query = "INSERT INTO users (username, email, password, DateOfBirth) VALUES('$username', '$email', '$password', '$birthDate')";
            mysqli_query($db, $query);
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index_2.php');
        }
    }

    // LOGIN
    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
       
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index_2.php');
            }else {
                array_push($errors, "Wrong email/password combination");
            }
        }
    }
?>    
