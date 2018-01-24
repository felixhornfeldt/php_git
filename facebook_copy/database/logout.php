<?php

if (isset($_POST['submitLogOut'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../");
    exit();
}