<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarab">
    <meta name="description" content="Sarab - Fast Food & Restaurant HTML Template">
    <title>Football Project - Berita Bola Terkini</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite(['resources/css/bootstrap.min.css', 'resources/css/aos.css', 'resources/css/swiper-bundle.min.css', 'resources/css/magnific-popup.css', 'resources/css/style.css'])
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="blogo">
                    <div class="bico"><i class="fas fa-futbol"></i></div>
                    <div>
                        <div class="bname">Foot<span>ball</span></div>
                        <div class="bsub">Football Standings</div>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="fas fa-bars" style="color:var(--primary);font-size:1.35rem;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#category">Liga & Kompetisi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Klasemen</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservation">Jadwal</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-section">Kontak</a></li>
                </ul>

                <div class="d-flex align-items-center gap-1">
                    <button id="navSearchBtn" title="Search"><i class="fas fa-search"></i></button>
                    <a href="#blog" class="nav-link nav-cta"><i class="fas fa-newspaper me-1"></i>News</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="searchOv">
        <button class="sovclose" id="searchClose"><i class="fas fa-times"></i></button>

        <div class="sovbox">
            <h4>Mau cari info kompetisi apa hari ini?</h4>

            <div class="sovinput">
                <input type="text" id="searchInput" placeholder="Cari liga, nama klub, atau pemain..."
                    autocomplete="off" />
                <button><i class="fas fa-search"></i></button>
            </div>

            <div class="sovcats">
                <div class="sovcat active" data-cat="all">
                    <i class="fas fa-list-ol me-2" style="font-size: 1.2rem; color: var(--primary);"></i>Semua Data
                </div>
                <div class="sovcat" data-cat="liga1">
                    <img src="{{ asset('img/liga/liga1ind.png') }}" alt="Liga 1" style="object-fit: contain;" />Liga 1
                </div>
                <div class="sovcat" data-cat="epl">
                    <img src="{{ asset('img/liga/premiere.png') }}" alt="EPL" style="object-fit: contain;" />EPL
                </div>
                <div class="sovcat" data-cat="laliga">
                    <img src="{{ asset('img/liga/laliga.png') }}" alt="La Liga" style="object-fit: contain;" />La Liga
                </div>
                <div class="sovcat" data-cat="seriea">
                    <img src="{{ asset('img/liga/seria.png') }}" alt="Serie A" style="object-fit: contain;" />Serie A
                </div>
                <div class="sovcat" data-cat="bundesliga">
                    <img src="{{ asset('img/liga/bundesliga.png') }}" alt="Bundesliga"
                        style="object-fit: contain;" />Bundesliga
                </div>
                <div class="sovcat" data-cat="ucl">
                    <img src="{{ asset('img/liga/ucl.png') }}" alt="UCL" style="object-fit: contain;" />UCL
                </div>
            </div>

            <div class="sovtrend">
                <p><i class="fas fa-fire me-1" style="color:var(--secondary);"></i>Pencarian Populer</p>
                <span class="ttag">Persib Bandung</span>
                <span class="ttag">Real Madrid</span>
                <span class="ttag">Manchester United</span>
                <span class="ttag">Erling Haaland</span>
                <span class="ttag">Jadwal Klasemen</span>
                <span class="ttag">Top Skor UCL</span>
            </div>
        </div>
    </div>

    <section id="hero">
        <div class="hs hs1"></div>
        <div class="hs hs2"></div>
        <div class="hbgtxt">Football</div>

        <div class="container">
            <div class="row align-items-center g-5" style="min-height:88vh;">
                <div class="col-lg-6">
                    <div class="hbadge">
                        <div class="hbi"><i class="fas fa-futbol"></i></div>
                        <span>#1 Sumber Data Statistik Sepak Bola Terakurat</span>
                    </div>

                    <h1 class="htitle">Update <span class="hl">Klasemen</span><br />Liga Sepak Bola</h1>
                    <p class="hdesc" style="max-width: 550px; line-height: 1.6; margin-bottom: 25px;">
                        Pantau perkembangan liga favorit Anda secara real-time. Dari liga domestik hingga kompetisi
                        Eropa - semua statistik lengkap dalam satu genggaman.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-2">
                        <a href="#menu" class="btn-red"><i class="fas fa-list-ol"></i>Lihat Klasemen</a>
                        <a href="#reservation" class="btn-play">
                            <div class="pico"><i class="fas fa-calendar-alt"></i></div>
                            <span>Cek Jadwal</span>
                        </a>
                    </div>

                    <div class="hstats d-flex gap-3 flex-wrap mt-4">
                        <div class="hstat"><span class="snum">50<em>+</em></span><small>Liga Terdata</small></div>
                        <div class="sdiv"></div>
                        <div class="hstat"><span class="snum">1.2k<em>+</em></span><small>Total Klub</small></div>
                        <div class="sdiv"></div>
                        <div class="hstat"><span class="snum">5k<em>+</em></span><small>Data Pemain</small></div>
                        <div class="sdiv"></div>
                        <div class="hstat"><span class="snum">24/7</span><small>Update Data</small></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div style="position:relative;text-align:center;">
                        <div class="hcircle">
                            <img src="{{ asset('img/fbstnd.png') }}" alt="Football" />
                        </div>
                        <div class="fcard fc1">
                            <div class="fcoi r"><i class="fas fa-futbol"></i></div>
                            <div><span class="fcnum">100+</span><span class="fcsm">Match Played</span></div>
                        </div>
                        <div class="fcard fc2">
                            <div class="fcoi y"><i class="fas fa-chart-line"></i></div>
                            <div><span class="fcnum">99%</span><span class="fcsm">Data Accurate</span></div>
                        </div>
                        <div class="fcard fc3">
                            <div class="fcoi g"><i class="fas fa-sync-alt"></i></div>
                            <div><span class="fcnum">Realtime</span><span class="fcsm">Update Score</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mqsec">
        <div class="mqtrack">
            <div class="mqitem"><i class="fas fa-futbol"></i>Premier League</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>La Liga Spanyol</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Serie A Italia</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Bundesliga Jerman</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Ligue 1 Prancis</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Liga 1 Indonesia</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>UEFA Champions League</div>

            <!-- Duplikasi data untuk efek animasi looping marquee yang mulus -->
            <div class="mqitem"><i class="fas fa-futbol"></i>Premier League</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>La Liga Spanyol</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Serie A Italia</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Bundesliga Jerman</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Ligue 1 Prancis</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>Liga 1 Indonesia</div>
            <div class="mqitem"><i class="fas fa-futbol"></i>UEFA Champions League</div>
        </div>
    </div>

    <section id="category">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Pilihan Kompetisi</span>
                <h2 class="stitle">Jelajahi Berdasarkan <span>Liga</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Pilih liga sepak bola favorit Anda untuk melihat
                    klasemen terbaru, statistik klub, and jadwal pertandingan.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="liga1">
                        <img class="catimg" src="{{ asset('img/liga/liga1ind.png') }}" alt="Liga 1"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Liga 1 Indonesia</div>
                        <div class="catct">18 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="epl">
                        <img class="catimg" src="{{ asset('img/liga/premiere.png') }}" alt="EPL"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Premier League</div>
                        <div class="catct">20 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="laliga">
                        <img class="catimg" src="{{ asset('img/liga/laliga.png') }}" alt="La Liga"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">La Liga</div>
                        <div class="catct">20 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="seriea">
                        <img class="catimg" src="{{ asset('img/liga/seria.png') }}" alt="Serie A"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Serie A</div>
                        <div class="catct">20 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="bundesliga">
                        <img class="catimg" src="{{ asset('img/liga/bundesliga.png') }}" alt="Bundesliga"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Bundesliga</div>
                        <div class="catct">18 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="ligue1">
                        <img class="catimg" src="{{ asset('img/liga/ligue1.png') }}" alt="Ligue 1"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Ligue 1</div>
                        <div class="catct">18 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="liga2">
                        <img class="catimg" src="{{ asset('img/liga/liga2ind.png') }}" alt="Liga 2"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Liga 2 Indonesia</div>
                        <div class="catct">26 Klub</div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3" data-aos="zoom-in">
                    <div class="catcard" data-filter="ucl">
                        <img class="catimg" src="{{ asset('img/liga/ucl.png') }}" alt="UCL"
                            style="height:80px; object-fit:contain; margin-bottom:10px;">
                        <div class="catnm">Champions League</div>
                        <div class="catct">Eropa</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="astack">
                        <div class="aexp"><span class="anum">50+</span><small>Liga<br />Terdata</small></div>
                        <div class="amain"><img src="img/lap_std.png" alt="Football Stadium" /></div>
                        <div class="asm"><img src="img/lap_std.png" alt="Football Match" /></div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="slbl">Tentang Kami</span>
                    <h2 class="stitle text-start">Pusat Data & Statistik<br /><span>Sepak Bola Dunia</span></h2>
                    <div class="sline lft"></div>
                    <p class="sdesc mb-4">Kami menyajikan platform informasi sepak bola terlengkap yang mencakup
                        berbagai kompetisi top global hingga liga domestik secara akurat. Didesain khusus untuk para
                        penggemar sepak bola yang membutuhkan data cepat, mendalam, dan selalu diperbarui.</p>

                    <div class="mb-4">
                        <div class="fti">
                            <div class="ftico r"><i class="fas fa-futbol"></i></div>
                            <div>
                                <h6>Cakupan Kompetisi Luas</h6>
                                <p>Menyajikan data dari Premier League, La Liga, Serie A, hingga Liga 1 Indonesia secara
                                    simultan.</p>
                            </div>
                        </div>

                        <div class="fti">
                            <div class="ftico y"><i class="fas fa-trophy"></i></div>
                            <div>
                                <h6>Klasemen & Skor Realtime</h6>
                                <p>Setiap perubahan skor hasil pertandingan akan langsung mengalkulasi poin and
                                    memperbarui posisi klasemen secara otomatis.</p>
                            </div>
                        </div>

                        <div class="fti">
                            <div class="ftico g"><i class="fas fa-chart-line"></i></div>
                            <div>
                                <h6>Statistik Mendalam Individu</h6>
                                <p>Pantau performa pemain favorit Anda mulai dari perolehan top skor, assist, hingga
                                    akumulasi kartu per pertandingan.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#category" class="btn-red"><i class="fas fa-search"></i>Jelajahi Semua Liga</a>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Pilihan Kompetisi</span>
                <h2 class="stitle">Jelajahi Berdasarkan <span>Liga</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Pilih liga sepak bola favorit Anda untuk melihat
                    klasemen terbaru, statistik klub, dan jadwal pertandingan.</p>
            </div>

            <div class="text-center mb-4" data-aos="fade-up">
                <button class="filtbtn active" data-f="all">Semua Liga</button>
                <button class="filtbtn" data-f="liga1">Liga 1 Indonesia</button>
                <button class="filtbtn" data-f="epl">Premier League</button>
                <button class="filtbtn" data-f="laliga">La Liga</button>
                <button class="filtbtn" data-f="seriea">Serie A</button>
                <button class="filtbtn" data-f="bundesliga">Bundesliga</button>
                <button class="filtbtn" data-f="ligue1">Ligue 1</button>
                <button class="filtbtn" data-f="liga2">Liga 2 Indonesia</button>
                <button class="filtbtn" data-f="ucl">Champions League</button>
            </div>

            <div class="row g-4" id="mgrid">
                <div class="col-sm-6 col-lg-4 mwrap" data-c="epl" data-aos="fade-up">
                    <div class="mcard" data-img="{{ asset('img/liga/premiere.png') }}"
                        data-title="Manchester United" data-cat="Premier League" data-price="3 Poin"
                        data-old="Rank 1" data-rating="5.0" data-reviews="EPL" data-cal="20" data-time="1878"
                        data-desc="Manchester United Football Club adalah klub sepak bola profesional yang berbasis di Old Trafford, Greater Manchester, Inggris. Berkompetisi di Premier League dan memiliki sejarah panjang sebagai salah satu klub tersukses di dunia."
                        data-tags="Top Klub, Manchester, Inggris">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/premiere.png') }}" alt="Manchester United"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">Premier League</div>
                            <div class="mtit">Manchester United</div>
                            <div class="mdesc">Stadion: Old Trafford | Pelatih: Ruben Amorim</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 1</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="liga1" data-aos="fade-up" data-aos-delay="40">
                    <div class="mcard" data-img="{{ asset('img/liga/liga1ind.png') }}" data-title="Persib Bandung"
                        data-cat="Liga 1 Indonesia" data-price="3 Poin" data-old="Rank 1" data-rating="4.9"
                        data-reviews="LIGA1" data-cal="19" data-time="1933"
                        data-desc="Persatuan Sepakbola Indonesia Bandung adalah klub sepak bola profesional Indonesia yang berbasis di Bandung, Jawa Barat. Berkompetisi di kasta tertinggi Liga 1 Indonesia dan bermarkas di Stadion Gelora Bandung Lautan Api."
                        data-tags="Top Klub, Bandung, Indonesia">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/liga1ind.png') }}" alt="Persib Bandung"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">Liga 1 Indonesia</div>
                            <div class="mtit">Persib Bandung</div>
                            <div class="mdesc">Stadion: GBLA | Pelatih: Bojan Hodak</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 1</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="laliga" data-aos="fade-up" data-aos-delay="80">
                    <div class="mcard" data-img="{{ asset('img/liga/laliga.png') }}" data-title="Real Madrid"
                        data-cat="La Liga" data-price="3 Poin" data-old="Rank 2" data-rating="5.0"
                        data-reviews="LALIGA" data-cal="36" data-time="100"
                        data-desc="Real Madrid Club de Fútbol adalah klub sepak bola profesional asal Madrid, Spanyol. Menjadi salah satu kekuatan terbesar di dunia dengan koleksi gelar Liga Champions Eropa terbanyak sepanjang sejarah sepak bola."
                        data-tags="Raja Eropa, Madrid, Spanyol">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/laliga.png') }}" alt="Real Madrid"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">La Liga</div>
                            <div class="mtit">Real Madrid</div>
                            <div class="mdesc">Stadion: Santiago Bernabéu | Pelatih: Carlo Ancelotti</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 2</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="seriea" data-aos="fade-up" data-aos-delay="120">
                    <div class="mcard" data-img="{{ asset('img/liga/seria.png') }}" data-title="Juventus"
                        data-cat="Serie A" data-price="1 Poin" data-old="Rank 3" data-rating="4.7"
                        data-reviews="SERIEA" data-cal="36" data-time="1897"
                        data-desc="Juventus Football Club adalah klub sepak bola profesional asal Turin, Italia. Dikenal dengan julukan 'I Bianconeri' dan memegang rekor sebagai pemilik gelar scudetto Serie A terbanyak di tanah Italia."
                        data-tags="Bianconeri, Turin, Italia">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/seria.png') }}" alt="Juventus"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">Serie A</div>
                            <div class="mtit">Juventus</div>
                            <div class="mdesc">Stadion: Allianz Stadium | Pelatih: Thiago Motta</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">1 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 3</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="bundesliga" data-aos="fade-up" data-aos-delay="160">
                    <div class="mcard" data-img="{{ asset('img/liga/bundesliga.png') }}"
                        data-title="Bayern Munchen" data-cat="Bundesliga" data-price="0 Poin" data-old="Rank 4"
                        data-rating="4.8" data-reviews="BUNDESLIGA" data-cal="33" data-time="1900"
                        data-desc="FC Bayern München adalah klub olahraga profesional Jerman yang berbasis di Munich, Bavaria. Klub ini paling terkenal with tim sepak bola profesionalnya, yang bermain di Bundesliga dan menjadi penguasa gelar domestik terbanyak di Jerman."
                        data-tags="Die Roten, Munich, Jerman">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/bundesliga.png') }}" alt="Bayern Munchen"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">Bundesliga</div>
                            <div class="mtit">Bayern Munchen</div>
                            <div class="mdesc">Stadion: Allianz Arena | Pelatih: Vincent Kompany</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">0 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 4</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="ligue1" data-aos="fade-up" data-aos-delay="200">
                    <div class="mcard" data-img="{{ asset('img/liga/ligue1.png') }}"
                        data-title="Paris Saint-Germain" data-cat="Ligue 1" data-price="3 Poin" data-old="Rank 1"
                        data-rating="4.6" data-reviews="LIGUE1" data-cal="12" data-time="1970"
                        data-desc="Paris Saint-Germain Football Club adalah klub sepak bola profesional yang berbasis di Paris, Prancis. Berkompetisi di Ligue 1, mereka merupakan klub paling sukses di Prancis dalam sejarah sepak bola modern."
                        data-tags="Les Parisiens, Paris, Prancis">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/ligue1.png') }}" alt="PSG"
                                style="padding: 20px; object-fit: contain; height: 220px;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">Ligue 1</div>
                            <div class="mtit">Paris Saint-Germain</div>
                            <div class="mdesc">Stadion: Parc des Princes | Pelatih: Luis Enrique</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 1</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="liga2" data-aos="fade-up" data-aos-delay="240">
                    <div class="mcard" data-img="{{ asset('img/liga/liga2ind.png') }}"
                        data-title="Persipura Jayapura" data-cat="Liga 2 Indonesia" data-price="3 Poin"
                        data-old="Rank 2" data-rating="4.8" data-reviews="LIGA2" data-cal="4" data-time="1963"
                        data-desc="Persatuan Sepakbola Jayapura adalah klub sepak bola profesional Indonesia yang berbasis di Jayapura, Papua. Memiliki sejarah emas legendaris di kancah tertinggi sepak bola Indonesia dan kini berjuang di Liga 2."
                        data-tags="Mutiara Hitam, Jayapura, Papua">

                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/liga2ind.png') }}" alt="Persipura Jayapura"
                                style="padding: 10px; object-fit: contain; height: 130px; width: auto; margin: 0 auto;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>

                        <div class="mbody">
                            <div class="mcat">Liga 2 Indonesia</div>
                            <div class="mtit">Persipura Jayapura</div>
                            <div class="mdesc">Stadion: Mandala | Pelatih: Ricardo Salampessy</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 2</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mwrap" data-c="ucl" data-aos="fade-up" data-aos-delay="280">
                    <div class="mcard" data-img="{{ asset('img/liga/ucl.png') }}" data-title="Manchester City"
                        data-cat="UEFA Champions League" data-price="3 Poin" data-old="Rank 1" data-rating="5.0"
                        data-reviews="UCL" data-cal="0" data-time="1880"
                        data-desc="Manchester City Football Club adalah klub sepak bola profesional asal Manchester, Inggris. Berkompetisi di kasta tertinggi Eropa dan dikenal dengan gaya permainan taktis dominan di bawah asuhan Pep Guardiola."
                        data-tags="Cityzens, Manchester, Eropa">
                        <div class="mimg"
                            style="text-align: center; display: flex; align-items: center; justify-content: center; min-height: 220px;">
                            <img src="{{ asset('img/liga/ucl.png') }}" alt="Manchester City"
                                style="padding: 10px; object-fit: contain; height: 130px; width: auto; margin: 0 auto;" />
                            <div class="mbdg hot"><i class="fas fa-fire"></i>Top of the Table</div>
                            <div class="mhrt"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="mbody">
                            <div class="mcat">UEFA Champions League</div>
                            <div class="mtit">Manchester City</div>
                            <div class="mdesc">Stadion: Etihad Stadium | Pelatih: Pep Guardiola</div>
                            <div class="mfoot">
                                <div>
                                    <div class="mprice">3 Poin</div>
                                    <div class="mstars">
                                        <i class="fas fa-trophy" style="color: var(--secondary);"></i>
                                        <span style="color:#bbb;font-size:.7rem;">Rank 1</span>
                                    </div>
                                </div>
                                <button class="madd" title="Lihat Detail Klub"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#category" class="btn-red">
                    <i class="fas fa-th-large"></i> Lihat Semua Klub
                </a>
            </div>
        </div>
    </section>

    <div id="menuPop">
        <div class="mpbox">
            <button class="mpclose" id="mpClose"><i class="fas fa-times"></i></button>

            <div class="mpimg"
                style="display: flex; align-items: center; justify-content: center; background: #fff; padding: 30px;">
                <img id="mpImg" src="" alt=""
                    style="max-height: 200px; width: auto; object-fit: contain; margin: 0 auto;" />
            </div>

            <div class="mpbody">
                <div id="mpCat"></div>
                <div id="mpTitle"></div>
                <div id="mpStars"></div>
                <div id="mpDesc"></div>
                <div id="mpPrice"></div>

                <div class="mpmeta" id="mpMeta"></div>

                <div class="mpqty" style="display: none;">
                    <button class="mpqbtn" id="mpMinus">-</button>
                    <span class="mpqnum" id="mpQnum">1</span>
                    <button class="mpqbtn" id="mpPlus">+</button>
                    <span>portion</span>
                </div>

                <div class="mptags" id="mpTags"></div>

                <button class="mpaddcart" id="mpAddCart"><i class="fas fa-heart"></i> Ikuti Klub</button>
            </div>
        </div>
    </div>

    <section id="special">
        <div class="spbg"></div>
        <div class="container" style="position:relative;z-index:2;">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="sptag"><i class="fas fa-futbol me-1"></i>Pertandingan Mendatang</div>
                    <h2 class="sptitle">Jangan Lewatkan<br />Laga Sengit Big Match<br /><span>Super Big Match</span>
                    </h2>
                    <p class="spdesc">Saksikan pertarungan panas perebutan puncak klasemen liga. Pantau terus jadwal
                        pertandingan, susunan pemain, dan statistik realtime langsung dari portal kami.</p>

                    <div class="cdwrap">
                        <div class="cditem"><span class="cdnum" id="cdH">08</span><span
                                class="cdlbl">Jam</span></div>
                        <div class="cditem"><span class="cdnum" id="cdM">45</span><span
                                class="cdlbl">Menit</span></div>
                        <div class="cditem"><span class="cdnum" id="cdS">30</span><span
                                class="cdlbl">Detik</span></div>
                    </div>
                    <a href="#reservation" class="btn-red"><i class="fas fa-calendar-alt"></i> Lihat Jadwal
                        Lengkap</a>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="spimgw">
                        <div class="spglow"></div>
                        <div class="sppbdg"><span class="old">VS</span><span class="np">LIVE</span></div>
                        <img src="{{ asset('img/bigmatch.png') }}" alt="Special Match Banner"
                            class="img-fluid rounded-4" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Kompetisi Utama</span>
                <h2 class="stitle">Jelajahi Galeri <span>Liga Sepak Bola</span></h2>
                <div class="sline"></div>
            </div>

            <div class="ggrid" data-aos="fade-up">
                <div class="gitem" data-gi="0" data-gimg="{{ asset('img/portfolio/bundesliga.jpg') }}"
                    data-gtitle="Bundesliga"
                    data-gdesc="Kompetisi sepak bola profesional kasta tertinggi di Jerman yang diikuti oleh 18 klub top dunia.">
                    <img src="{{ asset('img/portfolio/bundesliga.jpg') }}" alt="Bundesliga" />
                    <div class="gover"><span><i class="fas fa-expand-alt"></i> Bundesliga</span></div>
                </div>

                <div class="gitem" data-gi="1" data-gimg="{{ asset('img/portfolio/laliga.jpg') }}"
                    data-gtitle="La Liga"
                    data-gdesc="Kasta tertinggi liga sepak bola profesional di Spanyol, tempat
                    bernaungnya klub-klub raksasa Eropa.">
                    <img src="{{ asset('img/portfolio/laliga.jpg') }}" alt="La Liga" />
                    <div class="gover"><span><i class="fas fa-expand-alt"></i> La Liga</span></div>
                </div>

                <div class="gitem" data-gi="2" data-gimg="{{ asset('img/portfolio/liga1in.jpg') }}"
                    data-gtitle="Liga 1 Indonesia"
                    data-gdesc="Kompetisi sepak bola kasta tertinggi di Indonesia yang penuh dengan atmosfer persaingan ketat dan fanatisme suporter.">
                    <img src="{{ asset('img/portfolio/liga1in.jpg') }}" alt="Liga 1 Indonesia" />
                    <div class="gover"><span><i class="fas fa-expand-alt"></i> Liga 1 Indonesia</span></div>
                </div>

                <div class="gitem" data-gi="3" data-gimg="{{ asset('img/portfolio/liga2in.jpg') }}"
                    data-gtitle="Liga 2 Indonesia"
                    data-gdesc="Kompetisi sepak bola profesional kasta kedua di Indonesia yang menjadi jembatan perjuangan klub-klub daerah menuju kasta tertinggi.">
                    <img src="{{ asset('img/portfolio/liga2in.jpg') }}" alt="Liga 2 Indonesia" />
                    <div class="gover"><span><i class="fas fa-expand-alt"></i> Liga 2 Indonesia</span></div>
                </div>

                <div class="gitem" data-gi="4" data-gimg="{{ asset('img/portfolio/ligue1.jpg') }}"
                    data-gtitle="Ligue 1"
                    data-gdesc="Kompetisi sepak bola profesional kasta tertinggi di Prancis yang mempertemukan klub-klub elite bertabur bintang Eropa.">
                    <img src="{{ asset('img/portfolio/ligue1.jpg') }}" alt="Ligue 1" />
                    <div class="gover"><span><i class="fas fa-expand-alt"></i> Ligue 1</span></div>
                </div>
            </div>
        </div>
    </section>

    <div id="galPop">
        <div class="gpbox">
            <button class="gpclose" id="gpClose"><i class="fas fa-times"></i></button>
            <img id="gpImg" src="" alt="" />
            <div class="gpcap">
                <h5 id="gpTitle"></h5>
                <p id="gpDesc"></p>
            </div>
            <div class="gpnav">
                <button id="gpPrev"><i class="fas fa-chevron-left me-1"></i>Prev</button>
                <button id="gpNext">Next <i class="fas fa-chevron-right ms-1"></i></button>
            </div>
        </div>
    </div>

    <section id="history">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Lini Masa Sejarah</span>
                <h2 class="stitle">Perjalanan <span>Sepak Bola Dunia</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Dari awal mula terbentuknya aturan modern hingga era
                    digitalisasi statistik sepak bola modern saat ini.</p>
            </div>

            <div class="timeline" data-aos="fade-up">
                <div class="tli">
                    <div class="tl-left">
                        <div class="tlyear">1863</div>
                        <h5>Lahirnya Aturan Sepak Bola Modern</h5>
                        <p>Asosiasi Sepak Bola Inggris (FA) resmi didirikan di London, merumuskan standarisasi aturan
                            permainan baku pertama kali di dunia.</p>
                    </div>
                    <div class="tl-center">
                        <div class="tldot"></div>
                    </div>
                    <div class="tl-right">
                        <div class="tlyear">1904</div>
                        <h5>Pembentukan FIFA Global</h5>
                        <p>Federasi Sepak Bola Internasional (FIFA) resmi didirikan di Paris untuk menaungi perserikatan
                            olahraga sepak bola antarnegara.</p>
                    </div>
                </div>

                <div class="tli">
                    <div class="tl-left">
                        <div class="tlyear">1930</div>
                        <h5>Piala Dunia FIFA Pertama</h5>
                        <p>Turnamen akbar Piala Dunia FIFA pertama kali diselenggarakan di Uruguay, menandai dominasi
                            sepak bola sebagai olahraga terpopuler sejagat.</p>
                    </div>
                    <div class="tl-center">
                        <div class="tldot"></div>
                    </div>
                    <div class="tl-right">
                        <div class="tlyear">1930</div>
                        <h5>Konteks Nasional (PSSI)</h5>
                        <p>Di tahun yang sama, Persatuan Sepakbola Seluruh Indonesia (PSSI) dibentuk di Yogyakarta untuk
                            merajut persatuan bangsa lewat olahraga.</p>
                    </div>
                </div>

                <div class="tli">
                    <div class="tl-left">
                        <div class="tlyear">1992</div>
                        <h5>Era Baru Premier League & UCL</h5>
                        <p>Format modern Premier League Inggris dan UEFA Champions League resmi diperkenalkan, memulai
                            era industri sepak bola modern berskala besar.</p>
                    </div>
                    <div class="tl-center">
                        <div class="tldot"></div>
                    </div>
                    <div class="tl-right">
                        <div class="tlyear">1994</div>
                        <h5>Penyatuan Liga Indonesia</h5>
                        <p>Kompetisi Galatama dan Perserikatan resmi dilebur menjadi satu wadah kompetisi profesional
                            tunggal, yaitu Liga Indonesia.</p>
                    </div>
                </div>

                <div class="tli">
                    <div class="tl-left">
                        <div class="tlyear">2026</div>
                        <h5>Era Digitalisasi Data Statistik</h5>
                        <p>Integrasi teknologi analisis data digital pintar digunakan penuh untuk menyajikan statistik
                            klasemen, performa pemain, dan hasil pertandingan secara realtime.</p>
                    </div>
                    <div class="tl-center">
                        <div class="tldot"></div>
                    </div>
                    <div class="tl-right">
                        <div class="tlyear">2026</div>
                        <h5>Era Digitalisasi Data Statistik</h5>
                        <p>Integrasi teknologi analisis data digital pintar digunakan penuh untuk menyajikan statistik
                            klasemen, performa pemain, dan hasil pertandingan secara realtime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="player">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Performa Individu</span>
                <h2 class="stitle">Pemain Bintang <span>Sorotan Dunia</span></h2>
                <div class="sline"></div>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="img/player/haland.jpg" alt="Erling Haaland" />
                            <div class="chsoc">
                                <a href="https://www.instagram.com/erling?igsh=MWYwemZtNGt1Mjh5YQ==" target="_blank"
                                    rel="noopener noreferrer" title="Instagram Erling Haaland">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Erling Haaland</div>
                            <div class="chrole">Penyerang (Striker)</div>
                            <div class="chexp">Manchester City | 35 Gol</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="img/player/mbappe.jpg" alt="Kylian Mbappe" />
                            <div class="chsoc">
                                <a href="https://www.instagram.com/k.mbappe?igsh=MWNyaXFrN3V6Y2R3cg==" target="_blank"
                                    rel="noopener noreferrer" title="Instagram Kylian Mbappé">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Kylian Mbappé</div>
                            <div class="chrole">Penyerang Sayap (Winger)</div>
                            <div class="chexp">Real Madrid | 28 Gol</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="img/player/kevinde.jpg" alt="Kevin De Bruyne" />
                            <div class="chsoc">
                                <a href="https://www.instagram.com/kevindebruyne?igsh=MWwyOXZlNWhya2hubw=="
                                    target="_blank" rel="noopener noreferrer" title="Instagram Kevin De Bruyne">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Kevin De Bruyne</div>
                            <div class="chrole">Gelandang (Midfielder)</div>
                            <div class="chexp">Manchester City | 18 Assist</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="img/player/belingham.jpg" alt="Jude Bellingham" />
                            <div class="chsoc">
                                <a href="https://www.instagram.com/judebellingham?igsh=NjV0eW8yZWswZzFi"
                                    target="_blank" rel="noopener noreferrer" title="Instagram Jude Bellingham">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Jude Bellingham</div>
                            <div class="chrole">Gelandang Serang (AMF)</div>
                            <div class="chexp">Real Madrid | 15 Gol</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Berita &amp; Update</span>
                <h2 class="stitle">Kabar Terkini <span>Sepak Bola Dunia</span></h2>
                <div class="sline"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="blcard">
                        <div class="blimg">
                            <img src="img/blog/eropa.jpg" alt="Liga Top Eropa" />
                            <div class="bldatebdg"><span class="bd">08</span><span class="bm">Jun</span>
                            </div>
                        </div>
                        <div class="blbody">
                            <div class="bltag">Sepak Bola Eropa</div>
                            <div class="bltit">
                                <a href="#">Persaingan Sengit Perebutan Takhta Juara Liga Elite Benua Biru</a>
                            </div>
                            <div class="blmeta mb-3">
                                <span class="me-2"><i class="fas fa-globe-europe me-1"></i>Situs Resmi Liga:</span>
                                <div class="d-flex flex-wrap gap-2 mt-2">
                                    <a href="https://www.premierleague.com" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-white p-2"
                                        style="background-color: #3d195a; font-weight: 700; border-radius: 8px;">EPL</a>

                                    <a href="https://www.laliga.com" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-white p-2"
                                        style="background-color: #e21a22; font-weight: 700; border-radius: 8px;">La
                                        Liga</a>

                                    <a href="https://www.legaseriea.it" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-white p-2"
                                        style="background-color: #0073af; font-weight: 700; border-radius: 8px;">Serie
                                        A</a>

                                    <a href="https://www.bundesliga.com" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-white p-2"
                                        style="background-color: #df0000; font-weight: 700; border-radius: 8px;">Bundesliga</a>

                                    <a href="https://www.ligue1.com" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-dark p-2"
                                        style="background-color: #dae600; font-weight: 700; border-radius: 8px;">Ligue
                                        1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="blcard">
                        <div class="blimg">
                            <img src="img/blog/nasional.jpg" alt="Liga Indonesia" />
                            <div class="bldatebdg"><span class="bd">08</span><span class="bm">Jun</span>
                            </div>
                        </div>
                        <div class="blbody">
                            <div class="bltag">Sepak Bola Nasional</div>
                            <div class="bltit">
                                <a href="#">Geliat Kompetisi Tanah Air: Perjuangan dan Fanatisme Tanpa Batas</a>
                            </div>
                            <div class="blmeta mb-3">
                                <span class="me-2"><i class="fas fa-globe-europe me-1"></i>Situs Resmi Liga:</span>
                                <div class="d-flex flex-wrap gap-2 mt-2">
                                    <a href="https://ligaindonesiabaru.com" target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-white p-2"
                                        style="background-color: #e8281a; font-weight: 700; border-radius: 8px;">Liga 1
                                        Indonesia</a>

                                    <a href="https://www.ligaindonesiabaru.com/home/index/PEGADAIAN_CHAMPIONSHIP_2025-26"
                                        target="_blank" rel="noopener noreferrer"
                                        class="badge text-decoration-none text-dark p-2"
                                        style="background-color: #b9f11f; font-weight: 700; border-radius: 8px;">Liga 2
                                        Indonesia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="blcard">
                        <div class="blimg">
                            <img src="img/blog/ucl.jpg" alt="UEFA Champions League" />
                            <div class="bldatebdg"><span class="bd">07</span><span class="bm">Jun</span>
                            </div>
                        </div>
                        <div class="blbody">
                            <div class="bltag">UEFA Champions League</div>
                            <div class="bltit">
                                <a href="https://www.uefa.com/uefachampionsleague/" target="_blank"
                                    rel="noopener noreferrer">Malam Keramat UCL: Ambisi Klub-Klub Raksasa Meraih Si
                                    Kuping Besar</a>
                            </div>
                            <div class="blmeta mb-3">
                                <span class="me-2"><i class="fas fa-globe-europe me-1"></i>Situs Resmi
                                    Liga:</span>
                                <div class="mt-2">
                                    <a href="https://www.uefa.com/uefancy" target="_blank"
                                        rel="noopener noreferrer" class="badge text-white font-weight-bold"
                                        style="background-color: var(--primary, #e8281a); font-size: 0.85rem; padding: 10px 15px; border-radius: 8px; display: inline-block; text-decoration: none;">
                                        Kunjungi Portal UCL
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================= -->
    <!-- PERBAIKAN TOTAL SEKSI JADWAL PERTANDINGAN (#reservation)           -->
    <!-- ================================================================= -->
    <section id="reservation" class="py-5"
        style="background-color: #f9f9f9; border-top: 1px solid #eee; overflow: hidden; position: relative; z-index: 1;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Agenda Pertandingan</span>
                <h2 class="stitle">Jadwal <span>Big Match Live</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Pantau jadwal siaran langsung pertandingan sepak
                    bola dari liga-liga top dunia agar tidak ketinggalan aksi klub favorit Anda.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <!-- MENGGANTI KELAS FCARD KAKU DENGAN INLINE-STYLE UNTUK MENGUNCI TINGGI ELEMEN SECARA DINAMIS -->
                    <div
                        style="width: 100%; max-width: 100%; box-sizing: border-box; background-color: #ffffff; border-radius: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 30px; display: block; overflow: hidden;">

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 pb-3"
                            style="border-bottom: 2px solid #f1f1f1;">
                            <h5 class="mb-0 font-weight-bold text-dark"><i class="fas fa-calendar-day me-2"
                                    style="color: var(--primary, #e8281a);"></i>Jadwal Minggu Ini</h5>
                            <span class="badge bg-danger text-white font-weight-bold px-3 py-2"
                                style="border-radius: 6px;">LIVE 24/7</span>
                        </div>

                        <div class="table-responsive"
                            style="width: 100%; -webkit-overflow-scrolling: touch; overflow-x: auto;">
                            <table class="table table-hover align-middle mb-0"
                                style="min-width: 600px; width: 100%;">
                                <thead style="background-color: #f8f9fa;">
                                    <tr>
                                        <th scope="col"
                                            style="border: none; padding: 15px; color: #555; font-weight: 700; width: 25%;">
                                            Kompetisi</th>
                                        <th scope="col" class="text-end"
                                            style="border: none; padding: 15px; color: #555; font-weight: 700; width: 30%;">
                                            Klub Kandang</th>
                                        <th scope="col" class="text-center"
                                            style="border: none; padding: 15px; color: #555; font-weight: 700; width: 10%;">
                                            VS</th>
                                        <th scope="col" class="text-start"
                                            style="border: none; padding: 15px; color: #555; font-weight: 700; width: 30%;">
                                            Klub Tandang</th>
                                        <th scope="col" class="text-center"
                                            style="border: none; padding: 15px; color: #555; font-weight: 700; width: 5%;">
                                            Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #3d195a; border-bottom: 1px solid #eee;">
                                            <i class="fas fa-circle me-1"
                                                style="font-size: 0.5rem; color: #3d195a;"></i> Premier League
                                        </td>
                                        <td class="text-end"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: 1px solid #eee;">
                                            Manchester United</td>
                                        <td class="text-center"
                                            style="padding: 15px; border-bottom: 1px solid #eee;"><span
                                                class="badge bg-light text-dark font-weight-bold border px-3 py-1">VS</span>
                                        </td>
                                        <td class="text-start"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: 1px solid #eee;">
                                            Manchester City</td>
                                        <td class="text-center"
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #666; border-bottom: 1px solid #eee; white-space: nowrap;">
                                            Sabtu, 21:00 WIB</td>
                                    </tr>

                                    <tr>
                                        <td
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #e21a22; border-bottom: 1px solid #eee;">
                                            <i class="fas fa-circle me-1"
                                                style="font-size: 0.5rem; color: #e21a22;"></i> La Liga Spanyol
                                        </td>
                                        <td class="text-end"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: 1px solid #eee;">
                                            Real Madrid</td>
                                        <td class="text-center"
                                            style="padding: 15px; border-bottom: 1px solid #eee;"><span
                                                class="badge bg-light text-dark font-weight-bold border px-3 py-1">VS</span>
                                        </td>
                                        <td class="text-start"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: 1px solid #eee;">
                                            Barcelona</td>
                                        <td class="text-center"
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #666; border-bottom: 1px solid #eee; white-space: nowrap;">
                                            Minggu, 02:00 WIB</td>
                                    </tr>

                                    <tr>
                                        <td
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #e8281a; border-bottom: none;">
                                            <i class="fas fa-circle me-1"
                                                style="font-size: 0.5rem; color: #e8281a;"></i> Liga 1 Indonesia
                                        </td>
                                        <td class="text-end"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: none;">
                                            Persib Bandung</td>
                                        <td class="text-center" style="padding: 15px; border-bottom: none;"><span
                                                class="badge bg-light text-dark font-weight-bold border px-3 py-1">VS</span>
                                        </td>
                                        <td class="text-start"
                                            style="padding: 15px; font-weight: 700; color: #222; border-bottom: none;">
                                            Persija Jakarta</td>
                                        <td class="text-center"
                                            style="padding: 15px; font-size: 0.85rem; font-weight: 600; color: #666; border-bottom: none; white-space: nowrap;">
                                            Minggu, 15:30 WIB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================= -->
    <!-- SEKSI HUBUNGI PENGEMBANG (#contact-section)                       -->
    <!-- ================================================================= -->
    <section id="contact-section" class="py-5"
        style="background-color: #ffffff; position: relative; z-index: 1;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Hubungi Kami</span>
                <h2 class="stitle">Hubungi <span>Pengembang</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Memiliki pertanyaan, kerja sama penambahan data
                    kompetisi, atau memerlukan bantuan teknis? Hubungi kami langsung.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 mb-4" data-aos="fade-up">
                    <div class="ctdark p-4 p-md-5"
                        style="width: 100%; box-sizing: border-box; border-radius: 18px;">
                        <h4>Mari Berdiskusi</h4>
                        <p class="ctsub mb-4">Tim administrasi kami akan merespons pesan Anda dalam waktu maksimal 2
                            jam.</p>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="ctitem d-flex align-items-start gap-3">
                                    <div class="cticon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="ctinfo"><strong>Alamat</strong><span>Kecamatan Wonosari, Desa
                                            Sumberdem,<br />Kabupaten Malang, Jawa Timur</span></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ctitem d-flex align-items-start gap-3">
                                    <div class="cticon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="ctinfo"><strong>Telepon</strong><span>+62 812-3456-7890</span></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ctitem d-flex align-items-start gap-3">
                                    <div class="cticon"><i class="fas fa-envelope"></i></div>
                                    <div class="ctinfo"><strong>Email</strong><span>support@footballproject.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ctitem d-flex align-items-start gap-3">
                                    <div class="cticon"><i class="fas fa-clock"></i></div>
                                    <div class="ctinfo"><strong>Jam Kerja</strong><span>Senin - Minggu: 09:00 - 21:00
                                            WIB</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================= -->
    <!-- AREA FOOTER HALAMAN UTAMA                                         -->
    <!-- ================================================================= -->
    <footer
        style="background-color: #111111; color: #ffffff; padding: 60px 0 0 0; overflow: hidden; position: relative; z-index: 2; clear: both;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="fnm" style="color: #ffffff;">Foot<span
                            style="color: var(--secondary, #f2a900);">ball</span></div>
                    <p class="fdesc" style="color: #b0b0b0;">Pusat data statistik dan klasemen sepak bola dunia
                        terlengkap. Menyajikan data akurat, mutakhir, dan realtime untuk mendukung efisiensi sistem
                        informasi olahraga modern.</p>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="ftit" style="color: #ffffff; font-weight: 700; margin-bottom: 20px;">Tautan Pintas
                    </div>
                    <ul class="flinks ps-0">
                        <li><a href="#hero" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Beranda</a></li>
                        <li><a href="#category" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right refresh me-2"></i>Liga & Kompetisi</a></li>
                        <li><a href="#menu" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Klasemen</a></li>
                        <li><a href="#reservation" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Jadwal</a></li>
                        <li><a href="#blog" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Berita</a></li>
                        <li><a href="#contact-section" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Kontak</a></li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="ftit" style="color: #ffffff; font-weight: 700; margin-bottom: 20px;">Kompetisi
                        Utama</div>
                    <ul class="flinks ps-0">
                        <li><a href="#menu" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Premier League</a></li>
                        <li><a href="#menu" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>La Liga Spanyol</a></li>
                        <li><a href="#menu" style="color: #b0b0b0; text-decoration: none;"><i
                                    class="fas fa-chevron-right me-2"></i>Serie A Italia</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="ftit" style="color: #ffffff; font-weight: 700; margin-bottom: 20px;">Hubungi Kami
                    </div>

                    <div class="fci mb-3 d-flex flex-column flex-sm-row align-items-start gap-3">
                        <div class="fciico"
                            style="color: var(--secondary, #f2a900); font-size: 1.2rem; flex-shrink: 0; padding-top: 2px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="fciinfo" style="color: #b0b0b0; word-break: break-word;"><strong
                                style="color: #fff; display: block; margin-bottom: 2px;">Alamat Markas</strong>Desa
                            Sumberdem, Wonosari, Malang</div>
                    </div>

                    <div class="fci mb-3 d-flex flex-column flex-sm-row align-items-start gap-3">
                        <div class="fciico"
                            style="color: var(--secondary, #f2a900); font-size: 1.2rem; flex-shrink: 0; padding-top: 2px;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="fciinfo" style="color: #b0b0b0; word-break: break-word;"><strong
                                style="color: #fff; display: block; margin-bottom: 2px;">Hubungi Admin</strong>+62
                            812-3456-7890</div>
                    </div>

                    <div class="fci mb-3 d-flex flex-column flex-sm-row align-items-start gap-3">
                        <div class="fciico"
                            style="color: var(--secondary, #f2a900); font-size: 1.2rem; flex-shrink: 0; padding-top: 2px;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="fciinfo" style="color: #b0b0b0; word-break: break-word;"><strong
                                style="color: #fff; display: block; margin-bottom: 2px;">Email
                                Resmi</strong>support@footballproject.com</div>
                    </div>

                    <div class="fci mb-3 d-flex flex-column flex-sm-row align-items-start gap-3">
                        <div class="fciico"
                            style="color: var(--secondary, #f2a900); font-size: 1.2rem; flex-shrink: 0; padding-top: 2px;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="fciinfo" style="color: #b0b0b0; word-break: break-word;"><strong
                                style="color: #fff; display: block; margin-bottom: 2px;">Sistem Monitor</strong>24/7
                            Update Otomatis</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fbot mt-5" style="background-color: #0a0a0a; padding: 20px 0; border-top: 1px solid #222;">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <p style="color: #888; margin: 0; font-size: 0.85rem;">&copy; 2026 <span>Football Project</span>.
                        All Rights Reserved. Dikembangkan oleh <strong style="color: #fff;">Dede Dikri</strong> untuk
                        Pengelolaan Data Digital.</p>
                    <div class="d-flex flex-wrap gap-3" style="font-size: 0.85rem;">
                        <a href="#" style="color: #888; text-decoration: none;">Privacy Policy</a>
                        <a href="#" style="color: #888; text-decoration: none;">Terms of Service</a>
                        <a href="#" style="color: #888; text-decoration: none;">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i
            class="fas fa-chevron-up"></i></button>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
