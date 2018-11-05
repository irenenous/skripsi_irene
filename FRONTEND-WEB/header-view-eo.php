<?php 
include 'config.php';
$_SESSION['id'] = $iduser;

    $query1 = "SELECT * FROM eo where id_eo = '$iduser' AND status = 'VERIFIED'";
        $tampil1 = mysqli_query($koneksi, $query1);
        $select = mysqli_fetch_array($tampil1); 
        $emaileo = $select['email_eo'];
        $namaeo = $select['nama_eo'];
        $fotoeo = $select['foto_eo'];
        $desceo = $select['ket_eo'];

?>	

<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="../temp-fiyeo/img/irene/fiyeo2.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-has-children"><a href="">
                              <?php echo "Welcome, .$namaeo." ?>
                            </a>
				            <ul>
								<li><a href="../eo/dashboard-eo.php?id_eo=<?php echo $iduser ?>">My Dashboard</a></li>
								<li><a href="logout.php">Log Out</a></li>
				            </ul>
				          </li>	
                         
				        </ul>
				      </nav><!-- #nav-menu-container -->		   
			    	</div>
			    </div>
			  </header><!-- #header -->