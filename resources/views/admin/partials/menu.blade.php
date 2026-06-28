{{-- <section id="menu" class="py-5">
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
// Fungsi loadTeams harus didefinisikan dengan benar
function loadTeams(leagueId, element) {
    // 1. Hapus class 'active' dari semua tombol
    const buttons = document.querySelectorAll('.ligabtn');
    buttons.forEach(btn => btn.classList.remove('active'));
    
    // 2. Tambahkan 'active' ke tombol yang diklik
    element.classList.add('active');

    // 3. Panggil data dari route API
    fetch('/get-teams/' + leagueId)
        .then(response => response.json())
        .then(data => {
            let container = document.getElementById('mgrid');
            
            // Masukkan kerangka tabel
            container.innerHTML = `
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Pos</th> <th>Klub</th> <th>P</th> <th>W</th> <th>D</th> <th>L</th> <th>GF</th> <th>GA</th> <th>GD</th> <th>Pts</th>
                            </tr>
                        </thead>
                        <tbody id="table-body"></tbody>
                    </table>
                </div>`;

            let tbody = document.getElementById('table-body');
            
            // Isi baris tabel
            data.forEach((team, index) => {
                tbody.innerHTML += `
                    <tr class="text-center">
                        <td>${index + 1}</td>
                        <td class="text-start fw-bold">${team.name}</td>
                        <td>${team.played ?? 0}</td>
                        <td>${team.won ?? 0}</td>
                        <td>${team.drawn ?? 0}</td>
                        <td>${team.lost ?? 0}</td>
                        <td>${team.gf ?? 0}</td>
                        <td>${team.ga ?? 0}</td>
                        <td>${team.gf - team.ga}</td>
                        <td class="fw-bold text-success">${team.points ?? 0}</td>
                    </tr>`;
            });
        })
        .catch(error => console.error('Error:', error));
}

// FIX: Pastikan script berjalan setelah semua elemen HTML siap
window.onload = function() {
    const firstButton = document.querySelector('.ligabtn');
    if(firstButton) {
        firstButton.click();
    }
};
</script> --}}