<?PHP

session_start();
session_destroy();
header ('location: index-fiyeo.php');
?>