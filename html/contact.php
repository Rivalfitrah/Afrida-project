<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontak dan Pemesanan | Toko Afrida Plastik</title>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://web3forms.com/client/script.js" async defer></script>

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
                            <li><a href="about.php">Tentang</a></li>
                            <li><a href="navigasiproduk.php">Katalog Produk</a></li>
                            <li><a class="active" href="contact.php">Kontak dan Pemesanan</a></li>
                        </ul>
                    </nav>
                    <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()" >
                </div>
        
                <!-- Home -->
                <section id="about-home">
                    <h2 class="tentang_afrida_plastik">Kontak dan Pemesanan </h2>
                </section>

                <!-------- WhatsApp Logo --------->
            <a href="https://wa.me/+6289605763781" class="whatsapp-float" target="_blank" rel="noopener" >
            <i class="fa fa-whatsapp" style="font-size:40px"></i>
            </a>

        <section id="contact">
            <div class="getin">
                <h2>Kenal lebih dekat</h2>
                <p> Ada pertanyaan?  Silakan isikan pertanyaan Anda di kolom yang sudah disediakan atau hubungi WhatsApp kami!</p>
                <div class="getin-details">

                    <h3>Toko Afrida</h3>
                    <div>
                        <a href="https://maps.app.goo.gl/zqoRmUdhkKGfCSmQ8" target="_blank" rel="noopener">
                            <i class="far fa-home get"></i>
                        </a>
                        
                        <p> Jalan Laladon Indah RT 04/06, Kecamatan Ciomas, Kabupaten Bogor, Jawa Barat, 16610
                        </p>
                    </div>

                    <h3>Telepon / WhatsApp</h3>
                    <div>
                        <a href="https://wa.me/6289605763781" target="_blank" rel="noopener">
                            <i class="fas fa-phone-alt get"></i>
                        </a>
                        <p> +6289605763781
                            <br>
                        </p>
                    </div> 

                    <h3>Email</h3>
                    <div>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=plastiktokoafrida@gmail.com target="_blank" rel="noopener">
                            <i class="fas fa-envelope get"></i>
                        </a>
                        <p> plastiktokoafrida@gmail.com<br>
                        </p>
                    </div> 
                    <h3>Jam Operasional</h3>
                    <div>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sekolahwarisislam@gmail.com" target="_blank" rel="noopener">
                            <i class="fas fa-clock get"></i>
                        </a>
                        <p> 07.00 - 21.00<br>
                        </p>
                    </div> 
                </div>
            </div>

            <div class="form">
                <form action="https://api.web3forms.com/submit" method="POST" class="formbertanya">
                    <div class="judulform">
                        <h4> Ajukan Pertanyaan Anda Di sini!</h4>
                        <p> Kami akan menjawab pertanyaan Anda melalui nomor yang diberikan. </p>
                    </div>
                    <input type="hidden" name="access_key" value="4790c1c4-4ea8-477f-912e-0b3563426d6d">
                    <div class="form-row">
                        <input type="text" id="name" name="name" placeholder="Nama Anda" required>
                        <input type="email" id="email" name="email" placeholder="Telepon (WhatsApp Aktif)" required>
                    </div>
                    <div class="form-col">
                        <input type="text" id="judulpertanyaan" name="Judul Pertanyaan" placeholder="Judul Pertanyaan" required>
                    </div>
                    <div class="form-col">
                        <textarea id="isipertanyaan" cols="30" rows="8" name="Isi Pertanyaan" placeholder="Bagaimana kami bisa membantu Anda?" required></textarea>
                    </div>
                    <div class="h-captcha" data-captcha="true"></div>
                    <div class="form-col">
                        <button>Kirim Pertanyaan</button>
                    </div>
                </form>
            </div>
        </section>

        <section id="judulgmaps">
            <div class="gmaps">
                <h3>Temukan Lokasi Toko Afrida Plastik melalui Google Maps!</h3>
            </div>
        </section>

        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.4791013610234!2d106.756394!3d-6.5872133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c52303ec2453%3A0xbe3717ddaef5ab6e!2sAfrida%20Plastik!5e0!3m2!1sid!2sid!4v1717276559647!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


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