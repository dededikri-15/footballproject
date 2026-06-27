<section id="category" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Jelajahi Berdasarkan <span class="text-danger">Liga</span></h2>
            <p class="text-muted">Pilih liga favorit Anda untuk melihat klasemen terbaru.</p>
        </div>

        <div class="row g-3">
            @foreach($leagues as $item)
            <div class="col-6 col-md-3 col-lg-2">
                <a href="{{ route('liga.show', $item->slug) }}" class="text-decoration-none">
                    <div class="catcard text-center">
                        <img src="{{ asset('img/liga/' . $item->image) }}" class="img-fluid" style="max-height: 50px;">
                        <div class="small mt-2 fw-bold text-dark">{{ $item->name }}</div>
                        <div class="text-muted" style="font-size: 0.75rem;">{{ $item->total_clubs }} Klub</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>