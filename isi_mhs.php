<?php
    require_once "kelas/Tabel.php";
    $tbl = new Tabel("mhs");

    $koneksi = new mysqli("localhost", "root", "", "akademik"); //Objek Koneksi
    // cek koneksi
    if($koneksi->connect_error){
        die("Koneksi Gagal Karena ".$koneksi->connect_error);
    }

    echo "Koneksi Berhasil<br>";

    $nim = $_POST["NIDN"];
    $nama = $_POST["nama"];
    $kota = $_POST["kota"];
    $password = $_POST["password"];
    $gender = $_POST["kelamin"];
    $keterangan = $_POST["keterangan"];
    $koneksi->query("INSERT INTO mhs VALUES('$nim', '$nama', '$kota', '$password', '$gender', '$keterangan')");
    $tbl->showTable();

    echo "<a href=\"FormMahasiswa.php\">Isi Data Lagi</a><br>";
?>
