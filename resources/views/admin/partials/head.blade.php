<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football Project - Berita Bola Terkini</title>

    {{-- Font & Icons tetap dipanggil via CDN agar selalu tersedia --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- 
        Penggunaan @vite:
        - Jika npm run dev berjalan, CSS dari resources/css/app.css akan masuk.
        - Jika npm run dev mati, CSS ini tidak akan dimuat (web tampil polos).
    --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>