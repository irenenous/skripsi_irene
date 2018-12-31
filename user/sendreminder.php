<?php
include 'config.php';
     
    $query1="SELECT tgl_reminder, wkt_reminder, ket_reminder, app_reminder.status AS appstat, user.nama_user, user.email_user, eo.nama_eo FROM app_reminder INNER JOIN user ON app_reminder.id_user = user.id_user INNER JOIN eo ON app_reminder.id_eo = eo.id_eo where appstat = 'ONGOING' AND STR_TO_DATE(tgl_reminder, '%m/%d/%Y') = CURRENT_DATE();";
	$simpan1= mysqli_query($koneksi,$query1);
    while ($select = mysqli_fetch_assoc($simpan1)) {
        $tgl			= $select['tgl_reminder'];
        $wkt			= $select['wkt_reminder'];
        $klien 			= $select['nama_user'];
        $eo             = $select['nama_eo'];
        $note	        = $select['ket_reminder'];
        $emailklien     = $select['email_user'];
        
    $msg = '
        <html>
        <body>
        <p>Hello '.$klien.', </p>
        <p>Thank You</p>
        </body>
        </html>
        ';    
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            
    mail($emailklien, "You have an appointment reminder!", $msg, implode("\r\n", $headers));
        
    }
        


?>