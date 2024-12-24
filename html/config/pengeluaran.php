<?php 
// koneksi db
$conn = mysqli_connect("localhost", "root", "", "afrida");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// menambah barang baru
if (isset($_POST['addnewbarang'])) {
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $pengeluaran = mysqli_real_escape_string($conn, $_POST['pengeluaran']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $addtotable = mysqli_query($conn, "INSERT INTO pengeluaran (kategori, pengeluaran, deskripsi) VALUES ('$kategori', '$pengeluaran', '$deskripsi')");
    if ($addtotable) {
        header('location: keluar.php');
    } else {
        echo 'Gagal';
        header('location: keluar.php');
    }
}

// mengedit barang
if (isset($_POST['editbarang'])) {
    $idb = $_POST['idb'];
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $pengeluaran = mysqli_real_escape_string($conn, $_POST['pengeluaran']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $update = mysqli_query($conn, "UPDATE pengeluaran SET kategori='$kategori', pengeluaran='$pengeluaran', deskripsi='$deskripsi' WHERE id='$idb'");
    if ($update) {
        header('location: keluar.php');
    } else {
        echo 'Gagal: ' . mysqli_error($conn); // Tambahkan pesan kesalahan
        header('location: keluar.php');
    }
}

// menghapus barang
if (isset($_POST['hapusbarang'])) {
    $idb = $_POST['idb'];
    $hapus = mysqli_query($conn, "DELETE FROM pengeluaran WHERE id='$idb'");
    if ($hapus) {
        header('location: keluar.php');
    } else {
        echo 'Gagal';
        header('location: keluar.php');
    }
}
