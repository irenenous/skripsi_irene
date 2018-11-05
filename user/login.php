<?php
session_start();
    if (isset($_POST['login'])) {
        include 'config.php';
        
        $email=$_POST['email'];
        $password= $_POST['password'];
        
        $sql = "SELECT * FROM eo where email_eo='$email' and password_eo='$password' and status='VERIFIED'";
        $result = mysqli_query($koneksi, $sql);
        $row =mysqli_num_rows($result);
        if ($row > 0) 
        {
            $keluar = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $keluar['id_eo'];
             header('location:../eo/dashboard-eo.php');
        }
        else if($row == 0) {
        
       $sql2 = "SELECT * FROM user where email_user='$email' and password_user='$password' and status='ACTIVE' ";
        $result2 = mysqli_query($koneksi, $sql2);
        $row2 = mysqli_num_rows($result2);
        if ($row2> 0) {
            $keluar2 = mysqli_fetch_assoc($result2);
            $_SESSION['id'] = $keluar2['id_user'];
            header('location:../FRONTEND-WEB/index-fiyeo.php');
         }
            else 
       {
            echo " <center> <Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><br>";
           echo "Wrong Email or Password </center>"  ;
       }   
        }
            
        
   
        //------------

    mysqli_close($koneksi);
    }
        

?>