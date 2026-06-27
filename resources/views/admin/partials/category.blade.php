<section id="category">
    <div class="container">
        <div class="row g-3 mb-5">
    @foreach($leagues as $item)
    <div class="col-6 col-md-3 col-lg-2">
        <a href="{{ route('liga.show', $item->slug) }}" class="text-decoration-none">
            <div class="catcard text-center">
                <img src="{{ asset('img/liga/' . $item->image) }}" class="img-fluid" style="max-height: 50px;">
                <div class="small mt-2 fw-bold text-dark">{{ $item->name }}</div>
            </div>
        </a>
    </div>
    @endforeach
</div>
    </div>
</section>