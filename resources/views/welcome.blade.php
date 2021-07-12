
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>SIMSPALD CIANJUR</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img')}}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img')}}/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img')}}/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('fe')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('fe')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('fe')}}/assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="{{asset('fe')}}/assets/css/animated.css">
    <link rel="stylesheet" href="{{asset('fe')}}/assets/css/owl.css">

        <!-- Leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>SIMSPALD <img src="/logo.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#features">Map</a></li>
              <li class="scroll-to-section"><a href="#about">Tentang SPALD</a></li>
              <li class="scroll-to-section"><a href="#services">Dokukumentasi</a></li>
              <li class="scroll-to-section"><div class="main-blue-button"><a href="#contact">Hubungi Kami</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                      <em>Sistem Pengolahan Air Limbah Domestik <br />(SPALD)</em>
                  </div>
                  <div class="col-lg-12">
                    <h2>SIMSPALD</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('fe')}}/assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <h2><span>Peta Sebaran SPALD</span></h2>
              </div>
            <div class="features-content" id="map" style="width: 100%; height: 600px;"></div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="{{asset('fe')}}/assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>Tentang SPALD</h6>
            <h2>Sistem Pengolahan Air Limbah Domestik <em>(SPALD)</em></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>{{$spald}}</h4>
                <h6>SPALD Terbangun</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>{{$akses_tersedia}}</h4>
                <h6>Unit SR</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>{{$akses_tersedia*5}}</h4>
                <h6>Jiwa</h6>
              </div>
            </div>
          </div>
          <p>Sistem Pengelolaan Air Limbah Domestik yang selanjutnya disingkat SPALD adalah serangkaian kegiatan pengelolaan air limbah domestik dalam satu kesatuan dengan prasarana dan sarana pengelolaan air limbah domestik.</p>
          <div class="main-green-button"><a href="#">Lihat Selengkapnya</a></div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2><span>Dokumentasi</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <?php $count = 0; ?>
        @foreach($foto as $f)
        <?php if($count == 6) break; ?>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-12">
                  <img src="{{asset('foto')}}/{{$f->foto}}" alt="">
              </div>
            </div>
          </div>
        </div>
        <?php $count++; ?>
        @endforeach
      </div>
    </div>
  </div>
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Hubungi Kami</h6>
                  <h2>pengurus KPP SPALD <span>Silahkan</span> Hubungi <em>Kami</em></h2>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Nama KPP" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Alamat Pos-el" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Lokasi KPP (Desa Kecamatan)" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Isi Pesan" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Kirim Pesan</button>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="{{asset('fe')}}/assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">abs.dpkpp@gmail.com</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="{{asset('fe')}}/assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">1234-5678-9100</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="{{asset('fe')}}/assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">Jl. Adi Sucipta No. 7 - Cianjur</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 SIMSPALD Cianjur. 
        </div>
      </div>
    </div>
  </footer>
  <script>
      var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

    var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});
    var map = L.map('map', {
    center: [-6.834567727116758,107.13313579559328	],
    zoom: 13,
    layers: [peta1
    ]
    });
    var baseMaps = {
    "Grayscale": peta1,
    "Satellite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };
    L.control.layers(baseMaps).addTo(map);
   //mengambil koordinat

   @foreach($koordinat as $data)
      L.marker([{{$data->lat_}},{{$data->long_}}]).addTo(map);
  @endforeach
  </script>

  <!-- Scripts -->
  <script src="{{asset('fe')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('fe')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('fe')}}/assets/js/owl-carousel.js"></script>
  <script src="{{asset('fe')}}/assets/js/animation.js"></script>
  <script src="{{asset('fe')}}/assets/js/imagesloaded.js"></script>
  <script src="{{asset('fe')}}/assets/js/custom.js"></script>

</body>
</html>