<?php 
define('SERVERNAME', 'localhost');
define('HOSTNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'buku_tamu');
$MySQli = new mysqli(SERVERNAME,HOSTNAME,PASSWORD,DATABASE);
if ($MySQli->connect_errno) {
echo "Gagal koneksi database MySQL karena : ";
echo $MySQli->connect_error;
}
?>
