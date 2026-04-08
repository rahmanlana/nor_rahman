<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nor Rahman Maulana | Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind via CDN for quick preview if Vite fails -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'media',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            display: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#eff6ff',
                                100: '#dbeafe',
                                500: '#3b82f6',
                                600: '#2563eb',
                                900: '#1e3a8a',
                            }
                        }
                    }
                }
            }
        </script>
    @endif

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Outfit', sans-serif; }
        
        /* Scroll Reveal Utility Classes */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        
        /* Custom gradient text */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #60a5fa, #a78bfa, #f472b6);
        }

        /* Abstract Blob Animation */
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-[#0f1115] dark:text-gray-100 antialiased selection:bg-brand-500 selection:text-white">

    <!-- Navbar / Header (Glassmorphism) -->
    <header class="fixed w-full top-0 z-50 bg-white/70 dark:bg-[#0f1115]/70 backdrop-blur-lg border-b border-gray-200/50 dark:border-gray-800/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer hover:opacity-80 transition-opacity">
                    <div class="h-10 w-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold font-display shadow-lg shadow-blue-500/30">
                        NM
                    </div>
                    <span class="font-display font-semibold text-xl tracking-tight dark:text-white">Nor Rahman</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-brand-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Home</a>
                    <a href="#skills" class="text-gray-600 hover:text-brand-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Skills</a>
                    <a href="#projects" class="text-gray-600 hover:text-brand-600 dark:text-gray-300 dark:hover:text-white font-medium transition-colors">Projects</a>
                </nav>
                <div class="hidden md:flex items-center">
                    <a href="#contact" class="px-5 py-2.5 rounded-full bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-medium hover:-translate-y-0.5 hover:shadow-lg transition-all duration-300">
                        Let's Talk
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        
        <!-- Hero Section -->
        <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 w-full h-full overflow-hidden -z-10">
                <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-400/20 dark:bg-blue-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl opacity-70 animate-blob"></div>
                <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-purple-400/20 dark:bg-purple-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
                <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-pink-400/20 dark:bg-pink-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                    
                    <!-- Hero Text -->
                    <div class="flex flex-col justify-center text-center lg:text-left reveal">
                        <div class="inline-flex items-center justify-center lg:justify-start space-x-2 mb-6">
                            <span class="relative flex h-3 w-3">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400 tracking-wide uppercase">Available for new opportunities</span>
                        </div>
                        
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold font-display tracking-tight text-gray-900 dark:text-white mb-6 leading-[1.1]">
                            Hi, I'm <br class="hidden sm:block">
                            <span class="text-gradient">Nor Rahman Maulana</span>
                        </h1>
                        
                        <h2 class="text-xl sm:text-2xl font-medium text-gray-700 dark:text-gray-300 mb-6">
                            IT Student at Polinema | Web & Mobile Developer
                        </h2>
                        
                        <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light">
                            "Mahasiswa Teknik Informatika yang antusias dalam merancang solusi perangkat lunak yang efisien. Di luar coding, saya juga aktif mengelola organisasi sebagai Sekretaris Formadiksi Polinema."
                        </p>
                        
                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-semibold hover:-translate-y-1 hover:shadow-xl hover:shadow-gray-900/20 dark:hover:shadow-white/20 transition-all duration-300 flex items-center justify-center gap-2">
                                Jelajahi Proyek
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                            <a href="#contact" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white dark:bg-[#1a1c23] border border-gray-200 dark:border-gray-800 text-gray-900 dark:text-white font-semibold hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex items-center justify-center">
                                Hubungi Saya
                            </a>
                        </div>
                    </div>

                    <!-- Hero Image / Abstract Shape -->
                    <div class="relative lg:h-[600px] flex justify-center lg:justify-end items-center reveal delay-200">
                        <div class="relative w-full max-w-[500px] aspect-square">
                            <div class="absolute inset-0 bg-gradient-to-tr from-brand-500 to-purple-500 rounded-full mix-blend-multiply dark:mix-blend-overlay filter blur-xl opacity-50 animate-blob"></div>
                            <div class="relative w-full h-full rounded-[2.5rem] overflow-hidden border border-white/20 shadow-2xl backdrop-blur-sm bg-white/10 dark:bg-[#1a1c23]/50">
                                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800&auto=format&fit=crop" alt="Abstract Code Design" class="w-full h-full object-cover mix-blend-overlay opacity-80 hover:scale-105 transition-transform duration-700 ease-out">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0f1115] via-transparent to-transparent opacity-60"></div>
                                
                                <!-- Floating Badge -->
                                <div class="absolute bottom-8 left-8 right-8 bg-white/10 dark:bg-[#0f1115]/40 backdrop-blur-md border border-white/20 rounded-2xl p-5 shadow-xl hover:translate-y--2 transition-transform cursor-default">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0">
                                            <svg class="w-6 h-6 text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-semibold text-gray-900 dark:text-white">Clean Architecture</p>
                                            <p class="text-xs text-gray-700 dark:text-gray-300">Scalable & Maintainable Code</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Tech Stack & Tools (Bento Grid) -->
        <section id="skills" class="py-24 bg-white dark:bg-[#0b0c10] relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider uppercase text-sm">Tech Stack & Tools</span>
                    <h2 class="mt-2 text-3xl font-extrabold font-display text-gray-900 dark:text-white sm:text-4xl">
                        Senjata Pengembangan Saya
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 font-light">
                        Teknologi dan alat yang sering saya gunakan untuk mewujudkan ide menjadi solusi perangkat lunak yang fungsional dan estetis.
                    </p>
                </div>

                <!-- Bento Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[minmax(180px,auto)]">
                    
                    <!-- Web Dev (Spans 2 columns, maybe larger) -->
                    <div class="col-span-1 md:col-span-2 lg:col-span-2 row-span-2 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-[#13151a] dark:to-[#1a1c23] border border-indigo-100 dark:border-gray-800 rounded-3xl p-8 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 reveal flex flex-col justify-between group overflow-hidden relative">
                        <div class="absolute -right-12 -top-12 w-48 h-48 bg-purple-500/10 rounded-full blur-3xl group-hover:bg-purple-500/20 transition-all duration-500"></div>
                        <div>
                            <div class="w-14 h-14 bg-white dark:bg-gray-800 rounded-2xl shadow-sm flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold font-display text-gray-900 dark:text-white mb-2">Web Development</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-8 font-light">Membangun backend yang kokoh dan antarmuka interaktif yang responsif.</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 border border-red-200 bg-red-50 text-red-700 dark:border-red-900/50 dark:bg-red-900/20 dark:text-red-300 rounded-full text-sm font-medium">Laravel</span>
                            <span class="px-4 py-2 border border-yellow-200 bg-yellow-50 text-yellow-700 dark:border-yellow-900/50 dark:bg-yellow-900/20 dark:text-yellow-300 rounded-full text-sm font-medium">Filament</span>
                            <span class="px-4 py-2 border border-cyan-200 bg-cyan-50 text-cyan-700 dark:border-cyan-900/50 dark:bg-cyan-900/20 dark:text-cyan-300 rounded-full text-sm font-medium">Tailwind CSS</span>
                            <span class="px-4 py-2 border border-yellow-200 bg-yellow-50 text-yellow-700 dark:border-yellow-900/50 dark:bg-yellow-900/20 dark:text-yellow-300 rounded-full text-sm font-medium">Vanilla JS</span>
                        </div>
                    </div>

                    <!-- Mobile Dev -->
                    <div class="col-span-1 md:col-span-1 lg:col-span-2 row-span-1 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-[#13151a] dark:to-[#1a1c23] border border-blue-100 dark:border-gray-800 rounded-3xl p-8 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 reveal delay-100 flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-white dark:bg-gray-800 rounded-2xl shadow-sm flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold font-display text-gray-900 dark:text-white">Mobile Dev</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 font-light text-sm">Pengembangan aplikasi mobile lintas platform (Cross-platform) terdepan.</p>
                        <div class="flex">
                            <span class="px-4 py-2 border border-blue-200 bg-blue-100 text-blue-700 dark:border-blue-800/50 dark:bg-blue-900/30 dark:text-blue-300 rounded-full text-sm font-medium shadow-sm">Flutter</span>
                        </div>
                    </div>

                    <!-- Infrastructure -->
                    <div class="col-span-1 md:col-span-1 lg:col-span-1 row-span-1 bg-gray-50 dark:bg-[#13151a] border border-gray-200 dark:border-gray-800 rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 reveal delay-200">
                        <div class="w-12 h-12 bg-white dark:bg-gray-800 rounded-2xl shadow-sm flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold font-display text-gray-900 dark:text-white mb-2">Infrastructure</h3>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg text-xs font-semibold shadow-sm border border-gray-100 dark:border-gray-700">Proxmox</span>
                            <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg text-xs font-semibold shadow-sm border border-gray-100 dark:border-gray-700">GNS3</span>
                        </div>
                    </div>

                    <!-- API Integrations -->
                    <div class="col-span-1 md:col-span-2 lg:col-span-1 row-span-1 bg-gray-50 dark:bg-[#13151a] border border-gray-200 dark:border-gray-800 rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 reveal delay-300">
                        <div class="w-12 h-12 bg-white dark:bg-gray-800 rounded-2xl shadow-sm flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold font-display text-gray-900 dark:text-white mb-2">API Integrations</h3>
                        <div class="flex flex-col gap-2 mt-4">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-green-500"></div>
                                <span class="text-sm text-gray-600 dark:text-gray-400 font-medium">Xendit Payment</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                                <span class="text-sm text-gray-600 dark:text-gray-400 font-medium">RajaOngkir</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured Projects -->
        <section id="projects" class="py-24 bg-gray-50 dark:bg-[#0f1115] relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                    <span class="text-brand-600 dark:text-brand-400 font-semibold tracking-wider uppercase text-sm">Portfolio</span>
                    <h2 class="mt-2 text-3xl font-extrabold font-display text-gray-900 dark:text-white sm:text-4xl">
                        Featured Projects
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 font-light">
                        Beberapa karya terbaik yang pernah saya kembangkan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <!-- Project 1 -->
                    <div class="group bg-white dark:bg-[#1a1c23] rounded-[2rem] overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col reveal">
                        <!-- Image Container with Hover Zoom -->
                        <div class="relative overflow-hidden aspect-[4/3] bg-gray-100 dark:bg-gray-800">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="CetakPro SIDP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                            
                            <!-- Badges Overlay -->
                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 backdrop-blur-md bg-white/20 border border-white/30 text-white rounded-lg text-xs font-semibold shadow-lg">Laravel</span>
                                <span class="px-2.5 py-1 backdrop-blur-md bg-white/20 border border-white/30 text-white rounded-lg text-xs font-semibold shadow-lg">Filament</span>
                                <span class="px-2.5 py-1 backdrop-blur-md bg-white/20 border border-white/30 text-white rounded-lg text-xs font-semibold shadow-lg">Xendit</span>
                            </div>
                        </div>
                        
                        <div class="p-8 flex flex-col grow">
                            <h3 class="text-2xl font-bold font-display text-gray-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">
                                CetakPro (SIDP)
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed mb-6 grow">
                                Sistem informasi pelacakan pesanan digital printing yang komprehensif. Dilengkapi dengan CMS, fitur progress tracking, dan integrasi payment gateway otomatis menggunakan Xendit.
                            </p>
                            <a href="#" class="inline-flex items-center text-brand-600 dark:text-brand-400 font-semibold group-hover:text-brand-700 dark:group-hover:text-brand-300">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group bg-white dark:bg-[#1a1c23] rounded-[2rem] overflow-hidden border border-gray-200 dark:border-gray-800 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col reveal delay-200">
                        <!-- Image Container with Hover Zoom -->
                        <div class="relative overflow-hidden aspect-[4/3] bg-gray-100 dark:bg-gray-800">
                            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=800&auto=format&fit=crop" alt="Online Bookstore Architecture" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out opacity-90 group-hover:opacity-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                            
                            <!-- Badges Overlay -->
                            <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 backdrop-blur-md bg-white/20 border border-white/30 text-white rounded-lg text-xs font-semibold shadow-lg">System Analysis</span>
                                <span class="px-2.5 py-1 backdrop-blur-md bg-white/20 border border-white/30 text-white rounded-lg text-xs font-semibold shadow-lg">Draw.io</span>
                            </div>
                        </div>
                        
                        <div class="p-8 flex flex-col grow">
                            <h3 class="text-2xl font-bold font-display text-gray-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">
                                Online Bookstore Architecture
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 font-light leading-relaxed mb-6 grow">
                                Perancangan arsitektur sistem perangkat lunak dan use case diagram yang mendetail untuk platform toko buku digital modern yang skalabel.
                            </p>
                            <a href="#" class="inline-flex items-center text-brand-600 dark:text-brand-400 font-semibold group-hover:text-brand-700 dark:group-hover:text-brand-300">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-white dark:bg-[#0b0c10] border-t border-gray-200 dark:border-gray-800 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center pb-8 border-b border-gray-200 dark:border-gray-800 mb-8">
                
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <span class="font-display font-bold text-2xl tracking-tight text-gray-900 dark:text-white">Nor Rahman</span>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Membangun pengalaman digital yang lebih baik.</p>
                </div>
                
                <div class="flex items-center space-x-6">
                    <a href="https://github.com/norrahman" target="_blank" aria-label="GitHub" class="text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/nor-rahman-maulana" target="_blank" aria-label="LinkedIn" class="text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 dark:text-gray-400">
                <p>&copy; <script>document.write(new Date().getFullYear())</script> Nor Rahman Maulana. All rights reserved.</p>
                <p class="mt-2 md:mt-0">Built with <span class="text-red-500">&hearts;</span> Laravel & Tailwind CSS.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll Reveal Logic & Interaction Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Scroll Reveal implementation
            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: stop observing once revealed
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);

            document.querySelectorAll('.reveal').forEach(el => {
                revealObserver.observe(el);
            });

            // Make navbar smaller & solid on scroll
            const header = document.querySelector('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    header.classList.add('shadow-md', 'py-0');
                    // Additional styling tweaks could be done via classes if desired
                } else {
                    header.classList.remove('shadow-md', 'py-0');
                }
            });
        });
    </script>
</body>
</html>
