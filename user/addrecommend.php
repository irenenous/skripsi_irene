<?php
include 'config.php';
include '../FRONTEND-WEB/saw.php';
session_start();
if (isset ($_SESSION['id'])!="") {
    $iduser = $_SESSION['id'];
}
?>	

<?php
 function cmp($a, $b) { 
     return $a['saw_rank'] > $b['saw_rank'] ? -1 : ($a['saw_rank'] == $b['saw_rank'] ? 0 : 1); 
} 
	if (isset($_POST['tambah'])) {
    	
        $tangkapKategori   = $_POST['kategori'];
        $tangkapBudget     = $_POST['budget'];
        $tangkapReputasi   = $_POST['reputasi'];
        $tangkapFasilitas  = $_POST['fasilitas'];
        $tangkapKonsep     = $_POST['konsep'];
        
        // tambahin variabel
        if ($tangkapBudget + $tangkapReputasi + $tangkapFasilitas + $tangkapKonsep = 1) {
		$query = mysqli_query($koneksi , "SELECT eo.id_eo, eo.nama_eo, eo.foto_eo, provinsi.nama_provinsi, kota.nama_kota, ib.nilai AS budget, ir.nilai AS reputasi, ifa.nilai AS fasilitas, ik.nilai as konsep FROM kriteria_eo INNER JOIN eo ON kriteria_eo.id_eo = eo.id_eo INNER JOIN kriteria_budget ON kriteria_eo.id_kriteria_budget = kriteria_budget.id_kriteria_budget INNER JOIN kriteria_reputasi ON kriteria_eo.id_kriteria_reputasi = kriteria_reputasi.id_kriteria_reputasi INNER JOIN kriteria_fasilitas ON kriteria_eo.id_kriteria_fasilitas = kriteria_fasilitas.id_kriteria_fasilitas INNER JOIN kriteria_konsep ON kriteria_eo.id_kriteria_konsep = kriteria_konsep.id_kriteria_konsep INNER JOIN indikator_penilaian AS ib ON ib.id_indikator_penilaian = kriteria_budget.id_indikator_penilaian INNER JOIN indikator_penilaian AS ifa ON ifa.id_indikator_penilaian = kriteria_fasilitas.id_indikator_penilaian INNER JOIN indikator_penilaian AS ik ON ik.id_indikator_penilaian = kriteria_konsep.id_indikator_penilaian INNER JOIN indikator_penilaian AS ir ON ir.id_indikator_penilaian = kriteria_reputasi.id_indikator_penilaian INNER JOIN kategori_eo ON eo.id_eo = kategori_eo.id_eo INNER JOIN kota ON eo.id_kota = kota.id_kota INNER JOIN provinsi ON kota.id_provinsi = provinsi.id_provinsi WHERE kategori_eo.id_kategori = '$tangkapKategori'");
        $map_index_to_id = array();
        $criteria_matrix = array();
        while ($kriteria = mysqli_fetch_array($query)) {
            $map_index_to_id[] = array(
                'id_eo' => $kriteria['id_eo'],
                'foto_eo' => $kriteria['foto_eo'],
                'nama_eo' => $kriteria['nama_eo'],
                'nama_provinsi' => $kriteria['nama_provinsi'],
                'nama_kota' => $kriteria['nama_kota']
                // tambahin variabel yg ingin ditampilin
            );
            array_push($criteria_matrix, array(
                $kriteria['budget'],
                $kriteria['reputasi'],
                $kriteria['fasilitas'],
                $kriteria['konsep']
            ));
        }
        $user_matrix = array(
            array(
                $tangkapBudget,
                $tangkapReputasi,
                $tangkapFasilitas,
                $tangkapKonsep
            )
        ) ;
        $saw_rank = calculate_saw($user_matrix, $criteria_matrix, array(0))[0];
        foreach ($saw_rank as $key => $value) {
            $map_index_to_id[$key]['saw_rank'] = $value;    
        }
            
       usort($map_index_to_id, "cmp");
        $_SESSION['data'] = $map_index_to_id;
       header('Location: ../FRONTEND-WEB/showrecommend.php');

	}
        else {
           echo 'error';
           http_response_code(400);  
        }
    }

?>