<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Nama Kamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at top right, #1e3a8a, #0f172a, #000000);
            color: white;
            font-family: 'Inter', sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="min-h-screen">

    <nav class="p-6 flex justify-between items-center sticky top-0 z-50 glass-card">
        <h1 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">
            MyDev.
        </h1>
        <div class="space-x-6">
            <a href="#projects" class="hover:text-blue-400 transition">Projek</a>
            <a href="#experience" class="hover:text-blue-400 transition">Pengalaman</a>
            <a href="#contact" class="bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-500 transition">Kontak</a>
        </div>
    </nav>

    <section class="py-20 text-center">
        <h2 class="text-5xl font-extrabold mb-4">Halo, Saya <span class="text-blue-500">Programmer</span></h2>
        <p class="text-gray-400 max-w-xl mx-auto">Siswa PKL yang berfokus pada pengembangan web menggunakan Laravel dan solusi modern.</p>
    </section>

    <section id="projects" class="p-10">
        <h3 class="text-3xl font-bold mb-8 border-l-4 border-blue-500 pl-4">Projek Saya</h3>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="glass-card p-6 rounded-2xl hover:scale-105 transition-transform">
                <h4 class="text-xl font-bold mb-2 text-blue-300">Aplikasi E-Commerce</h4>
                <p class="text-gray-400 mb-4">Dibuat menggunakan Laravel 10 dan MySQL.</p>
                <a href="#" class="text-sm text-blue-400 underline">Lihat Detail</a>
            </div>
            </div>
    </section>

    <section id="contact" class="p-10 mb-20 text-center">
        <h3 class="text-3xl font-bold mb-8">Hubungi Saya</h3>
        <div class="flex justify-center space-x-8">
            <a href="https://wa.me/628123456789" class="hover:scale-110 transition">
                <img src="https://img.icons8.com/color/48/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://instagram.com/username_kamu" class="hover:scale-110 transition">
                <img src="https://img.icons8.com/fluency/48/instagram-new.png" alt="Instagram">
            </a>
            <a href="mailto:emailkamu@gmail.com" class="hover:scale-110 transition">
                <img src="https://img.icons8.com/fluency/48/gmail-new.png" alt="Email">
            </a>
        </div>
    </section>

</body>
</html>
