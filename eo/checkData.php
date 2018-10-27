<?php

include 'config.php';


if(isset($_POST['eo_email']))
{
 $emailId=$_POST['eo_email'];

 $checkdata=" SELECT email_eo FROM eo WHERE email_eo='$emailId' ";

 $query=mysqli_query($koneksi, $checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email already exist";
 }
 else
 {
  echo "";
 }
 exit();
}


if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];

 $checkdata=" SELECT email_user FROM user WHERE email_user='$emailId' ";

 $query=mysqli_query($koneksi, $checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email already exist";
 }
 else
 {
  echo "";
 }
 exit();
}


?>