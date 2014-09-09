<?php
include '../db/library.php';
session_destroy();
unset($_SESSION['userid']);
unset($_SESSION['username']);
echo '<script type="text/javascript">window.location = "s-identifier"; </script>';
mysqli_close($conn);
?>