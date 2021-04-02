<?php
session_start();
session_unset($_SESSION['login_user']);
session_destroy();
header('Location:../../index.php');
 ?>
