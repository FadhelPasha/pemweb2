<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3>Belanja Online</h3>
    <hr>
<form method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk" type="radio" value="TV"> 
        <label for="TV"> TV </label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk" type="radio" value="Kulkas"> 
        <label for="Kulkas"> Kulkas </label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk" type="radio" value="Mesin_Cuci"> 
        <label for="Mesin_Cuci"> Mesin Cuci </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-"2>
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
<div class="bg-blue-500 text-blue p-4 rounded">
                <h2 class="text-lg font-bold mb-2">Daftar Harga</h2>
                <ul>
                    <li class="mb-2">TV : 4.200.000</li>
                    <li class="mb-2">Kulkas : 3.100.000</li>
                    <li class="mb-2">MESIN CUCI : 3.800.000</li>
                </ul>
                <div class="mt-4 bg-blue-700 p-2 rounded">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                // Daftar Harga
                $list_harga = [
                    'TV' => 4200000,
                    'Kulkas' => 3100000,
                    'Mesin_Cuci' => 3800000,
                ];

                //  Menghitung total
                $total = $list_harga[$produk] * $jumlah;
              }
              ?> 
              <hr>
                <!--  Menampilkan hasil -->
<strong>Hasil Pembelian</strong><br>
Nama Customer : <?=$customer;?><br>
Produk Pilihan : <?=$produk;?><br>
Jumlah Beli : <?=$jumlah;?><br>
Total Belanja : Rp<?=$total;?><br>

</body>
</html>