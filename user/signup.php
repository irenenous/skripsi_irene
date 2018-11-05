 <?php
session_start(); 

    if (isset($_POST['signup'])) {
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
            echo '<script> alert("Registration failed. Email already exist"); window.history.back(); </script>';
        } 
        else {    
        $keluar = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $keluar['id_user'];
        $_SESSION['nama'] = $keluar['nama_user'];
        $_SESSION['email'] = $keluar['email_user'];
        
        header('Location: ../FRONTEND-WEB/index-fiyeo.php');   
        }
    }

?>

