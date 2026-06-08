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
                <div class="mcard" data-img="{{ asset('img/liga/premiere.png') }}" data-title="Manchester United"
                    data-cat="Premier League" data-price="3 Poin" data-old="Rank 1" data-rating="5.0" data-reviews="EPL"
                    data-cal="20" data-time="1878"
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
                <div class="mcard" data-img="{{ asset('img/liga/bundesliga.png') }}" data-title="Bayern Munchen"
                    data-cat="Bundesliga" data-price="0 Poin" data-old="Rank 4" data-rating="4.8"
                    data-reviews="BUNDESLIGA" data-cal="33" data-time="1900"
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
                <div class="mcard" data-img="{{ asset('img/liga/ligue1.png') }}" data-title="Paris Saint-Germain"
                    data-cat="Ligue 1" data-price="3 Poin" data-old="Rank 1" data-rating="4.6"
                    data-reviews="LIGUE1" data-cal="12" data-time="1970"
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
                <div class="mcard" data-img="{{ asset('img/liga/liga2ind.png') }}" data-title="Persipura Jayapura"
                    data-cat="Liga 2 Indonesia" data-price="3 Poin" data-old="Rank 2" data-rating="4.8"
                    data-reviews="LIGA2" data-cal="4" data-time="1963"
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
