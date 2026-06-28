<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Football Project</title>

    <!-- Memanggil CSS Bootstrap kamu yang sudah ada -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-4">
        <!-- Ini adalah tempat di mana isi form berita kamu nanti akan muncul -->
        {{ $slot }}
    </div>
</body>

</html>
