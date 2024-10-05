<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edo & Monike</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Edo & Monike Wedding Invitation" name="keywords">
    <meta content="Edo & Monike Wedding Invitation" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
        <?php
            include('koneksi.php');
            $row = mysqli_fetch_array($query);
            if(empty($row)){
                header("HTTP/1.0 404 Not Found");
                header("Location: /404.php");
                exit();
            }else{
                
            }  
        ?>
    <audio id="watchButton" src="asset/backsound.mp3" preload="auto" allow="autoplay" ></audio>
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="font-secondary text-white mb-n2">Edo <span class="text-primary">&</span> Monike</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TP1_4316.JPG" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Edo & Monike</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text font-weight-normal text-white m-0" style="letter-spacing: 2px;">Dear <?php echo $row['name']; ?> </h3>
                                <h2 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h2>
                            </div>
                            <!-- <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/N_U4HI90_8o?si=v8uGZQ8J3zULqEqN&amp;controls=0" data-target="#videoModal">
                                <span></span>
                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TP1_4512.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Edo & Monike</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text font-weight-normal text-white m-0" style="letter-spacing: 2px;">Dear <?php echo $row['name']; ?> </h3>
                                <h2 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h2>
                            </div>
                            <!-- <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/N_U4HI90_8o?si=v8uGZQ8J3zULqEqN&amp;controls=0" data-target="#videoModal">
                                <span></span>
                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TP1_4348.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Edo & Monike</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text font-weight-normal text-white m-0" style="letter-spacing: 2px;">Dear <?php echo $row['name']; ?> </h3>
                                <h2 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h2>
                            </div>
                            <!-- <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/N_U4HI90_8o?si=v8uGZQ8J3zULqEqN&amp;controls=0" data-target="#videoModal">
                                <span></span>
                            </button> -->
                        </div>
                    </div>
                </div>                
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
                <h1 class="font-secondary display-4">Groom & Bride</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3" style="text-align: center;">Edo Cahyanto Setiawan, S.T.</h3>
                        <p style="text-align: center;">Putra dari </p> 
                        <p style="text-align: center;">Bapak Budi Setiawan, S.E., S.H. (Tjoa Ing Liang)</p>
                        <p style="text-align: center;"> & </p>
                        <p style="text-align: center;">Ibu Surjantri, S.E. (Ong May Kiem)</p>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TP1_4465.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TP1_4488.JPG" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3" style="text-align: center;">drh. Monike Lanina</h3>
                        <p style="text-align: center;">Putri dari </p> 
                        <p style="text-align: center;">Bapak Paulus Margono (Tan Sin An)(Alm.)</p> 
                        <p style="text-align: center;"> &</p>
                        <p style="text-align: center;">Ibu Ratna Palasari (Oey It Nio) </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-5" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Story</h6>
                <h1 class="font-secondary display-4">Our Love Story</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="container timeline position-relative p-0">
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/TP1_4346.JPG" alt="" style="width: 300px;">
                    </div>
                    <div class="col-md-6 text-center text-md-left ">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">First Tweet</h4>
                            <p class="text-uppercase mb-2">14 May 2020</p>
                            <p class="m-0">Di tengah senyapnya dunia akibat pandemi, kami terhubung melalui sebuah ruang maya—Twitter, yang kini berubah nama menjadi X. Bermula dari sebuah hashtag yang mengisi waktu luang, percakapan kami mengalir di kolom komentar postingan Monike. Kata-kata sederhana perlahan menjembatani jarak, hingga akhirnya membawa kami ke percakapan yang lebih pribadi di Direct Message. Tak butuh lama, angka-angka di layar berubah menjadi nomor yang kami tukarkan, seolah takdir sudah lama merencanakan pertemuan ini.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">First Meet</h4>
                            <p class="text-uppercase mb-2">28 June 2020</p>
                            <p class="m-0">Akhirnya, kami memutuskan untuk bertemu langsung, tanpa layar yang memisahkan. Tempat pertemuan pertama kami adalah di Indomaret, depan Citra Raya Cikupa—lokasi sederhana namun penuh arti. Rasa gugup yang semula ada perlahan memudar begitu mata kami saling bertemu untuk pertama kalinya. Tatapan itu meruntuhkan segala keraguan, dan pertemuan kami mengalir dengan begitu alami dan lancar.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3 " src="img/first-meet.jpeg" alt="" style="width: 300px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/first-date.jpeg" alt="" style="width: 300px;">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">First Date</h4>
                            <p class="text-uppercase mb-2">29 Oktober 2020</p>
                            <p class="m-0">Pertemuan ini begitu istimewa, penuh makna. Di bawah langit Nomu Malang, kami memutuskan untuk melangkah lebih jauh, mengambil komitmen yang lebih mendalam. Di tempat sederhana itu, kami berjanji untuk saling mengenal lebih dalam, meski jarak menjadi tantangan. Nomu Malang menjadi saksi bisu, tempat di mana hati kami dipertemukan dan sebuah janji dilahirkan—untuk bertahan, meski rindu kerap membentang</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Enagagement</h4>
                            <p class="text-uppercase mb-2">29 December 2023</p>
                            <p class="m-0">“Setelah tiga tahun menenun cerita, melewati jarak dan waktu, kami kini tiba di titik di mana hati kami sepakat untuk melangkah lebih jauh lagi. Perjalanan ini telah menguatkan kami, dan kini, di bawah langit yang sama, kami memutuskan untuk mengikat komitmen yang lebih dalam. Apa yang dimulai dari pertemuan sederhana, kini berubah menjadi janji yang kami genggam erat—untuk terus bersama, mengarungi waktu dengan cinta yang lebih kuat.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="img/STV08271.jpg" alt="" style="width: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Story End -->


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Our Photo Gallery</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/TP1_4228.JPG" alt="">
                <a href="img/TP1_4228.JPG" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/test.jpeg" alt="">
                <a href="img/test.jpeg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/TP1_4522.JPG" alt="">
                <a href="img/TP1_4522.JPG" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/TP1_4697.JPG" alt="">
                <a href="img/TP1_4697.JPG" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/test-3.jpeg" alt="">
                <a href="img/test-3.jpeg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/TP1_4609.JPG" alt="">
                <a href="img/TP1_4609.JPG" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

        <!-- <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="font-secondary display-4">Video</h6>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/N_U4HI90_8o?si=v8uGZQ8J3zULqEqN&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div> -->

    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Event</h6>
                <h1 class="font-secondary display-4">Our Wedding Event</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <!-- <h5 class="font-weight-normal text-muted mb-3 pb-3">Clita ipsum aliquyam dolor diam dolores elitr nonumy. Rebum sea vero ipsum eirmod tempor kasd. Diam amet lorem erat eos sit lorem elitr justo</h5> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="img/TP1_4593.JPG" alt="" style="width: 300px;">
                        <h4 class="mb-3">Holy Matrimony</h4>
                        <p class="mb-2">GKMI Sola Gratia</p>
                        <p class="mb-2">Jl. Sompok Lama No.56-58, Semarang </p>
                        <p class="mb-0">Saturday, 19 October 2024 09.30 WIB</p>
                        <a class="mb-5" href="https://g.co/kgs/zs5G6G6" class="mb-0" style="font-size:30px;color:blue">Location</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="img/TP1_4815.JPG" alt="" style="width: 300px;">
                        <h4 class="mb-3">Reception</h4>
                        <p class="mb-2">Sixteen 8</p>
                        <p class="mb-2">Jl. Ki Mangunsarkoro No.38, Semarang</p>
                        <p class="mb-0">Saturday, 19 October 2024 12.00 WIB</p>
                        <a class="mb-5" href="https://g.co/kgs/bFu6m5F" class="mb-0" style="font-size:30px;color:blue">Location</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Friends & Family Start -->
    <!-- <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Friends & Family</h6>
                <h1 class="font-secondary display-4">Groomsmen & Bridesmaid</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">Groomsmen</li>
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">Bridesmaid</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-2.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-2.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-3.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-3.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Friends & Family End -->


    <!-- RSVP Start -->
    <!-- <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Join Our Party</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Name"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option>Number of Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option>I'm Attending</option>
                                        <option>All Events</option>
                                        <option>Wedding Party</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- RSVP End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <!-- <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div> -->
            <!-- <div class="d-flex justify-content-center py-2">
                <p class="text-white" href="#">edocsetiawan@gmail.com</p>
                <span class="px-3">|</span>
                <p class="text-white" href="#">+012 345 6789</p>
            </div> -->
            <p class="m-0">&copy; <a class="text-primary" href="#">Made with love by : edocsetiawan </a>. Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
     <button id="enableScrollButton">
        <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
     </button>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        var audio = document.createElement("AUDIO")
        document.body.appendChild(audio);
        audio.src = "asset/backsound.mp3"

        document.body.addEventListener("scroll", function () {
            audio.play()
        });
        document.getElementById("watchButton").click();
    </script>
</body>

</html>