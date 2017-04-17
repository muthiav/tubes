 <?php
session_start();
if ( !isset($_SESSION['nama']) || ($_SESSION['status'] != 'pelanggan' ) ) {
 
	header('location:./../login.php');
	exit();
}
?>
<h2>Hallo pelanggan <?=$_SESSION['nama'];?> Apakabar ?</h2>
 
<a href="./../logout.php">Logout</a>