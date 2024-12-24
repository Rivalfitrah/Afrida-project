<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles.css" />
    <style>
    .product-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .product {
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        width: 200px;
        text-align: center;
        margin-left:2%;
    }
    .product p{
        color:black;
    }
    .product img {
        margin-bottom: 10px;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 0 20px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    form {
        text-align: center;
        margin-bottom: 20px;
    }

    button {
        background-color: white;
        color: black;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #266aa6;
    }
    button.active {
        background-color: #266aa6;
        color: black;
    }
</style>
</head>
<body>
    <div class="header">
        <div class="containeratas_selain_index">
            <div class="navbar">
                <div class="logo">
                    <img src="images/baruafrida.png" width="350px" alt="toko_plastik">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">Tentang</a></li>
                        <li><a class="active" href="navigasiproduk.php">Katalog Produk</a></li>
                        <li><a href="contact.php">Kontak dan Pemesanan</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Home -->
            <!-------- WhatsApp Logo --------->
            <a href="https://wa.me/+6289605763781" class="whatsapp-float" target="_blank" rel="noopener" >
                <i class="fa fa-whatsapp" style="font-size:40px"></i>
            </a>
        </div>  
    </div>
    <div class="container">
    <h1>Product List</h1>
    <form method="post">
    <button type="submit" name="category" value="plastik" class="<?= isset($_POST['category']) && $_POST['category'] == 'plastik' ? 'active' : '' ?>">Plastik</button>
    <button type="submit" name="category" value="bahan_makanan" class="<?= isset($_POST['category']) && $_POST['category'] == 'bahan_makanan' ? 'active' : '' ?>">Bahan Makanan</button>
    <button type="submit" name="category" value="bahan_kue" class="<?= isset($_POST['category']) && $_POST['category'] == 'bahan_kue' ? 'active' : '' ?>">Bahan Kue</button>
    <button type="submit" name="category" value="all" class="<?= isset($_POST['category']) && $_POST['category'] == 'all' ? 'active' : '' ?>">Semua Produk</button>
</form>

</div>

    <div class="product-list">
    <?php
    // Koneksi ke database
    $servername = "localhost"; // Sesuaikan dengan nama host phpMyAdmin Anda
    $username = "root"; // Sesuaikan dengan nama pengguna phpMyAdmin Anda
    $password = ""; // Sesuaikan dengan kata sandi phpMyAdmin Anda
    $dbname = "afrida"; // Sesuaikan dengan nama database Anda

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data produk berdasarkan kategori yang dipilih
    if (isset($_POST['category'])) {
        $category = $_POST['category'];

        if ($category == 'all') {
            $sql = "SELECT nama_barang, satuan, stok, gambar FROM plastik 
                    UNION ALL 
                    SELECT nama_barang, satuan, stok, gambar FROM bahan_makanan 
                    UNION ALL 
                    SELECT nama_barang, satuan, stok, gambar FROM bahan_kue";
        } else {
            $sql = "SELECT nama_barang, satuan, stok, gambar FROM $category";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Tampilkan data produk
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='../uploads/" . $row['gambar'] . "' alt='gambar_produk' width='100' height='100'>";
                echo "<p>" . $row['nama_barang'] . "</p>";
                echo "<p>satuan: " . $row['satuan'] . "</p>";
                echo "<p>stok: " . $row['stok'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Tidak ada produk yang ditemukan.";
        }
    }

    $conn->close();
    ?>
</div>
    </div>

    <!-------- footer ---------->
    <div class="footer">
        <div class="containerbawah">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Lokasi Toko Afrida Plastik</h3>
                    <p>Klik Google Maps untuk Detailnya!</p>
                    <div class="app-logo">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4791013610234!2d106.7589689!3d-6.587213299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c52303ec2453%3A0xbe3717ddaef5ab6e!2sAfrida%20Plastik!5e0!3m2!1sid!2sid!4v1717212753035!5m2!1sid!2sid" width="372" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="footer-col-3">
                    <h3>Navigasi Web</h3>
                    <ul class="footer-links">
                        <li><a href="home.php" class="footer-link">Home</a></li>
                        <li><a href="about.php" class="footer-link">Tentang</a></li>
                        <li><a href="products.php" class="footer-link">Katalog Produk</a></li>
                        <li><a href="contact.php" class="footer-link active">Kontak dan Pemesanan</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="alamat">Jalan Laladon Indah RT 04/06, Kecamatan Ciomas, Kabupaten Bogor, Jawa Barat, 16610</p>
            <p class="copyright">©Copyright 2024 - Toko Afrida Plastik</p>
        </div>
    </div>

    <!-- --------js for toggle menu-----------
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

    Script to filter products
    <script>
        function filterProduct(category) {
            var products = document.getElementsByClassName('product');
            for (var i = 0; i < products.length; i++) {
                if (category === 'all' || products[i].classList.contains(category)) {
                    products[i].style.display = 'block';
                } else {
                    products[i].style.display = 'none';
                }
            }
        }

        document.getElementById('search').addEventListener('click', function() {
            var searchInput = document.getElementById('search-input').value.toLowerCase();
            var products = document.getElementsByClassName('product');
            for (var i = 0; i < products.length; i++) {
                var productName = products[i].getElementsByTagName('h2')[0].innerText.toLowerCase();
                if (productName.includes(searchInput)) {
                    products[i].style.display = 'block';
                } else {
                    products[i].style.display = 'none';
                }
            }
        });
    </script> -->
</body>
</html>
