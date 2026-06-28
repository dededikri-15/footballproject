<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasemen {{ $league->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section id="klasemen" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Jelajahi Berdasarkan <span class="text-danger">Liga</span></h2>
                <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                    @foreach(\App\Models\League::all() as $nav)
                        <a href="{{ route('liga.show', $nav->slug) }}" 
                           class="btn {{ $league->id == $nav->id ? 'btn-danger' : 'btn-outline-danger' }}">
                           {{ $nav->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="table-container mt-5 bg-white p-4 shadow rounded">
                <h2 class="text-center mb-4 text-primary fw-bold">Klasemen {{ $league->name }}</h2>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>Pos</th> <th>Klub</th> <th>P</th> <th>W</th> <th>D</th> <th>L</th> <th>GF</th> <th>GA</th> <th>GD</th> <th>Pts</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($teams as $index => $team)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="text-start fw-bold">{{ $team->name }}</td>
                                <td>{{ $team->played ?? 0 }}</td>
                                <td>{{ $team->won ?? 0 }}</td>
                                <td>{{ $team->drawn ?? 0 }}</td>
                                <td>{{ $team->lost ?? 0 }}</td>
                                <td>{{ $team->gf ?? 0 }}</td>
                                <td>{{ $team->ga ?? 0 }}</td>
                                <td>{{ $team->gd ?? 0 }}</td>
                                <td class="fw-bold text-success">{{ $team->points ?? 0 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-center">
                    <a href="{{ url('/') }}" class="btn btn-secondary">&larr; Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>