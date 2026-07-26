<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name', 'Presensi-Kit') }}</title>
    
    <!-- Tailwind CSS CDN & Fonts -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004ac6",
                        "primary-container": "#2563eb",
                        "on-primary": "#ffffff",
                        "background": "#faf8ff",
                        "on-background": "#131b2e",
                        "surface": "#faf8ff",
                        "on-surface": "#131b2e",
                        "on-surface-variant": "#434655",
                        "secondary": "#505f76",
                        "outline-variant": "#c3c6d7",
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-pattern {
            background-color: #faf8ff;
            background-image: radial-gradient(#d0e1fb 0.5px, transparent 0.5px), radial-gradient(#d0e1fb 0.5px, #faf8ff 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }
    </style>
</head>
<body class="bg-background text-on-background antialiased overflow-x-hidden min-h-screen flex flex-col justify-between">

    <!-- TopNavBar -->
<header class="fixed top-0 left-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm">
    <nav class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
        <div class="text-2xl font-bold text-primary">Presensi-Kit</div>
        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg bg-primary text-on-primary font-semibold hover:opacity-90 transition-opacity">
                Login
            </a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-lg bg-primary text-on-primary font-semibold hover:opacity-90 transition-opacity shadow-sm">
                Register
            </a>
        </div>
    </nav>
</header>

    <main class="pt-20 my-auto">
        <!-- Hero Section -->
        <section class="relative overflow-hidden hero-pattern py-12 md:py-20">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Sisi Kiri: Teks Informasi -->
                <div class="space-y-6">
                    <span class="inline-block px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                        Sistem Presensi Sekolah Modern
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-on-surface leading-tight">
                        Solusi Presensi <br/>
                        <span class="text-primary">Sekolah Digital</span>
                    </h1>
                
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('login') }}" class="px-6 py-3 bg-primary text-on-primary rounded-xl font-semibold shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                            Mulai Presensi
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Sisi Kanan: Fitur Utama -->
                <div class="bg-white/90 backdrop-blur-md border border-outline-variant rounded-3xl p-6 shadow-xl space-y-4">
                    <div class="border-b pb-3">
                        <h3 class="font-bold text-gray-800 text-sm">Fitur Utama Presensi-Kit</h3>
                        <p class="text-xs text-gray-500">Kemudahan sistem pencatatan kehadiran digital</p>
                    </div>

                    <div class="space-y-3">
                        <!-- Fitur 1 -->
                        <div class="flex items-center gap-3 p-3 bg-blue-50/50 rounded-xl border border-blue-100">
                            <div class="w-9 h-9 rounded-lg bg-blue-600 text-white flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-xl">touch_app</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-blue-900">Akses Cepat & Intuitif</p>
                                <p class="text-[11px] text-blue-700">Mencatat kehadiran siswa secara cepat hanya dalam hitungan detik.</p>
                            </div>
                        </div>

                        <!-- Fitur 2 -->
                        <div class="flex items-center gap-3 p-3 bg-purple-50/50 rounded-xl border border-purple-100">
                            <div class="w-9 h-9 rounded-lg bg-purple-600 text-white flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-xl">monitoring</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-purple-900">Rekap Data Otomatis</p>
                                <p class="text-[11px] text-purple-700">Data terintegrasi langsung ke sistem basis data backend.</p>
                            </div>
                        </div>

                        <!-- Fitur 3 -->
                        <div class="flex items-center gap-3 p-3 bg-green-50/50 rounded-xl border border-green-100">
                            <div class="w-9 h-9 rounded-lg bg-green-600 text-white flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-xl">verified_user</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-green-900">Aman & Terstruktur</p>
                                <p class="text-[11px] text-green-700">Data dipastikan aman dan tersimpan dengan terstruktur</p></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-outline-variant py-4">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-secondary">
            <p>© {{ date('Y') }} Presensi-Kit</p>
        </div>
    </footer>

</body>
</html>