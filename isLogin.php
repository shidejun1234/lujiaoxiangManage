<?php
if (! isset ( $_SESSION )) {
    session_start ();
}
if (!isset ( $_SESSION ['userName'] )) {
    header ( "location:../login.php" );
}
if (isset($_SESSION ['userName'])) {
    $sessionUserName = $_SESSION ['userName'];
}
?>