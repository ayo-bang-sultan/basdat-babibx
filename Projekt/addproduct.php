<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['upload'])){

	// ambil data dari formulir
	$Item_name = $_POST['ItemName'];
	$Category = $_POST['Categories'];
	$Price = $_POST['Price'];
	$Photo = $_POST['ArtPhoto'];

	// buat query
  $query = pg_query("INSERT INTO Item (ItemName, Categories, Price, ArtPhoto) VALUEs ('$Item_name', '$Category', '$Price', '$Photo')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location:.../SIGNUP BASDAT.html?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location:.../SIGNUP BASDAT.html?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
