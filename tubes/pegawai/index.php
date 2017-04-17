 <?php
session_start();
if ( !isset($_SESSION['nama']) || ($_SESSION['status'] != 'pegawai' ) ) {
 
	header('location:./../login.php');
	exit();
}
?>

<html>
<head>
<title>Pegawai</title>
 <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="button-container">
    <button type="submit" class="button"><span>Submit</span></button>
  </div> 
</div>
<h2>Hallo Pegawai <?=$_SESSION['nama'];?> Apakabar ?</h2>
<a href="./../logout.php">Logout</a>
</body>
</html>