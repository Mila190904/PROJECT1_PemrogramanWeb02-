<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<h2 style = "text-align: center">Praktikum 4.2</h2><hr>
<?php
// Memanggil class_persegipanjang.php
require_once 'class_persegipanjang.php';

$persegi = new PersegiPanjang();
echo "Menghitung Luas dan Keliling Persegi Panjang";
echo "<br/>";

// Menghitung Luas Persegi Panjang
echo "<br/> Luas Persegi Panjang adalah = " .$persegi -> getluasper();
echo "<br/> Keliling Persegi Panjang adalah = " .$persegi -> getkelilingper();

?>
</div>

<?php
include_once 'footer.php';
?>