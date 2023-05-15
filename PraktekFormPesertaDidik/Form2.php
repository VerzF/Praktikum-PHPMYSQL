<!DOCTYPE html>
<html>
<head>
  <title>Form Peserta Didik</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="border: 5px solid black;">

<h2 style="background-color: lightgrey; border-bottom: 5px solid black; color: black;"><center>Form Peserta Didik</center></h2>
<div class="container">
  <h2>Data Pribadi</h2>
  <form action="Form3.php" method="POST">
  <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
        11. Nama Lengkap
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap" name="Nama Lengkap" required>
        </div>
    </div>

    <div class="col-md-4">
        12. Jenis Kelamin
    </div>
    <div class="col-md-8">
      <input type="radio" id="Jenis Kelamin" name="Jenis Kelamin" value="Laki-Laki" required>Laki-Laki
      <input type="radio" id="Jenis Kelamin" name="Jenis Kelamin" value="Perempuan" required>Perempuan
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            13. NISN
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="NISN" placeholder="Masukkan NISN" name="NISN" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            14. NISN
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="NIK" placeholder="Masukkan NIK" name="NIK" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            15. Tanggal Lahir
        <div class="col-md-8">
            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            16. Tempat Lahir
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="tmptlahir" placeholder="Masukkan Tempat Lahir" name="tmptlahir" required>
        </div>
    </div>

    <div class="col-md-4">
        17. Agama
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Agama" name="Agama" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Islam"> Islam</option>
            <option value="Kristen/Protestan"> Kristen/Protestan</option>
            <option value="Katholik"> Katholik</option>
            <option value="Hindu"> Hindu</option>
            <option value="Buddha"> Buddha</option>
            <option value="Khong Hu Chu"> Khong Hu Chu</option>
            <option value="Lainnya"> Lainnya</option>
    </select>
    </div>

    <div class="col-md-4">
        18. Berkebutuhan Khusus
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Berkebutuhan Khusus" name="Berkebutuhan Khusus" required>
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
            19. Alamat
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat" name="Alamat" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            20. RT
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="RT" placeholder="Masukkan RT" name="RT" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            21. RW
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="RW" placeholder="Masukkan RW" name="RW" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            22. Nama Dusun
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namadusun" placeholder="Masukkan Nama Dusun" name="Nama Dusun" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            23. Nama Kelurahan/Desa
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namakelurahan" placeholder="Masukkan Nama Kelurahan/Desa" name="Nama Kelurahan" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            24. Kecamatan
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="namaKelurahan/Desa" placeholder="Masukkan Nama Kelurahan/Desa" name="namaKelurahan/Desa" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            24. Kecamatan
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="Kecamatan" placeholder="Masukkan Nama Kecamatan" name="Kecamatan" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            25. Kode Pos
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="Kodepos" placeholder="Masukkan Kode Pos" name="Kodepos" required>
        </div>
    </div>

    <div class="col-md-4">
        26. Tempat Tinggal
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Tempat Tinggal" name="Tempat Tinggal" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Bersama Orang Tua"> Bersama Orang Tua</option>
            <option value="Wali"> Wali</option>
            <option value="Kos"> Kos</option>
            <option value="Asrama"> Asrama</option>
            <option value="Panti Asuhan"> Panti Asuhan</option>
            <option value="Lainnya"> Lainnya</option>
        </select>
    </div>

    <div class="col-md-4">
        27. Moda Transportasi
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Moda Transportasi" name="Moda Transportasi" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Jalan Kaki"> Jalan Kaki</option>
            <option value="Kendaraan Pribadi"> Kendaraan Pribadi</option>
            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete</option>
            <option value="Jemputan Sekolah"> Jemputan Sekolah</option>
            <option value="Kereta Api"> Kereta Api</option>
            <option value="Ojek"> Ojek</option>
            <option value="Andong/Bendi/Sado/Dokar/Delman/Becak"> Andong/Bendi/Sado/Dokar/Delman/Becak</option>
            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek</option>
            <option value="Lainnya"> Lainnya</option>
        </select>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            28. Nomor HP
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nomorhp" placeholder="Masukkan Nomor HP" name="nomorhp" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            29. Nomor Telepon
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nomortelepon" placeholder="Masukkan Nomor Telepon" name="nomortelepon" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            30. Email Pribadi
        </div>
        <div class="col-md-8">
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
        </div>
    </div>

    <div class="col-md-4">
        31. Penerima KPS/PKH/KIP
    </div>
    <div class="col-md-8">
        <select class="form-control" id="Penerima KPS/PKH/KIP" name="Penerima KPS/PKH/KIP" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Ya"> Ya</option>
            <option value="Tidak"> Tidak</option>
        </select>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            32. No. KPS/PKH/KIP
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="Nomor KPS/PKH/KIP" placeholder="Masukkan Nomor KPS/PKH/KIP" name="Nomor KPS/PKH/KIP" >
            <label style="font-style:italic; font-size:small">* Apabila Menerima </label>
        </div>
    </div>

    <div class="col-md-4">
        33. Kewarganegaraan
    </div>
    <div class="col-md-4">
        <select class="form-control" id="Kewarganegaraan" name="Kewarganegaraan" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Indonesia(WNI)"> Indonesia(WNI)</option>
            <option value="Asing(WNA)"> Asing(WNA)</option>
        </select>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" id="namanegara" placeholder="Masukkan Nama Negara" name="namanegara">

    <br>    
    <button type="submit" class="btn btn-primary" href="Form1.php">Back</button>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" href="Form3.php">Next</button>
    <br>
    <br>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>