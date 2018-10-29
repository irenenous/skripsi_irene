<?php
    if (isset($_POST['login'])) {
        include 'config.php';
        
        $email_eo=$_POST['email'];
        $password_eo= $_POST['password'];
        
        $sql = "SELECT * FROM eo where email_eo='$email_eo' and password_eo='$password_eo' ";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result))
            {

          echo("<script>location.href='../eo/dashboard-eo.php?msg=$msg';</script>");        
    }
        }
    
        if(isset($_POST['login'])) {
        //------------
        $email_user=$_POST['email'];
        $password_user=$_POST['password'];
        
        $sql = "SELECT * FROM user where email_user='$email_user' and password_klien='$password_user' and status='ACTIVE' ";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result))
            {             
            
            echo("<script>location.href='finish-login.php?msg=$msg';</script>");  
            }
        }
       else 
       {
            echo " <center> <Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><br>";
           echo "Wrong Email or Password </center>"  ;
       }
        mysqli_close($koneksi);
        }
        
        }
?>