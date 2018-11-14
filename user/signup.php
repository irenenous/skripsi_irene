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
        
//        header('Location: login-fiyeo.php');   
        }
  

?>

