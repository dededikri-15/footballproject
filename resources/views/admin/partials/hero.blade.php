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

                <!-- STATISTIK DINAMIS -->
                <div class="hstats d-flex gap-3 flex-wrap mt-4">
                    <div class="hstat">
                        <span class="snum">{{ $totalLeagues }}<em>+</em></span>
                        <small>Liga Terdata</small>
                    </div>
                    <div class="sdiv"></div>
                    <div class="hstat">
                        <span class="snum">{{ $totalClubs }}<em>+</em></span>
                        <small>Total Klub</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div style="position:relative;text-align:center;">
                    <div class="hcircle">
                        <img src="{{ asset('img/fbstnd.png') }}" alt="Football" />
                    </div>
                    <!-- Kartu Informasi -->
                    <div class="fcard fc1">
                        <div class="fcoi r"><i class="fas fa-futbol"></i></div>
                        <div><span class="fcnum">0</span><span class="fcsm">Match Played</span></div>
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