<?php 
session_start();
if(!isset($_SESSION['uid'])){
    header("location:index.php");
    exit;
}
?>
<?php 
session_unset();
session_destroy();
header("location:index.php");

?>