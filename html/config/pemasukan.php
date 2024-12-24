<?php 
// koneksi db
$conn = mysqli_connect("localhost", "root", "", "afrida");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// menambah barang baru
if (isset($_POST['addnewbarang'])) {
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $pemasukan = mysqli_real_escape_string($conn, $_POST['pemasukan']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $addtotable = mysqli_query($conn, "INSERT INTO pemasukan (kategori, pemasukan, deskripsi) VALUES ('$kategori', '$pemasukan', '$deskripsi')");
    if ($addtotable) {
        header('location: masuk.php');
    } else {
        echo 'Gagal';
        header('location: masuk.php');
    }
}

// mengedit barang
if (isset($_POST['editbarang'])) {
    $idb = $_POST['idb'];
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $pemasukan = mysqli_real_escape_string($conn, $_POST['pemasukan']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $update = mysqli_query($conn, "UPDATE pemasukan SET kategori='$kategori', pemasukan='$pemasukan', deskripsi='$deskripsi' WHERE id='$idb'");
    if ($update) {
        header('location: masuk.php');
    } else {
        echo 'Gagal: ' . mysqli_error($conn); // Tambahkan pesan kesalahan
        header('location: masuk.php');
    }
}


// menghapus barang
if (isset($_POST['hapusbarang'])) {
    $idb = $_POST['idb'];
    $hapus = mysqli_query($conn, "DELETE FROM pemasukan WHERE id='$idb'");
    if ($hapus) {
        header('location: masuk.php');
    } else {
        echo 'Gagal';
        header('location: masuk.php');
    }
}

