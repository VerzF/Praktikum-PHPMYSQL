<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Form Pendaftaran</h2>
  <form action="prosesForm.php" method="POST">
    
  <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            39. Nama Ibu Kandung
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namaibu" placeholder="Masukkan Nama Ibu Kandung" name="Nama Ibu">
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            40. Tahun Lahir Ibu
        <div class="col-md">
            <input type="text" class="form-control" id="tahunlahiribu" placeholder="Masukkan Tahun Lahir Ibu" name="Tahun Lahir Ibu">
        </div>
    </div>

    <div class="col-md-4">
        41. Pendidikan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Pendidikan Ibu">
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="1"> Tidak Sekolah</option>
            <option value="2"> Putus SD</option>
            <option value="3"> SD Sederajat</option>
            <option value="4"> SMP Sederajat</option>
            <option value="5"> SMA Sederajat</option>
            <option value="6"> D1</option>
            <option value="7"> D2</option>
            <option value="8"> D3</option>
            <option value="9"> D4/S1</option>
            <option value="10"> S2</option>
            <option value="11"> S3</option>
        </select>
    </div>

    <div class="col-md-4">
        42. Pekerjaan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Pekerjaan Ibu">
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="1"> Tidak Bekerja</option>
            <option value="2"> Nelayan</option>
            <option value="3"> Petani</option>
            <option value="4"> Peternak</option>
            <option value="5"> PNS/TNI/POLRI</option>
            <option value="6"> Karyawan Swasta</option>
            <option value="7"> Pedagang Kecil</option>
            <option value="8"> Pedagang Besar</option>
            <option value="9"> Wiraswasta</option>
            <option value="10"> Wirausaha</option>
            <option value="11"> Buruh</option>
            <option value="12"> Pensiunan</option>
            <option value="13"> Lainnya</option>
        </select>
    </div>

    <div class="col-md-4">
        43. Penghasilan Bulanan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Penghasilan Ibu">
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="1"> Kurang Dari 500.000</option>
            <option value="2"> 500.000 - 999.999</option>
            <option value="3"> 1 Juta - 1.999.999</option>
            <option value="4"> 2 Juta - 4.999.999</option>
            <option value="5"> 5 Juta - 20 Juta</option>
            <option value="6"> Lebih Dari 20 Juta</option>
        </select>
    </div>

    <div class="col-md-4">
        44. Berkebutuhan Khusus Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Berkebutuhan Khusus Ibu">
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="1"> Tidak</option>
            <option value="2"> Netra</option>
            <option value="3"> Rungu</option>
            <option value="4"> Grahita Ringan</option>
            <option value="5"> Grahita Sedang</option>
            <option value="6"> Daksa Ringan</option>
            <option value="7"> Daksa Sedang</option>
            <option value="8"> Laras</option>
            <option value="9"> Wicara</option>
            <option value="10"> Tuna Ganda</option>
            <option value="11"> Hiper Aktif</option>
            <option value="12"> Cerdas Istimewa</option>
            <option value="13"> Bakat Istimewa</option>
            <option value="14"> Kesulitan Belajar</option>
            <option value="15"> Narkoba</option>
            <option value="16"> Indigo</option>
            <option value="17"> Down Sindrome</option>
            <option value="18"> Autis</option>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>