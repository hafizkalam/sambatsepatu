<?php
session_start();

$username   = $_POST['username'];
$password   = $_POST['password'];

include 'config.php';

$user = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    $data = mysqli_fetch_assoc($user);
    $_SESSION["username"] = $data['username'];
    $_SESSION["id_user"] = $data['id_user'];
    if($data ['level']==1 ){
        header("location:index.php");
    }else{
        header("location:index_admin.php");
    }
    
}else
{
    header("location:login_page.php");
}
?>