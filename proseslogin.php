<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysqli_query($koneksi,"SELECT username FROM admin 
                    WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
print_r($data);

if ($data['username']==$username){
	session_start();
	$_SESSION['username']    = $username;
    //$_SESSION['password']    = $password;

	echo "<script>alert('Selamat datang $username'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";	
}
?>