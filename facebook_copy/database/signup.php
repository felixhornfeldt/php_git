<?php

if (isset($_POST['submitSignUp'])) {
    include_once 'dbh.php';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $conpassword = mysqli_real_escape_string($conn, $_POST['conpwd']);

    // Error handlers
    // Check empty fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($conpassword)) {
        header("Location: ../index.php?signup=empty");
        exit();
    } else {
        // Check if input is valid
        if (!preg_match("/^[a-öA-Ö]^$/", $firstname) || !preg_match("/^[a-öA-Ö]^$/", $lastname)) {
            header("Location: ../index.php?signup=invalid");
            exit();
        } else {
            // Check if username is lower case
            if (!preg_match("/^[a-z]^$/", $username)) {
                header("Location: ../index.php?signup=usernameinvalid");
                exit();
            } else {
                // Check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=invalidemail");
                    exit();
                } else {
                    //Check username
				    $sql = "SELECT * FROM users WHERE user_uid='$username'";
				    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        header("Location: ../index.php?signup=usernameunavailable");
                        exit();
                    } else {
                        // Check password and hash the password
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        if ($password != $conpassword) {
                            header("Location: ../index.php?signup=passwordnomatch");
                            exit();
                        } else {
                            //Insert the user into the database
					        $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_username, user_password) VALUES ('$firstname', '$lastname', '$email', '$username', '$hashedPwd');";
					        mysqli_query($conn, $sql);
					
					        //Sucess
                            header("Location: ../index.php?signup=sucess");
                            exit();
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../index.php?signup=empty");
    exit();
}