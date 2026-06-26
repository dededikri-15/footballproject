<section id="menu" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="slbl">Pilihan Kompetisi</span>
            <h2 class="stitle">Jelajahi Berdasarkan <span>Liga</span></h2>
        </div>

        <div class="text-center mb-4">
            <button class="ligabtn" onclick="loadTeams(1, this)">Liga 1 Indonesia</button>
            <button class="ligabtn" onclick="loadTeams(2, this)">Premier League</button>
            <button class="ligabtn" onclick="loadTeams(3, this)">La Liga</button>
            <button class="ligabtn" onclick="loadTeams(4, this)">Serie A</button>
            <button class="ligabtn" onclick="loadTeams(5, this)">Bundesliga</button>
            <button class="ligabtn" onclick="loadTeams(6, this)">Ligue 1</button>
            <button class="ligabtn" onclick="loadTeams(7, this)">Liga 2 Indonesia</button>
            <button class="ligabtn" onclick="loadTeams(8, this)">Champions League</button>
        </div>

        <div class="row g-4" id="mgrid"></div>
    </div>
</section>

<style>
    .ligabtn {
        background-color: #f8f9fa;
        border: 1px solid #ccc;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px; /* Sesuaikan agar tidak terlalu kotak */
    }
    .ligabtn.active {
        background-color: red !important;
        color: white !important;
        border-color: red !important;
    }
</style>

<script>
function loadTeams(leagueId, element) {
    // 1. Ganti selector menjadi .ligabtn agar sesuai dengan class tombol
    const buttons = document.querySelectorAll('.ligabtn');
    
    // 2. Hapus class 'active' dari SEMUA tombol
    buttons.forEach(btn => btn.classList.remove('active'));
    
    // 3. Tambahkan class 'active' HANYA ke tombol yang diklik
    element.classList.add('active');

    fetch('/get-teams/' + leagueId)
        .then(response => response.json())
        .then(data => {
            let container = document.getElementById('mgrid');
            
            container.innerHTML = `
                <div class="table-responsive">
                    <table class="table table-hover" style="width:100%; border-collapse: collapse; text-align: center;">
                        <thead style="background-color: #f8f9fa;">
                            <tr>
                                <th>Pos</th>
                                <th style="text-align: left;">Klub</th>
                                <th>P</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                        </tbody>
                    </table>
                </div>`;

            let tbody = document.getElementById('table-body');
            
            data.forEach((team, index) => {
                tbody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td style="text-align: left;">${team.name}</td>
                        <td>${team.played}</td>
                        <td>${team.won}</td>
                        <td>${team.drawn}</td>
                        <td>${team.lost}</td>
                        <td>${team.gf}</td>
                        <td>${team.ga}</td>
                        <td>${team.gf - team.ga}</td>
                        <td><strong>${team.points}</strong></td>
                    </tr>`;
            });
        });
}
</script>