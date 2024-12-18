<?php

   $con=mysqli_connect('localhost','id21478319_contact','2@atulVERMA','id21478319_userdata');
   
   $Name = $_POST['name'];
   $Email = $_POST['email'];
   $Message = $_POST['message'];

   $sql = "Insert Into contact (Name,Email,Message) VALUES ('$Name','$Email','$Message')";
$query = mysqli_query($con,$sql);
if($query==true)
{
  echo "<script>alert('login Successfully.');window.location.href='index.html';</script>";
}
?>