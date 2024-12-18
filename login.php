<?php

   $con=mysqli_connect('localhost','id21478319_contact','2@atulVERMA','id21478319_userdata');
   
   $Email = $_POST['txtemail'];
   $Password = $_POST['txtpassword'];

   $sql = "Insert Into login (Email,Password) VALUES ('$Email','$Password')";
$query = mysqli_query($con,$sql);
if($query==true)
{
  echo "<script>alert('login Successfully.');window.location.href='index.html';</script>";
}
?>