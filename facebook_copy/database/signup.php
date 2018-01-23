<?php

if (isset($_POST['submitSignUp'])) {
    include_once 'dbh.php';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $conpwd = mysqli_real_escape_string($conn, $_POST['conpwd']);

    // Error handlers
    // Check empty fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($conpwd)) {
        header("Location: ../?signup=empty");
        exit();
    } else {
        // Check if input is valid
        if (!preg_match("/^[a-öA-Ö]*$/", $firstname) || !preg_match("/^[a-öA-Ö]*$/", $lastname)) {
            header("Location: ../?signup=invalid");
            exit();
        } else {
            // Check if username is lower case
            if (!preg_match("/^[a-z]*$/", $username)) {
                header("Location: ../?signup=usernameinvalid=notlowercase");
                exit();
            } else {
                // Check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../?signup=invalidemail");
                    exit();
                } else {
                    //Check username
				    $sql = "SELECT * FROM users WHERE user_uid='$username'";
				    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        header("Location: ../?signup=usernameunavailable");
                        exit();
                    } else {
                        // Check password
                        if ($password != $conpwd) {
                            header("Location: ../?signup=passwordnomatch");
                            exit();
                        } else {
                            // Hashing the password
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                            //Insert the user into the database
					        $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_username, user_password) VALUES ('$firstname', '$lastname', '$email', '$username', '$hashedPassword');";
					        mysqli_query($conn, $sql);
					        //Sucess
                            header("Location: ../?signup=sucess");
                            exit();
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../?signup=false");
    exit();
}