<?php
include 'koneksi.php';
if(isset($_POST['btnLogin'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query=mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
	$data = mysqli_fetch_array($query);

	if(mysqli_num_rows($query)>=1){
		if(password_verify($password, $data['password'])){
			//login valid
			header('location:index.php');
		}else{
			//password salah
			header('location:login.php?pesan=Password Salah');
		}
	}else{
		//username salah
		header('location:login.php?pesan=Username Salah');
	}
}
?>
