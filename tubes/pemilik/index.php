 <?php
session_start();
if ( !isset($_SESSION['nama']) || ($_SESSION['status'] != 'pemilik' ) ) {
 
	header('location:./../login.php');
	exit();
}
?>
<h2>Hallo <?=$_SESSION['nama'];?> Apakabar ?</h2>
 
<a href="./../logout.php">Logout</a>