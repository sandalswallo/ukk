
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LAUNDRY PWD</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset ('homepagetamplate/assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset ('homepagetamplate/assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset ('homepagetamplate/assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset ('homepagetamplate/assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset ('homepagetamplate/assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset ('homepagetamplate/assets/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{asset ('homepagetamplate/assets/images/logo.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="/login">Masuk</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/register">Daftar</a>
                              </li>
                             
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>LAUNDRY<br>PWD CITY</h1>
                                 <p></p>
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{asset ('homepagetamplate/assets/images/ppdb.jpg')}}" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>KEUNGGULAN</h1>
                                 <p><br>1.Pengerjaan cepat.
                                    <br>2.Aman,cucian anda tidak akan hilang ataupun tertukar.
                                    <br>3.Harga pinggiran,Kualitas bintang 5
                                 </p>
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{asset ('homepagetamplate/assets/images/bolos.jpg')}}" alt="#"/>
                                    <h3>02</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>PERATURAN<br>LAUNDRY PWD CITY</h1>
                                 <p><br>1.Harus bayar tepat waktu
                                    <br>2.Tidak boleh ngebon atau ngutang
                                    <br>3.Minimal cucian harus 1 Kg
                                 </p>
                                
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{asset ('homepagetamplate/assets/images/peraturan.jpg')}}" alt="#"/>
                                    <h3>03</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>LOKASI OUTLET<br>DI SIDOARJO</h1>
                                 <p>
                                    <br>1.Gedangan Di depan pasar Tebel
                                    <br>2.Sedati Di depan SD Buncitan
                                    <br>3.Buduran Di samping pom bensin
                                 </p>
                                 
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="{{asset ('homepagetamplate/assets/images/siswa.jpg')}}" alt="#"/>
                                    <h3>04</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <figure><img src="{{asset ('homepagetamplate/assets/images/lulus.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>MACAM-MACAM PAKET DI LAUNDRY PWD CITY</h2>
                     <p>
                         <br>1.CuciKering 10k per Kg
                         <br>2.CuciBasah 7k per Kg
                         <br>3.CuciStrika 13k per Kg
                         <br>4.CuciKarpetKering 20k per Kg
                         <br>5.CuciKarpetBasah 15k per Kg
                     </p>
                     <h3>ANDA PESAN KAMI GARAP</h3>
                     <strong>YOI MENNN <span class="yellow"></span></strong>
                     
                  </div>
               </div>
            </div>
         </div>
         <!-- team -->
         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <!-- <h2>Build Your Website, Let's Check Our Services</h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p> -->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="{{asset ('homepagetamplate/assets/images/service1.png')}}" alt="#"/></i>
                        <h3>VISI</h3>
                       
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="{{asset ('homepagetamplate/assets/images/service2.png')}}" alt="#"/></i>
                        <h3>KEPERCAYAAN PELANGGAN</h3>
                       
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="{{asset ('homepagetamplate/assets/images/service3.png')}}" alt="#"/></i>
                        <h3>MACAM-MACAM PAKET</h3>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->
         <!-- New Ideas  section -->
         <div class="ideas">
            <div class="container">
               <div class="row">
                  <div class="col-md-10">
                     <div class="titlepage">
                        <h2>PRESENTASE KEPERCAYAAN PELANGGAN</h2>
                        <p></p>
                     </div>
                  </div>
               </div>
               <div class="border_trbl">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>90%</h3>
                           <p>Barang Aman</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>90%</h3>
                           <p>Pelanggan Puas</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>100%</h3>
                           <p>Jika Ada Barang Yang Hilang Maka Akan Diganti</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end New Ideas  section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>PRESTASI LAUNDRY YANG PERNAH DI DAPATKAN</h2>
                     <!-- <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p> -->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="test_box margin_bottom">
                     <p>
                        <br>1.Menjadi Tempat Laundry Yang Paling Bersih
                        <br>2.Aman Dari kehilangan Pakaian
                        <br>3.Menjadi Tempat Laundry Yang Beroprasi 24 Jam
                     </p>
                     <div class="test_icon">
                        <i><img src="{{asset ('homepagetamplate/assets/images/cos.png')}}" alt="#"/></i>
                        <h4>Ma' Ing <br> <span class="yellow">Call Center 08969786586
                        </span></h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="test_box">
                     <p>Dengan anda mempercayakan pakaian anda pada kami maka outlet laundry kami akan melayani dengan sepenuh hati,
                        Visi dari laundry kami adalah anda pesan kami garap, jadi semakin banyak pesanan anda kami makin semangat untuk menggarapnya.
                     </p>
                     <div class="test_icon">
                        <i><img src="{{asset ('homepagetamplate/assets/images/cos.png')}}" alt="#"/></i>
                        <h4>Yanto <br> <span class="yellow">Call Center 0965096956546</span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 
               </div>
            </div>
          
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="{{asset ('homepagetamplate/assets/images/logo1.png')}}" alt="#"/>
                     <ul class="about_us">
                        <li><br>  <br> <br> </li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Useful Link</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>The Services</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                 
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fcoolthemestores.com%2Fzero-two-wallpaper-hd-new-tab%2F&psig=AOvVaw0QstH0qb8pINqzymEdcCG5&ust=1670378675983000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCLi2m9jz4_sCFQAAAAAdAAAAABAR"> Ma'Ing</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset ('homepagetamplate/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset ('homepagetamplate/assets/js/popper.min.js')}}"></script>
      <script src="{{asset ('homepagetamplate/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset ('homepagetamplate/assets/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset ('homepagetamplate/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset ('homepagetamplate/assets/js/custom.js')}}"></script>
   </body>
</html>

