<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<h2 style = "text-align: center">Praktikum 5.2</h2><hr>
<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna)
    {
        $this -> name = $name;
        $this -> warna = $warna;
    }
    public function intro(){
        echo "<br/>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}

class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Aku adala sebuah Strawberry atau Mangga?";
    }
}

$buah = new Strawberry("Strawberry", "Merah");
$buah -> message();
$buah -> intro();
?>
</div>

<?php
include_once 'footer.php';
?>