<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<form>
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Matkul</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkulHelpBlock">
        <option value="Pemweb">Pemrograman Web</option>
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BAHASA SUNDA">Bahasa Sunda</option>
        <option value="UI-UX">UI-UX</option>
        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
      </select> 
      <span id="matkulHelpBlock" class="form-text text-muted">Pilih Matkul</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Masukan nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  
</form>
<hr>
hasil input data nilai Mahasiswa:
<?php
    $_nama_lengkap = $_POST['nama_lengkap'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];
    $_rata_rata = ($_uts * 0.3)+($_uas * 0.3)+($_tugas * 0.4);
    $_keterangan = Keterangan ($_rata_rata);
    $_grade = grade($_rata_rata);
?>

Nama Mahasiswa : <?=$_nama_lengkap;?><br>
Mata Kuliah : <?=$_matkul;?><br>
Nilai UTS : <?=$_uts;?><br>
Nilai UAS : <?=$_uas;?><br>
Nilai Praktikum/Tugas : <?=$_tugas;?><br>
Rata-Rata Nilai: <?=$_rata_rata;?><br>
Keterangan: <?=$_keterangan;?><br>
Grade: <?=$_grade;?><br>
</hr>
<?php
function Keterangan ($_rata_rata){
  if ($_rata_rata >= 80) {
    return "Lulus";
}
else {
  return "Tidak Lulus";
}
}
?>

<?php
function grade ($_rata_rata){
  if ($_rata_rata >= 85) {
    return "A (sangat baik)";
}
else if ($_rata_rata <= 75 && $_rata_rata <= 85) {
  return "B (baik)";
}
else if ($_rata_rata <= 50 && $_rata_rata <= 60) {
  return "C (Cukup)";
}
else if ($_rata_rata <= 20 && $_rata_rata <= 39) {
  return "D (Kurang)";
}
else if ($_rata_rata <= 15 && $_rata_rata <= 20) {
  return "E (Sangat Kurang)";
}
else{
  return "Tidak Lulus";
}
}
?>
</body>
</html>