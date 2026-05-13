<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background: #000; color: white; font-family: 'Inter', sans-serif; }
        .glass-card { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); }
    </style>
</head>
<body class="p-10">
    <a href="/" class="text-blue-400 mb-10 inline-block">← Kembali ke Beranda</a>
    
    <div class="max-w-4xl mx-auto glass-card p-8 rounded-3xl">
        <h1 class="text-4xl font-bold mb-6 text-blue-400">Detail Projek ID: {{ $id }}</h1>
        <img src="https://via.placeholder.com/800x400/1e3a8a/ffffff?text=Preview+Projek" class="w-full rounded-2xl mb-8">
        
        <h2 class="text-2xl font-semibold mb-4">Deskripsi Pengalaman PKL</h2>
        <p class="text-gray-300 leading-relaxed mb-6">
            Selama PKL di (Nama Perusahaan), saya bertanggung jawab untuk mengembangkan fitur ini. 
            Saya belajar banyak tentang Laravel, integrasi API, dan bagaimana bekerja dalam tim.
        </p>

        <h3 class="text-xl font-semibold mb-2">Kemampuan yang Digunakan:</h3>
        <ul class="list-disc list-inside text-gray-400">
            <li>Laravel 10</li>
            <li>Tailwind CSS</li>
            <li>MySQL Database</li>
        </ul>
    </div>
</body>
</html>