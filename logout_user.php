<?php

include 'session_user.php';
session_destroy();
header('Location: logout_success_user.php');

?>