<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['signup'])){

	// ambil data dari formulir	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$contact = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// buat query
  $query = pg_query("INSERT INTO Artist (First_name, Last_name, Username, Contact, Email, Password) VALUEs ('$fname', '$lname', '$username', '$contact', '$email', '$password')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: LOGIN BASDAT.html?');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		header('Location: gagal.html?');
	}


} else {
	die("Akses dilarang...");
}
?>
