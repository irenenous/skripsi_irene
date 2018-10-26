<?php
date_default_timezone_set("Asia/Jakarta");
include 'config.php';
//*----end libs----*//





    public function SignUpKlien($username,$email,$password,$nama,$nohp,$foto,$status)
    {
        $calConn = $this->connectionKey();
        $pass =md5($_password);
        $query = $calConn->query("INSERT INTO klien(username_klien, email_klien, password_klien, nama_klien, nohp_klien, foto_klien, status) 
        VALUES('$username', '$email', '$password', '$nama', '$nohp', '$foto', '$status')");
        if($query){
            $this->SignInFunction($_email,$_password);
        }else{
            echo "<script>alert('Internal Server Error!')</script>";
        }
        

         return $data;

    }
}
?>