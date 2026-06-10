<div id="searchOv">
    <button class="sovclose" id="searchClose"><i class="fas fa-times"></i></button>

    <div class="sovbox">
        <h4>Mau cari info kompetisi apa hari ini?</h4>

        <div class="sovinput">
            <input type="text" id="searchInput" placeholder="Cari liga, nama klub, atau pemain..." autocomplete="off" />
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

        {{-- <div class="sovtrend">
            <p><i class="fas fa-fire me-1" style="color:var(--secondary);"></i>Pencarian Populer</p>
            <span class="ttag">Persib Bandung</span>
            <span class="ttag">Real Madrid</span>
            <span class="ttag">Manchester United</span>
            <span class="ttag">Erling Haaland</span>
            <span class="ttag">Jadwal Klasemen</span>
            <span class="ttag">Top Skor UCL</span>
        </div> --}}
    </div>
</div>
