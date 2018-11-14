<?php 
include 'config.php';
if (isset ($_SESSION['id'])!="") {
    $id = $_SESSION['id'];

$query = "SELECT * FROM user where id_user = '$id' AND status = 'ACTIVE'";
$tampil = mysqli_query($koneksi, $query);
$select = mysqli_fetch_array($tampil);
$iduser = $select['id_user'];
$namauser = $select['nama_user'];
$emailuser = $select['email_user'];
$fotouser = $select['foto_user'];  	
}
?>
<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index-fiyeo.php"><img src="../temp-fiyeo/img/irene/fiyeo2.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="../FRONTEND-WEB/index-fiyeo.php">Home</a></li>
				          <li class="menu-active"><a href="category-fiyeo.php">Category</a>
                            </li>
				          <li class="menu-has-children"><a href="">
                              <?php echo "Welcome, $namauser"?>
                            </a>
				            <ul>
								<li><a href="../user/dashboard-klien.php?id_user=<?php echo $id ?>">My Dashboard</a></li>
								<li><a href="logout.php">Log Out</a></li>
				            </ul>
				          </li>	
                         
				        </ul>
				      </nav><!-- #nav-menu-container -->		   
			    	</div>
			    </div>
			  </header><!-- #header -->