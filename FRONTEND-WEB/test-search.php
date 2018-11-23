<?php
include 'config.php';
?>
<!DOCTYPE html>
 
<html>
 
 
 
<head>
 
   <title>Live Search using AJAX</title>
 
   <!-- Including jQuery is required. -->
 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
   <!-- Including our scripting file. -->
 
   <script type="text/javascript" src="test-script.js"></script>
 
   <!-- Including CSS file. -->
 
<style>

a:hover {
 
   cursor: pointer;
 
   background-color: yellow;
 
}    
</style>
 
</head>
 
 
 
<body>
 
<!-- Search box. -->
 
   <input type="text" id="search" placeholder="Search" />
 
   <br>
 
   <br />
 
   <!-- Suggestions will be displayed in below div. -->
 
   <div id="display"></div>
 
 
<?php
 
//Including Database configuration file.
 
include 'config.php';
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $name = $_POST['search'];
 
//Search query.
 
   $query = "SELECT nama_eo FROM eo WHERE nama_eo like '%$name%'";
 
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
 
   <li onclick='fill("<?php echo $result['nama_eo']; ?>")'>
 
   
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $result['nama_eo']; ?>
 
   </li>
 </ul> 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
   
    
    
 

</body>
 
 
 
</html>