<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Plastik Afrida</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a class="active" href="about.php">Tentang</a></li>
                    <li><a href="navigasiproduk.php">Katalog Produk</a></li>
                    <li><a href="contact.php">Kontak dan Pemesanan</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()" >
        </div>

         <!-- Home -->
         <section id="about-home">
            <h2 class="tentang_afrida_plastik">Tentang Toko Afrida Plastik </h2>
        </section>

<!-------- WhatsApp Logo --------->
<a href="https://wa.me/+6289605763781" class="whatsapp-float" target="_blank" rel="noopener" >
    <i class="fa fa-whatsapp" style="font-size:40px"></i>
</a>
    


<!---- sejarah ----->
    <div class="sejarah">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/fotoafridaportrait.png" alt="" class="sejarah-img">
                </div>
                <div class="col-2">
                    <p>Kenapa Harus Belanja di Toko Afrida Plastik?</p>
                    <h1>Profil Umum</h1>
                    <small>Toko Afrida Plastik sudah berdiri sejak tahun 2015.  Toko ini menyediakan barang-barang plastik dan bahan kue yang lengkap.  Barang-barang tersebut meliputi tepung, susu, sterofoam, dll.  Toko Afrida Plastik juga menawarkan harga yang bersaing sehingga cocok untuk berbelanja kebutuhan sehar-hari maupun untuk kegiatan jual-beli kembali.<br></small>
                    <a href="https://wa.me/6289605763781" class="btn" target="_blank" rel="noopener">Belanja Sekarang!</a>
                </div>
                
                <div class="col-3">
                    <h1>Lokasi & Jam Operasional</h1>
                </div>
                <div class="col-3">
                    <img src="images/jamlokasinew.png" width="150%" alt="" class="sejarah-img">
                </div>
            </div>
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
                        <li><a href="home.php" class="footer-link ">Home</a></li>
                        <li><a href="about.php" class="footer-link active">Tentang</a></li>
                        <li><a href="products.php" class="footer-link">Katalog Produk</a></li>
                        <li><a href="contact.php" class="footer-link">Kontak dan Pemesanan</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Hubungi Kami</h3>
                    <ul>
                        <li>
                            <a href="https://wa.me/6289605763781" target="_blank" class="whatsapp-link" rel="noopener">WhatsApp (+6289605763781)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="alamat">Jalan Laladon Indah RT 04/06, Kecamatan Ciomas, Kabupaten Bogor, Jawa Barat, 16610</p>
            <p class="copyright">©Copyright 2024 - Toko Afrida Plastik</p>
        </div>
    </div>


    <!----------js for toggle menu------------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px"
                }
            else
                {
                    MenuItems.style.maxHeight = "0px"
                }
        }
    </script>

</body>
</html>