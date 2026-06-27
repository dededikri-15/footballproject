<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasemen {{ $league->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { background-color: #f8f9fa; }
        .table-container { background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .catcard { transition: transform 0.2s; border: 1px solid #eee; padding: 15px; border-radius: 10px; background: white; }
        .catcard:hover { transform: scale(1.05); border-color: #0d6efd; }
    </style>
</head>
<body>

    <section id="klasemen" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            
            @include('admin.partials.category') 

            <div class="table-container mt-5">
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
                    <a href="{{ url('/') }}" class="inline-block text-sm text-gray-500 hover:text-gray-800 transition">
                        &larr; Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>