<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nilai Mahasiswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
        <h4 style="text-align:center">Form Nilai Ujian</h4>
        <hr>

        <div class="w-50 p-3, mx-auto p-2">
            <form method="post" action="nilai_mahasiswa.php">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <input id="nim" name="nim" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mk" class="col-4 col-form-label">Pilih MK</label>
                    <div class="col-8">
                        <select id="mk" name="mk" class="custom-select">
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="Statistika & Probabilitas">Statistika & Probabilitas</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
                            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                            <option value="User Interface/User Experience">User Interface/User Experience</option>
                            <option value="PKN">PKN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai</label>
                    <div class="col-8">
                        <input id="nilai" name="nilai" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

</body>
<html>


<?php
  if (isset($_POST["submit"])) {
    require_once "class_mhs.php";

    // Set nilai properti pada objek dari nilai yang diisi pada form
    $nim = $_POST["nim"];
    $mk = $_POST["mk"];
    $nilai = $_POST["nilai"];

    // Buat objek baru dari class NilaiMahasiswa
    $nilaiMahasiswa1 = new NilaiMahasiswa($nim, $mk, $nilai);

    // Menampilkan informasi nilai mata kuliah
    echo "<hr>";
    echo "<p>NIM: " . $nilaiMahasiswa1->nim . "</p>";
    echo "<p>Nama Mata Kuliah: " . $nilaiMahasiswa1->mk . "</p>";
    echo "<p>Nilai: " . $nilaiMahasiswa1->nilai . "</p>";
    echo "<p>Hasil Ujian: " . $nilaiMahasiswa1->grade() . "</p>";
    echo "<p>Grade: " . $nilaiMahasiswa1->hasil() . "</p>";
  }
  ?>