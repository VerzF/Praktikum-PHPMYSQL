<!DOCTYPE html>
<html>
<head>
  <title>Form Peserta Didik</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="border: 5px solid black;">

<h2 style="background-color: lightgrey; border-bottom: 5px solid black; color: black;"><center>Form Peserta Didik</center></h2>
<div class="container">
  <h2>Registrasi Peserta Didik</h2>
  <form action="prosesForm1.php" method="POST">

    <div class="col-md-4">
        1. Jenis Pendaftaran
    </div>
    <div class="col-md-8">
      <input type="radio" id="JenisPendaftaran" name="JenisPendaftaran" value="Siswa Baru" required>Siswa Baru
      <input type="radio" id="JenisPendaftaran" name="JenisPendaftaran" value="Pindahan" required>Pindahan
    </div>


    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            2. Tanggal Masuk Sekolah
        <div class="col-md-8">
            <input type="date" class="form-control" id="tglmsksekolah" name="tglmsksekolah" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            3. NIS
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="NIS" placeholder="Masukkan Nomor Induk Siswa" name="NIS" required>
        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            4. Nomor Peserta Ujian
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="NPU" placeholder="Masukkan Nomor Peserta Ujian" name="NPU" required>
            <label style="font-style:italic; font-size:small">* Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </label>

        </div>
    </div>

    <div class="col-md-4">
        5. Apakah Pernah Paud
    </div>
    <div class="col-md-8">
      <input type="radio" id="paud" name="paud" value="Ya" required>Ya
      <input type="radio" id="paud" name="paud" value="Tidak" required>Tidak
    </div>

    <div class="col-md-4">
        6. Apakah Pernah TK
    </div>
    <div class="col-md-8">
      <input type="radio" id="TK" name="TK" value="Ya" required>Ya
      <input type="radio" id="TK" name="TK" value="Tidak" required>Tidak
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            7. No. Seri SKHUN Sebelumnya
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nmrSKHUN" placeholder="Masukkan Nomor Seri SKHUN Sebelumnya" name="nmrSKHUN" required>
            <label style="font-style:italic; font-size:small">* Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi Bagi PD jenjang SMP </label>

        </div>
    </div>

    <div class="row-mb-3">
        <div class="col-md-4 align-self-center">
            8. No. Seri Ijazah Sebelumnya
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nmrIJAZAH" placeholder="Masukkan Nomor Seri SKHUN Sebelumnya" name="nmrIJAZAH" required>
            <label style="font-style:italic; font-size:small">* Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;">Ijazah SD</span>, diisi Bagi PD jenjang SMP </label>
        </div>
    </div>

    <div class="col-md-4">
        9. Hobi
</div>
    <div class="col-md-8">
        <select class="form-control" id="hobi" name="hobi" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="Olah Raga"> Olah Raga</option>
            <option value="Kesenian"> Kesenian</option>
            <option value="Membaca"> Membaca</option>
            <option value="Menulis"> Menulis</option>
            <option value="Traveling"> Traveling</option>
            <option value="Lainnya"> Lainnya</option>
    </select>
    </div>

    <div class="col-md-4">
        10. Cita-Cita
</div>
    <div class="col-md-8">
        <select class="form-control" id="cita-cita" name="cita-cita" required>
            <option selected disabled value="">Pilih Salah Satu</option>
            <option value="PNS"> PNS</option>
            <option value="TNI/POLRI"> TNI/POLRI</option>
            <option value="Guru/Dosen"> Guru/Dosen</option>
            <option value="Dokter"> Dokter</option>
            <option value="Politikus"> Politikus</option>
            <option value="Wiraswasta"> Wiraswasta</option>
            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis</option>
            <option value="8"> Lainnya</option>
    </select>
    </div>
    <br>    
    <button type="submit" class="btn btn-primary">Next</button>
    <br>
    <br>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>