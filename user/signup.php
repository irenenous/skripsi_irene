 <?php
    
    if (isset($_POST['signup'])) {
        include 'config.php';
        
        
        $tangkapNama        = $_POST['name'];
        $tangkapNohp        = $_POST['phone'];
        $tangkapEmail        = $_POST['email'];
        $tangkapPassword     = $_POST['password'];
        $tangkapStatus     = 'ACTIVE';
        
        $tangkapPassword = ($tangkapPassword);
        
        
        $query = mysqli_query($koneksi , "insert into user values ('','$tangkapNama', '$tangkapNohp', '$tangkapEmail',
        '$tangkapPassword', '', '$tangkapStatus')");
    }

?>