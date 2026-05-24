<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciptaverse - Coming Soon</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <!-- CDN Fallback Tailwind untuk kemudahan cPanel jika kompilasi Vite belum dijalankan -->
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    darkMode: 'class',
                    theme: {
                        extend: {
                            fontFamily: {
                                sans: ['Instrument Sans', 'sans-serif'],
                            }
                        }
                    }
                }
            </script>
        @endif
    </head>
    <body class="bg-[#09090b] text-zinc-100 font-sans min-h-screen flex flex-col justify-between p-6 relative overflow-hidden selection:bg-amber-500 selection:text-black">
        
        <!-- Efek Dekoratif Background Glow -->
        <div class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] rounded-full bg-amber-500/10 blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] rounded-full bg-violet-600/10 blur-[100px] pointer-events-none"></div>

        <!-- Header Navigasi -->
        <header class="w-full max-w-6xl mx-auto flex items-center justify-between relative z-10">
            <div class="flex items-center gap-2">
                <!-- Logo Minimalis -->
                <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-amber-500 to-amber-300 flex items-center justify-center font-bold text-black text-lg shadow-lg shadow-amber-500/20">
                    C
                </div>
                <span class="font-semibold tracking-wide text-zinc-200">ciptaverse</span>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center gap-2">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xs font-medium px-4 py-2 rounded-full border border-zinc-800 bg-zinc-900/50 hover:bg-zinc-800 text-zinc-300 transition-all">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-xs font-medium px-3 py-2 text-zinc-400 hover:text-zinc-100 transition-colors">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-xs font-medium px-4 py-2 rounded-full bg-zinc-100 hover:bg-zinc-200 text-black font-semibold transition-all shadow-sm">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Konten Utama Center -->
        <main class="w-full max-w-xl mx-auto text-center my-auto relative z-10 py-12">
            <!-- Badge Status -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-amber-500/30 bg-amber-500/5 text-amber-400 text-xs font-medium mb-6 animate-pulse">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                Under Construction
            </div>

            <!-- Judul Utama Modern -->
            <h1 class="text-4xl sm:text-6xl font-bold tracking-tight text-white mb-6 leading-none">
                Something Great is <br>
                <span class="bg-gradient-to-r from-amber-400 via-orange-400 to-amber-200 bg-clip-text text-transparent">On Its Way</span>
            </h1>

            <!-- Deskripsi -->
            <p class="text-sm sm:text-base text-zinc-400 max-w-md mx-auto mb-8 leading-relaxed">
                Platform <span class="text-zinc-200 font-medium">test.ciptaverse.com</span> sedang dalam fase integrasi database dan migrasi sistem. Kami akan segera kembali.
            </p>

            <!-- Form Berlangganan / Notifikasi Keren -->
            <form action="#" method="POST" class="p-1.5 rounded-full bg-zinc-900/90 border border-zinc-800 focus-within:border-amber-500/50 flex items-center max-w-md mx-auto shadow-2xl transition-all">
                @csrf
                <input 
                    type="email" 
                    placeholder="Masukkan email Anda..." 
                    required
                    class="bg-transparent pl-4 pr-2 py-2 text-sm text-zinc-200 focus:outline-none flex-grow placeholder:text-zinc-600"
                >
                <button 
                    type="submit" 
                    class="bg-amber-500 hover:bg-amber-400 text-black font-medium text-xs px-5 py-2.5 rounded-full shadow-md shadow-amber-500/10 transition-all shrink-0"
                >
                    Notify Me
                </button>
            </form>
        </main>

        <!-- Footer -->
        <footer class="w-full max-w-6xl mx-auto text-center relative z-10">
            <p class="text-xs text-zinc-600 tracking-wide">
                &copy; 2026 Ciptaverse. Powered by Laravel 12 & Tailwind CSS v4.
            </p>
        </footer>

    </body>
</html>