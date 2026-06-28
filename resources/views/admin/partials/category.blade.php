<section id="category" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Jelajahi Berdasarkan <span class="text-danger">Liga</span></h2>
            <p class="text-muted">Pilih liga favorit Anda untuk melihat klasemen terbaru.</p>
        </div>

        {{-- BAGIAN INI: Pastikan tidak ada tombol manual di atas sini --}}
        
        <div class="row g-3 justify-content-center">
            @foreach($leagues as $item)
            <div class="col-6 col-md-3 col-lg-2">
                <a href="{{ route('liga.show', $item->slug) }}" class="text-decoration-none">
                    <div class="catcard text-center p-3 h-100 shadow-sm border rounded">
                        <img src="{{ asset('img/liga/' . $item->image) }}" 
                             alt="{{ $item->name }}" 
                             style="width: 80px; height: 80px; object-fit: contain; display: block; margin: 0 auto;">
                        <div class="small mt-2 fw-bold text-dark">{{ $item->name }}</div>
                        <div class="text-muted" style="font-size: 0.75rem;">{{ $item->total_clubs }} Klub</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>