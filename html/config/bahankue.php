<?php 
session_start();
// koneksi db
$conn = mysqli_connect("localhost", "root", "", "afrida");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// menambah barang baru
if (isset($_POST['addnewbarang'])) {
    $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $satuan = mysqli_real_escape_string($conn, $_POST['satuan']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);

    // Penanganan gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    // Sanitasi nama file
    $gambar = sanitize_filename($gambar);
    move_uploaded_file($tmp_name, "../uploads/$gambar");

    $query = "INSERT INTO bahan_kue (nama_barang, satuan, stok, gambar) VALUES ('$nama_barang', '$satuan', '$stok', '$gambar')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Barang berhasil ditambahkan.'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'title' => 'Gagal!',
            'text' => 'Barang gagal ditambahkan.'
        ];
    }

    header("Location: kue.php");
    exit();
}

// edit barang
if (isset($_POST['editbarang'])) {
    $idb = mysqli_real_escape_string($conn, $_POST['idb']);
    $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $satuan = mysqli_real_escape_string($conn, $_POST['satuan']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);

    // Penanganan gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    if (!empty($gambar)) {
        // Sanitasi nama file
        $gambar = sanitize_filename($gambar);
        move_uploaded_file($tmp_name, "../uploads/$gambar");

        $query = "UPDATE bahan_kue SET nama_barang='$nama_barang', satuan='$satuan', stok='$stok', gambar='$gambar' WHERE id='$idb'";
    } else {
        $query = "UPDATE bahan_kue SET nama_barang='$nama_barang', satuan='$satuan', stok='$stok' WHERE id='$idb'";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Barang berhasil diubah.'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'title' => 'Gagal!',
            'text' => 'Barang gagal diubah.'
        ];
    }

    header("Location: kue.php");
    exit();
}

// hapus barang
if (isset($_POST['hapusbarang'])) {
    $idb = mysqli_real_escape_string($conn, $_POST['idb']);
    $query = "DELETE FROM bahan_kue WHERE id='$idb'";

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Barang berhasil dihapus.'
        ];
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'title' => 'Gagal!',
            'text' => 'Barang gagal dihapus.'
        ];
    }

    header("Location: kue.php");
    exit();
}

// Sanitasi nama file
function sanitize_filename($filename) {
    return preg_replace('/[^A-Za-z0-9\-\_\.]/', '_', $filename);
}
