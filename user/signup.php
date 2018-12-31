 <?php
include 'config.php';
        
        $tangkapNama        = $_POST['name'];
        $tangkapNohp        = $_POST['phone'];
        $tangkapEmail        = $_POST['email'];
        $tangkapPassword     = $_POST['password'];
        $tangkapFoto       = 'image-user/user-image.jpg';
        $tangkapRole       = 'KLIEN';
        $tangkapStatus     = 'PENDING';
        
        $tangkapPassword = ($tangkapPassword);
        
        
        $query = mysqli_query($koneksi , "insert into user values ('','$tangkapNama', '$tangkapNohp', '$tangkapEmail',
        '$tangkapPassword', '$tangkapFoto', '$tangkapRole', '$tangkapStatus')");
        
     
        if (!$query) {
            echo mysqli_error($koneksi);
            http_response_code(400);
        } 
        else {    
        echo "OK";
        $user_id = mysqli_insert_id($koneksi);
        $msg = '
        <html>
        <body>
        <div align="center">
        <img src="http://localhost:81/skripsi_irene/temp-fiyeo/img/irene/fiyeobg.png">
        </div>
        <hr>
        <p>Hello '.$tangkapNama.', </p>
        <p>Thank you for registering your account. Below is your details: </p>
        Full Name : '.$tangkapNama.'
        <br>
        Phone Number : '.$tangkapNohp.'
        <br>
        E-mail : '.$tangkapEmail.'
        <br>
        Password : '.$tangkapPassword.'
        <br>
        <p>Please verify your account by clicking <a href="http://localhost:81/skripsi_irene/user/verifyacc.php?id_user='.$user_id.'">here</a> and login using your account information. </p>
        <p>Thank You</p>
        <hr>
        <div align="center">
        F I Y E O
        <br>
        E-mail : customerservice@fiyeo.com
        <br>
        Phone : (+62) 81250381345
        </div>
        </body>
        </html>
        '; 
            
//            
//            "Hello " .$tangkapNama. ", \r\n \r\n Thank you for registering your account. Below is your details: \r\n \r\n Full Name: " .$tangkapNama. "\r\n E-mail: " .$tangkapEmail. "\r\n Password:" .$tangkapPassword. "\r\n \r\n Please verify your account by clicking <a href='verifyacc.php'>here</a> and login using your account information. \r\n \r\n Thank You";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            
        mail($tangkapEmail, "Registration Successful", $msg, implode("\r\n", $headers));
//        header('Location: login-fiyeo.php');   
        }
  

?>

