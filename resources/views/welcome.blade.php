<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Adrian - Web Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle at top right, #1e3a8a, #0f172a, #000000);
            color: white;
            font-family: 'Inter', sans-serif;
            min-h-screen;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(59, 130, 246, 0.5);
            transform: translateY(-5px);
        }
        .text-gradient {
            background: linear-gradient(to r, #60a5fa, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased">

    <nav class="fixed w-full z-50 glass-card px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-extrabold tracking-tighter">ADRIAN<span class="text-blue-500">.DEV</span></h1>
        <div class="hidden md:flex space-x-8 font-medium text-sm uppercase tracking-widest">
            <a href="#home" class="hover:text-blue-400 transition">Beranda</a>
            <a href="#projects" class="hover:text-blue-400 transition">Projek</a>
            <a href="#experience" class="hover:text-blue-400 transition">Pengalaman</a>
            <a href="#contact" class="hover:text-blue-400 transition text-blue-400">Kontak</a>
        </div>
    </nav>

    <section id="home" class="pt-32 pb-20 px-6 text-center">
        <div class="inline-block px-4 py-1 border border-blue-500/30 rounded-full bg-blue-500/10 text-blue-400 text-xs mb-6 uppercase tracking-widest animate-pulse">
            Tersedia untuk PKL / Kerja
        </div>
        <h2 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
            Membangun Solusi dengan <br><span class="text-gradient">Kode yang Elegan.</span>
        </h2>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg mb-10 leading-relaxed">
            Saya seorang pengembang web muda yang berfokus pada ekosistem **Laravel**.
            Sedang mencari pengalaman baru untuk mengasah kemampuan teknis saya.
        </p>
        <div class="flex justify-center gap-4">
            <a href="#projects" class="bg-blue-600 hover:bg-blue-500 px-8 py-3 rounded-full font-bold transition shadow-lg shadow-blue-900/20">Lihat Projek</a>
            <a href="#contact" class="glass-card px-8 py-3 rounded-full font-bold transition">Hubungi Saya</a>
        </div>
    </section>

    <section class="py-10 px-6 overflow-hidden">
        <div class="flex flex-wrap justify-center gap-8 opacity-50 grayscale hover:grayscale-0 transition-all">
            <span class="font-bold text-xl">Laravel</span>
            <span class="font-bold text-xl">PHP</span>
            <span class="font-bold text-xl">Tailwind CSS</span>
            <span class="font-bold text-xl">MySQL</span>
            <span class="font-bold text-xl">Git/GitHub</span>
        </div>
    </section>

    <section id="projects" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h3 class="text-blue-500 font-bold uppercase tracking-widest text-sm mb-2">Portfolio</h3>
                <h2 class="text-4xl font-bold">Projek Pilihan</h2>
            </div>
            <p class="text-gray-400 hidden md:block">Beberapa hasil karya terbaik saya.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @php
                // Dummy Data Projek
                $myProjects = [
                    [
                        'id' => 1,
                        'title' => 'Sistem Inventaris Barang',
                        'category' => 'Web App',
                        'img' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Manajemen stok barang real-time dengan Laravel.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Landing Page Perusahaan',
                        'category' => 'Frontend',
                        'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Tampilan modern responsif menggunakan Tailwind CSS.'
                    ],
                ];
            @endphp

            @foreach($myProjects as $p)
            <div class="glass-card rounded-3xl overflow-hidden group">
                <div class="h-64 overflow-hidden">
                    <img src="{{ $p['img'] }}" alt="Projek" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <div class="p-8">
                    <span class="text-blue-400 text-xs font-bold uppercase">{{ $p['category'] }}</span>
                    <h4 class="text-2xl font-bold mt-2 mb-4">{{ $p['title'] }}</h4>
                    <p class="text-gray-400 mb-6 text-sm">{{ $p['desc'] }}</p>
                    <a href="/project/{{ $p['id'] }}" class="inline-flex items-center text-white font-bold hover:text-blue-400 transition">
                        Lihat Detail <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="experience" class="py-20 px-6 bg-white/5">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-10 text-center">Pengalaman PKL</h2>
            <div class="space-y-8">
                <div class="relative pl-8 border-l border-blue-500/30">
                    <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[8.5px] top-1 shadow-[0_0_10px_#3b82f6]"></div>
                    <h4 class="text-xl font-bold text-blue-400">Junior Web Developer (PKL)</h4>
                    <p class="font-medium">CV. Teknologi Antares</p>
                    <p class="text-sm text-gray-500 mb-2">Juni 2025 - september 2025</p>
                    <p class="text-gray-400">Bertanggung jawab membantu tim backend dalam migrasi database dan pembuatan API untuk modul absensi karyawan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 px-6 text-center">
        <h2 class="text-4xl font-bold mb-4 text-gradient">Tertarik Berkolaborasi?</h2>
        <p class="text-gray-400 mb-12">Mari bicara tentang projek kamu atau sekadar menyapa.</p>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="https://wa.me/6285183101552" class="glass-card p-4 rounded-2xl flex items-center gap-4 hover:scale-105 transition">
                <img src="https://img.icons8.com/color/48/whatsapp.png" class="w-8 h-8">
                <div class="text-left">
                    <p class="text-xs text-gray-400">WhatsApp</p>
                    <p class="font-bold text-sm">+62 851-8310-1552</p>
                </div>
            </a>

            <a href="https://instagram.com/adrianztrx" class="glass-card p-4 rounded-2xl flex items-center gap-4 hover:scale-105 transition">
                <img src="https://img.icons8.com/fluency/48/instagram-new.png" class="w-8 h-8">
                <div class="text-left">
                    <p class="text-xs text-gray-400">Instagram</p>
                    <p class="font-bold text-sm">@adrianztrx</p>
                </div>
            </a>

            <a href="mailto:adrian@email.com" class="glass-card p-4 rounded-2xl flex items-center gap-4 hover:scale-105 transition">
                <img src="https://img.icons8.com/fluency/48/gmail-new.png" class="w-8 h-8">
                <div class="text-left">
                    <p class="text-xs text-gray-400">Email</p>
                    <p class="font-bold text-sm">adrian.web.build@gemail.com</p>
                </div>
            </a>
        </div>
    </section>

    <footer class="py-10 text-center border-t border-white/5 text-gray-600 text-sm">
        <p>&copy; 2026 Adrian Portofolio. Dibuat dengan Laravel & ❤️</p>
    </footer>

</body>
</html>
