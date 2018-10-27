<?php
//Include the database configuration file
include 'config.php';

if(!empty($_POST["id_provinsi"])){
    //Fetch all state data
    $query = mysqli_query($koneksi, "SELECT * FROM kota WHERE id_provinsi = ".$_POST['id_provinsi']." ORDER BY nama_kota ASC");
    
   $data = array();
   while ($row = mysqli_fetch_array($query)) {
       $data[] = $row;
   }
   echo json_encode($data);   

}
?>