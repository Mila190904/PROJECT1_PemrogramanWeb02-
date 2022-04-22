<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">
<h2 style = "text-align: center">Praktikum 5.1</h2><hr>
<?php
//  buka class buah
class buah{
    // buat property
    public $name;
    protected $color;
    private $berat;

    //  buat method
    public function set_color($c){
        return $this -> color = $c;
    }
    public function set_berat($b){
        return $this -> berat = $b;
    }
}

// Buat Object
$mangga = new buah();
echo $mangga -> name = 'Manggga';
echo "<br/>";
echo $mangga -> set_color('Hijau');
echo "<br/>";
echo $mangga -> set_berat ('300 Kg');
?>
</div>

<?php
include_once 'footer.php';
?>