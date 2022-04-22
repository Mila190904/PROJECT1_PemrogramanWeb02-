<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<?php 
require_once 'class_pasien.php';
require_once 'class_bmi.php';
require_once 'class_bmipasien.php';

$pasien1 = new Pasien();
$pasien1->kode = $_POST['kode'];
$pasien1->nama = $_POST['nama'];
$pasien1->gender = $_POST['gender'];
$pasien1->tanggal = $_POST['tanggal'];

$bmi1 = new BMI($_POST['berat'], $_POST['tinggi']);
$bmipasien1 = new BmiPasien($bmi1, $pasien1);
$ar_bmi = [$bmipasien1];
?>

<form method="POST">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-6">
      <span id="tanggalHelpBlock" class="form-text text-muted">yy-mm-dd</span>
      <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Periksa" type="text" class="form-control" aria-describedby="tanggalHelpBlock"> 
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-6">
      <input id="kode" name="kode" placeholder="Masukkan Kode Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-6">
      <select id="gender" name="gender" class="custom-select">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat (Kg)</label> 
    <div class="col-6">
      <input id="berat" name="berat" placeholder="Masukkan Berat Badan Anda" type="text" class="form-control" aria-describedby="beratHelpBlock"> 
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi (Cm)</label> 
    <div class="col-6">
    <input id="tinggi" name="tinggi" placeholder="Masukkan Tinggi Anda" type="text" class="form-control" aria-describedby="beratHelpBlock"> 
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-6">
        <button type="hitung" name="proses" class="btn btn-primary btn-sm">Hitung</button>
    </div>
  </div>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2022-01-10</td>
            <td>P001</td>
            <td>Ahmad</td>
            <td>L</td>
            <td>69.8</td>
            <td>169</td>
            <td>24.7</td>
            <td>Kelebihan Berat Badan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022-01-10</td>
            <td>P002</td>
            <td>Rina</td>
            <td>P</td>
            <td>55.3</td>
            <td>165</td>
            <td>20.3</td>
            <td>Normal(Ideal)</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2022-01-11</td>
            <td>P003</td>
            <td>Lutfi</td>
            <td>L</td>
            <td>45.2</td>
            <td>171</td>
            <td>15.4</td>
            <td>Kekurangan Berat Badan</td>
        </tr>
        <?php $nomor = 4; 
              foreach($ar_bmi as $obj){ 
        ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $obj->pasien->tanggal; ?></td>
                <td><?= $obj->pasien->kode; ?></td>
                <td><?= $obj->pasien->nama; ?></td>
                <td><?= $obj->pasien->gender; ?></td>
                <td><?= $obj->bmi->berat; ?></td>
                <td><?= $obj->bmi->tinggi; ?></td>
                <td><?= $obj->bmi->nilaibmi(); ?></td>
                <td><?= $obj->bmi->statusbmi(); ?></td>
            </tr>
        <?php $nomor++;} ?>
    </tbody>
</table>