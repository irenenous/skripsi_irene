<html>
    <body>
<?php
	include("config.php");
                            
//    $order_category = 'id_kategori';
//     if (isset($_GET['order_criteria'])) {
//        if ($_GET['order_criteria'] == 'name-asc') {
//            $order_criteria = 'nama_eo ASC';
//        } else if ($_GET['order_criteria'] == 'name-desc') {
//            $order_criteria = 'nama_eo DESC';
//        }
//        else if ($_GET['order_criteria'] == 'price-asc') {
//            $order_criteria = 'min(harga_paket) ASC';
//        }
//    }
//                            
   $order_criteria = 'eoid';
    if (isset($_GET['order_criteria']) && $_GET['order_criteria'] != '' && $_GET['order_criteria'] != null) {
        if ($_GET['order_criteria'] == 'name-asc') {
            $order_criteria = 'nama_eo ASC';
        } else if ($_GET['order_criteria'] == 'name-desc') {
            $order_criteria = 'nama_eo DESC';
        }
        else if ($_GET['order_criteria'] == 'price-asc') {
            $order_criteria = 'min_harga_paket ASC';
        }
        else if ($_GET['order_criteria'] == 'price-desc') {
            $order_criteria = 'min_harga_paket DESC';
        }
    }
    $offset = 0;
    if (isset($_GET['page']) && $_GET['page'] != '' && $_GET['page'] != null && is_numeric($_GET['page'])) {
        $offset = (($_GET['page'] -1) * 2);         
    }
    $filter_category = isset($_GET['category'])  && $_GET['category'] != '' && $_GET['category'] != null ? $_GET['category'] : 'NULL';

    $filter_area = isset($_GET['area'])  && $_GET['area'] != '' && $_GET['area'] != null ? $_GET['area'] : 'NULL';
                            
	$query1="SELECT eo.id_eo AS eoid, eo.nama_eo, eo.foto_eo, eo.ket_eo, eo.id_kota, kota.nama_kota, kota.id_provinsi, provinsi.nama_provinsi, kategori_eo.id_kategori, kategori.nama_kategori, MIN(paket.harga_paket) AS min_harga_paket from eo INNER JOIN kota ON eo.id_kota = kota.id_kota INNER JOIN provinsi ON kota.id_provinsi = provinsi.id_provinsi INNER JOIN kategori_eo ON eo.id_eo = kategori_eo.id_eo INNER JOIN kategori ON kategori_eo.id_kategori = kategori.id_kategori INNER JOIN paket ON paket.id_eo = eo.id_eo WHERE status='VERIFIED' AND ($filter_category IS NULL OR kategori_eo.id_kategori = $filter_category) AND ($filter_area IS NULL OR eo.id_kota = $filter_area) GROUP BY eo.id_eo ORDER BY $order_criteria LIMIT 2 OFFSET $offset";           
	$simpan1= mysqli_query($koneksi,$query1);
    echo mysqli_error($koneksi);
                           
   while($select = mysqli_fetch_assoc($simpan1)) {
			$id        = $select['eoid'];
            $photo     = $select['foto_eo'];
            $name 	   = $select['nama_eo'];
			$desc 	   = $select['ket_eo'];
			$province  = $select['id_provinsi'];
			$city	   = $select['id_kota'];
            $provname  = $select['nama_provinsi'];
            $cityname  = $select['nama_kota'];
            $idkategori = $select['id_kategori'];
            $kategori = $select['nama_kategori']; 

$query2 = "SELECT min(harga_paket) from paket where id_eo ='$id'";
$simpan2 = mysqli_query($koneksi, $query2); 
$select = mysqli_fetch_array($simpan2);
       $lowprice = $select['min(harga_paket)'];
       
?>
                          
							<div class="single-post d-flex flex-row">
 
                                <table>
                                <tr>
                                <td rowspan="4"><img src="../eo/<?php echo $photo ?>" width='130px' height='130px'></td>
                                <td style="padding-left:20px;"><a href="view-profile-eo.php?id_eo=<?php echo $id ?>"><h4><?php echo $name ?></h4></a></td>
                                <td>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><?php echo $desc ?></td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-map-o"></i>&nbsp; <?php echo $cityname ?>, <?php echo $provname ?></td>
                                </tr>
                                <tr>
                                <td style="padding-left:20px;"><i class="fa fa-money"></i>&nbsp; Start from IDR <?php echo $lowprice ?> </td>
                                </tr>
                                </table>
							</div>
                            
    <?php }
	?>              
        
    </body>
</html>