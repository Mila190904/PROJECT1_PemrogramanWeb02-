<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<h2 style = "text-align: center">Praktikum 1.1</h2><hr>
<?php
// definisikan variable
$nama = "Mila Lestari";
$umur = 17;
$berat = 42.4;

echo "Nama : $nama ";
echo "<br/>Umur : $umur Tahun ";
echo "<br/>Berat : $berat Kg<br/>";

echo "<br/>Hello $nama, Apa kabar<br/>";
echo "<br/>Hai Nama saya $nama, umur saya $umur tahun, dan berat badan saya $berat kg. Salam kenal semuanya ";
echo "<hr>";
?>
</div>

<?php
include_once 'footer.php';
?>