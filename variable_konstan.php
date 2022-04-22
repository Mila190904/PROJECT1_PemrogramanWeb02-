<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">

<h2 style = "text-align: center">Praktikum 1.3</h2><hr>
<?php
// definisikan konstanta
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan jari jari ' .$jari. ' : ' .$luas;
echo '<br/>Keliling Lingkarannya : ' .$kll;
?>
<hr/>
<?php
echo 'Nama Database : ' .DBNAME;
echo '<br/>Lokasi Databasenya ada di ' .DBSERVER;
?>

</div>

<?php
include_once 'footer.php';
?>