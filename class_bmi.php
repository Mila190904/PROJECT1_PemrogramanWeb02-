<?php
class Bmi{
    public $berat;
    public $tinggi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function nilaibmi(){
        return $this->berat / (($this->tinggi/100)**2);
    }
    public function statusbmi(){
        if($this->nilaibmi() < 18.5){
            echo 'Kekurangan Berat Badan';
        }else if($this->nilaibmi() >= 18.5 && $this->nilaiBMI() <= 24.9){
            echo 'Normal(Ideal)';
        }else if($this->nilaibmi() >= 25.0 && $this->nilaiBMI() <= 29.9){
            echo 'Kelebihan berat badan';
        }else if($this->nilaibmi() > 30.0){
            echo 'Kegemukan(Obesitas)';
        }else{
            echo 'Tidak termasuk kategori';
        }
    }
}
?>