<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
require_once 'koneksi.php';
?>
<center><h1>CRUD SEDERHANA BUKU TAMU</h1></center>
<center>
<a class="button" href="?page=list">LIHAT DATA</a>
<a class="button" href="?page=add">TAMBAH DATA</a>
</center>
<hr>
<?php 
$page = (isset($_GET['page'])) ? $_GET['page'] : 'add' ;
switch ($page) {
case 'add':
require_once 'add.php';
break;
case 'list':
require_once 'list.php';
break;
case 'edit':
require_once 'edit.php';
break;
case 'hapus':
require_once 'delete.php';
break;
case 'detail':
require_once 'detail.php';
break;
default:
require_once 'add.php';
break;
}
?>
</body>
</html>
