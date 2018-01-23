<?php

session_start();

if (isset($_POST['submitLogin'])) {
    include_once 'dbh.php';

    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    //Error handlers
    //Check if inputs are empty
    if (empty($username) || empty($password)) {
        header("Location: ../?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../?login=error=username");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                // Dehash password
                $hashedPasswordCheck = password_verify($password, $row['user_password']);
                if ($hashedPasswordCheck == false) {
                    header("Location: ../?login=error=password");
                    exit();
                } elseif ($hashedPasswordCheck == true) {
                    // Log in user
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_firstname'];
                    $_SESSION['u_last'] = $row['user_lastname'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_username'];
                    header("Location: ../?login=sucess");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../index.php?login=error");
    exit();
}