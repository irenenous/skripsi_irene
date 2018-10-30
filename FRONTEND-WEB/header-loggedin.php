<?php 
include 'config.php';
$_SESSION['id'] = $iduser;
$_SESSION['nama']= $namauser;
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
				          <li class="menu-has-children"><a href="category-fiyeo.php">Category</a>
                            <ul>
                                <li><a href="elements.html">Wedding</a></li>
								<li><a href="search.html">Birthday</a></li>
								<li><a href="single.html">Private Party</a></li>
                                <li><a href="elements.html">Music & Entertainment</a></li>
								<li><a href="search.html">MICE</a></li>
								<li><a href="single.html">Brand Activation</a></li>
                                <li><a href="elements.html">Prom & Reunion</a></li>
                              </ul>
                            </li>
				          <li class="menu-has-children"><a href="">
                              <? php echo "Hello '.$namauser.'" ?>
                            </a>
				            <ul>
								<li><a href="view-profile-eo.php?id_user=<?php echo $iduser?>">My Dashboard</a></li>
								<li><a href="logout.php">Log Out</a></li>
				            </ul>
				          </li>	
                         
				        </ul>
				      </nav><!-- #nav-menu-container -->		   
			    	</div>
			    </div>
			  </header><!-- #header -->