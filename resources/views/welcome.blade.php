<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Utama</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('LandingPage/assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="LandingPage/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Magang DISTANBUN</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('pemagang')}}">Pendaftaran Magang</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{asset('LandingPage/assets/img/portfolio/pemprov.png')}}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">
                    Dinas Pertanian Dan Perkebunan
                    <br />
                    Provinsi Jawa Tengah
                </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About DISTANBUN</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <div>
                                <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" href="https://maps.app.goo.gl/kHctXMuhJSRxYaau7"></a>
                            </div>
                            <img class="img-fluid" src="{{asset('LandingPage/assets/img/portfolio/maps.png')}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('LandingPage/assets/img/portfolio/distanbun.png')}}" alt="..." />
                        </div>
                    </div>
                     <!-- Portfolio Item 2-->
                     <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <div>
                                <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" href="https://distanbun.jatengprov.go.id/"></a>
                            </div>
                            <img class="img-fluid" src="{{asset('LandingPage/assets/img/portfolio/web.png')}}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Komplek, Tarubudaya, Jl. Tarubudaya Jl. Jenderal Gatot Subroto, Bandarjo,
                            <br />
                            Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50517
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Sosial Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/DistanbunJateng?locale=id_ID"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/distanbun_jtg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://distanbun.jatengprov.go.id/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>

        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"> Sejarah DISTANBUN JATENG</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset('LandingPage/assets/img/portfolio/distanbun.png')}}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Awal perkembangan sumber daya manusia pertanian di Indonesia dimulai tahun 1817 yaitu dengan didirikannya Kebun Raya Bogor Prof.Caspar George Carl Reinwardt seorang yang berkebangsaan Belanda, mengembangkan ilmu pengetahuan di bidang botani. Kemudian pada tahun 1876, Kebun Raya membangun Kebun Budidaya Tanaman (Kulturtuin) di Cikeumuh Bogor dengan mandat untuk melaksanakan 3 fungsi, yaitu : Penelitian, pendidikan, dan penyuluhan. Disamping membangun kebun percobaan dan fungsi penelitian, juga dibangun kebun-kebun percontohan dan sekolah pertanian sebagai bagian dari fungsi penyuluhan dan pendidikan pertanian. Kemudian pada tahun 1905 Pemerintah Hindia Belanda mendirikan Departemen Pertanian (Departemen Van Landbouw) yang mempunyai tugas pokok penyelngaraan pendidikan dan penyuluhan pertanian bagi rakyat pribumi menjadi lebih mantap dan profesional.
                                        <br />
                                        Sejalan dengan perkembangan sejarah setelah Indoneisa merdeka, pengembangan SDM pertanian diupayakan lebih serius lagi dibawah pembinaan Kementrian Kemakmuran  (1945-1950). Lembaga Kementrian Kemakmuran mengalami reorganisasi menjadi Kementrian Pertanian (1950-1960) dan kemudian menjadi Departemen Pertanian untuk memenuhi tuntutan yang berkembang di bidang sumber daya manusia pertanian saat itu, maka Departemen Pertanian membentuk lembaga pendidikan  dan penyuluhan pertanian tingkat pusat yang bertanggung jawab langsung kepada Mentri Pertanian. Dengan adanya Keputusan Mentri Pertanian Nomor 88/Kpts/Org/1972 yang merupakan pelaksanaan dai Keputusan Presiden Nomor 8 Tahun 1972 menetapkan garis-garis kebijaksanaan pendidikan dalam sektor pertanian sehingga dapat memperbaiki keadaan tersebut.
                                        <br />
                                        Berdasarkan Peraturan Gubernur Jawa Tengah Nomor 76 Tahun 2016 tentang Organisasi Dan Tata Kerja Dinas Pertanian Dan Perkebunan Provinsi Jawa Tengah memiliki tugas pokok Membantu Gubernur melaksanakan urusan pemerintah Bidang Pertanian Sub Urusan Tanaman Pangan, Hortikultura, dan Perkebunan yang menjadi kewenangan Daerah dan tugas pembantuan yang ditugaskan kepada Daerah. Untuk meyelenggarakan tugas pokok yang dimaksud. Dinas Pertanian dan Perkebunan Provinsi Jawa Tengah mempunyai fungsi sebagai berikut:
                                        <br />
                                        1.	Perumusan Kebijakan bidang sarana dan prasarana, tanaman pangan, hortikultura, Perkebunan dan penyuluhan, pasca panen dan bina usaha.
                                        <br />
                                        2.	Pelaksanaan evaluasi dan pelaporan bidang sarana dan prasarana, tanaman  pangan, hortikultura, Perkebunan dan penyuluhan, pasca panen, dan bina usaha.
                                        <br />
                                        3.	Pelaksanaan administrasi dinas bidang sarana dan prasarana, tanaman pangan, hortikultura, Perkebunan dan penyuluhan, pasca panen, dan bina usaha.
                                        <br />
                                        4.	Pelaksanaan fungsi lain yang diberikan oleh Gubernur, sesuai tugas dan fungsinya.
                                        </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="{{asset('https://cdn.startbootstrap.com/sb-forms-latest.js')}}"></script>
    </body>
</html>

