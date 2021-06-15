<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['login'])){

	// ambil data dari formulir	
	$username = $_POST['username'];
	$password = $_POST['password'];

	// buat query
  $query = pg_query("select * from Artist where Username='$username' and Password='$password'");
$cek = pg_num_rows($query);

	// apakah query simpan berhasil?
	if( $cek==1 ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: main.html?');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: gagal1.html?');
	}


} else {
	die("Akses dilarang...");
}
?>
