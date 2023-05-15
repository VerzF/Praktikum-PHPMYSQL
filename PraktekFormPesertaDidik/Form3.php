<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="border: 5px solid black;">
<h2 style="background-color: lightgrey; border-bottom: 5px solid black; color: black;"><center>Form Peserta Didik</center></h2>
<div class="container">
  <h2>Data Orang Tua</h2>
  <form action="prosesForm.php" method="POST">
    
  <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            34. Nama Ayah Kandung
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namaayah" placeholder="Masukkan Nama Ayah Kandung" name="namaayah" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            35. Tahun Lahir Ayah
        <div class="col-md-12">
            <input type="text" class="form-control" id="tahunlahirayah" placeholder="Masukkan Tahun Lahir Ayah" name="tahunlahirayah" required>
        </div>
    </div>

    <div class="col-md-4">
        36. Pendidikan Ayah
    </div>
    <div class="col-md-8">
        <select class="form-control" id="pendidikanayah" name="pendidikanayah" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak Sekolah"> Tidak Sekolah</option>
            <option value="Putus SD"> Putus SD</option>
            <option value="SD Sederajat"> SD Sederajat</option>
            <option value="SMP Sederajat"> SMP Sederajat</option>
            <option value="SMA Sederajat"> SMA Sederajat</option>
            <option value="D1"> D1</option>
            <option value="D2"> D2</option>
            <option value="D3"> D3</option>
            <option value="D4/S1"> D4/S1</option>
            <option value="S2"> S2</option>
            <option value="S3"> S3</option>
        </select>
    </div>

    <div class="col-md-4">
        37. Pekerjaan Ayah
    </div>
    <div class="col-md-8">
        <select class="form-control" id="pendidikanayah" name="pendidikanayah" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak Bekerja"> Tidak Bekerja</option>
            <option value="Nelayan"> Nelayan</option>
            <option value="Petani"> Petani</option>
            <option value="Peternak"> Peternak</option>
            <option value="PNS/TNI/POLRI"> PNS/TNI/POLRI</option>
            <option value="Karyawan Swasta"> Karyawan Swasta</option>
            <option value="Pedagang Kecil"> Pedagang Kecil</option>
            <option value="Pedagang Besar"> Pedagang Besar</option>
            <option value="Wiraswasta"> Wiraswasta</option>
            <option value="Wirausaha"> Wirausaha</option>
            <option value="Buruh"> Buruh</option>
            <option value="Pensiunan"> Pensiunan</option>
            <option value="Lainnya"> Lainnya</option>
        </select>
    </div>

    <div class="col-md-4">
        38. Penghasilan Bulanan Ayah
    </div>
    <div class="col-md-8">
        <select class="form-control" id="penghasilanayah" name="penghasilanayah" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Kurang Dari 500.000"> Kurang Dari 500.000</option>
            <option value="500.000 - 999.999"> 500.000 - 999.999</option>
            <option value="1 Juta - 1.999.999"> 1 Juta - 1.999.999</option>
            <option value="2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
            <option value="5 Juta - 20 Juta"> 5 Juta - 20 Juta</option>
            <option value="Lebih Dari 20 Juta"> Lebih Dari 20 Juta</option>
        </select>
    </div>

    <div class="row-mb-3">
    <div class="col-md-4">
        39. Berkebutuhan Khusus Ayah
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Berkebutuhan Khusus Ayah" name="Berkebutuhan Khusus Ayah" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak"> Tidak</option>
            <option value="Netra"> Netra</option>
            <option value="Rungu"> Rungu</option>
            <option value="Grahita Ringan"> Grahita Ringan</option>
            <option value="Grahita Sedang"> Grahita Sedang</option>
            <option value="Daksa Ringan"> Daksa Ringan</option>
            <option value="Daksa Sedang"> Daksa Sedang</option>
            <option value="Laras"> Laras</option>
            <option value="Wicara"> Wicara</option>
            <option value="Tuna Ganda"> Tuna Ganda</option>
            <option value="Hiper Aktif"> Hiper Aktif</option>
            <option value="Cerdas Istimewa"> Cerdas Istimewa</option>
            <option value="Bakat Istimewa"> Bakat Istimewa</option>
            <option value="Kesulitan Belajar"> Kesulitan Belajar</option>
            <option value="Narkoba"> Narkoba</option>
            <option value="Indigo"> Indigo</option>
            <option value="Down Sindrome"> Down Sindrome</option>
            <option value="Autis"> Autis</option>
    </select>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            40. Nama Ibu Kandung
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namaibu" placeholder="Masukkan Nama Ibu Kandung" name="namaibu" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            41. Tahun Lahir Ibu
        <div class="col-md">
            <input type="text" class="form-control" id="tahunlahiribu" placeholder="Masukkan Tahun Lahir Ibu" name="Tahun Lahir Ibu" required>
        </div>
    </div>

    <div class="col-md-4">
        42. Pendidikan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Pendidikan Ibu" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak Sekolah"> Tidak Sekolah</option>
            <option value="Putus SD"> Putus SD</option>
            <option value="SD Sederajat"> SD Sederajat</option>
            <option value="SMP Sederajat"> SMP Sederajat</option>
            <option value="SMA Sederajat"> SMA Sederajat</option>
            <option value="D1"> D1</option>
            <option value="D2"> D2</option>
            <option value="D3"> D3</option>
            <option value="D4/S1"> D4/S1</option>
            <option value="S2"> S2</option>
            <option value="S3"> S3</option>
        </select>
    </div>

    <div class="col-md-4">
        43. Pekerjaan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Pekerjaan Ibu" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak Bekerja"> Tidak Bekerja</option>
            <option value="Nelayan"> Nelayan</option>
            <option value="Petani"> Petani</option>
            <option value="Peternak"> Peternak</option>
            <option value="PNS/TNI/POLRI"> PNS/TNI/POLRI</option>
            <option value="Karyawan Swasta"> Karyawan Swasta</option>
            <option value="Pedagang Kecil"> Pedagang Kecil</option>
            <option value="Pedagang Besar"> Pedagang Besar</option>
            <option value="Wiraswasta"> Wiraswasta</option>
            <option value="Wirausaha"> Wirausaha</option>
            <option value="Buruh"> Buruh</option>
            <option value="Pensiunan"> Pensiunan</option>
            <option value="Lainnya"> Lainnya</option>
        </select>
    </div>

    <div class="col-md-4">
        44. Penghasilan Bulanan Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Penghasilan Ibu" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Kurang Dari 500.000"> Kurang Dari 500.000</option>
            <option value="500.000 - 999.999"> 500.000 - 999.999</option>
            <option value="1 Juta - 1.999.999"> 1 Juta - 1.999.999</option>
            <option value="2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
            <option value="5 Juta - 20 Juta"> 5 Juta - 20 Juta</option>
            <option value="Lebih Dari 20 Juta"> Lebih Dari 20 Juta</option>
        </select>
    </div>

    <div class="col-md-4">
        45. Berkebutuhan Khusus Ibu
    </div>
    <div class="col-md-8">
        <select class="form-control" name="Berkebutuhan Khusus Ibu" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Tidak"> Tidak</option>
            <option value="Netra"> Netra</option>
            <option value="Rungu"> Rungu</option>
            <option value="Grahita Ringan"> Grahita Ringan</option>
            <option value="Grahita Sedang"> Grahita Sedang</option>
            <option value="Daksa Ringan"> Daksa Ringan</option>
            <option value="Daksa Sedang"> Daksa Sedang</option>
            <option value="Laras"> Laras</option>
            <option value="Wicara"> Wicara</option>
            <option value="Tuna Ganda"> Tuna Ganda</option>
            <option value="Hiper Aktif"> Hiper Aktif</option>
            <option value="Cerdas Istimewa"> Cerdas Istimewa</option>
            <option value="Bakat Istimewa"> Bakat Istimewa</option>
            <option value="Kesulitan Belajar"> Kesulitan Belajar</option>
            <option value="Narkoba"> Narkoba</option>
            <option value="Indigo"> Indigo</option>
            <option value="Down Sindrome"> Down Sindrome</option>
            <option value="Autis"> Autis</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary" href="Form2.php">Back</button>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        <br>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>