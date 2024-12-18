<?php
   $con=mysqli_connect('localhost','id21478319_contact','2@atulVERMA','id21478319_userdata');

   $Name = $_POST['txtname'];
   $Email = $_POST['txtemail'];
   $Password = $_POST['txtpassword'];

   $sql = "Insert Into register (Name,Email,Password) VALUES ('$Name','$Email','$Password')";
$query = mysqli_query($con,$sql);
if($query==true)
{
  echo "<script>alert('Registered Successfully.');window.location.href='login.html';</script>";
}
?>