<?php
 
//Including Database configuration file.
 
include 'config.php';
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $name = $_POST['search'];
 
//Search query.
 
   $query = "SELECT id_eo, nama_eo FROM eo WHERE nama_eo like '%$name%'";
 
//Query execution
 
   $exec = mysqli_query($koneksi, $query);
 
//Creating unordered list to display result.
 

   //Fetching result from database.
 
   while ($result = mysqli_fetch_array($exec)) {
 
       ?>
 <ul>
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
   <li>
 
   
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
    <a href="view-profile-eo.php?id_eo=<?php echo $result['id_eo']; ?>">
       <?php echo $result['nama_eo']; ?></a>
   </li>
 </ul> 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 