 <?php
include 'config.php';
        
        $tangkapNama        = $_POST['name'];
        $tangkapNohp        = $_POST['phone'];
        $tangkapEmail        = $_POST['email'];
        $tangkapPassword     = $_POST['password'];
        $tangkapRole       = 'KLIEN';
        $tangkapStatus     = 'ACTIVE';
        
        $tangkapPassword = ($tangkapPassword);
        
        
        $query = mysqli_query($koneksi , "insert into user values ('','$tangkapNama', '$tangkapNohp', '$tangkapEmail',
        '$tangkapPassword', '', '$tangkapRole', '$tangkapStatus')");
        
        if (!$query) {
            echo mysqli_error($koneksi);
            http_response_code(400);
        } 
        else {    
        echo "OK";
        
//        header('Location: login-fiyeo.php');   
        }
  

?>

