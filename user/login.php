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
            $_SESSION['is_eo'] = true;
            
            echo "success-eo"; 
//            header('location:../eo/dashboard-eo.php');
        }
        else if($row == 0) {
        
       $sql2 = "SELECT * FROM user where email_user='$email' and password_user='$password' and role='KLIEN' and status='ACTIVE' ";
        $result2 = mysqli_query($koneksi, $sql2);
        $row2 = mysqli_num_rows($result2);
        if ($row2> 0) {
            $keluar2 = mysqli_fetch_assoc($result2);
            $_SESSION['id'] = $keluar2['id_user'];
            $_SESSION['is_eo'] = false;
            
            echo "success-user";
//            header('location:../FRONTEND-WEB/index-fiyeo.php');
         }
        else if ($row == 0) {
        $sql3 = "SELECT * FROM user where email_user='$email' and password_user='$password' and role='ADMIN' and status='ACTIVE'";
        $result3 = mysqli_query($koneksi, $sql3);
        $row3 = mysqli_num_rows($result3);
        if ($row3> 0) {
            $keluar3 = mysqli_fetch_assoc($result3);
            $_SESSION['id'] = $keluar3['id_user'];
           
            echo "success-admin";
//            header('location:../admin/dashboard-admin.php'); 
        }  
        else {
           echo "fail";
        }
        } }
   
        //------------

    mysqli_close($koneksi);
    }
        
?>
