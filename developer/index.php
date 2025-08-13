<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asmin.pl - Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .fade-in {
            animation: fadeInAnimation 2s ease-in forwards;
            opacity: 0;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-1 { animation-delay: 0.5s; }
        .fade-in-2 { animation-delay: 1.5s; }
    </style>
</head>
<body class="bg-gray-950 text-gray-100">

    <header class="fixed top-0 left-0 right-0 z-50 bg-gray-950 bg-opacity-80 backdrop-blur-md p-4 shadow-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold text-white tracking-widest">
                asmin.<span class="text-green-500">pl</span>
            </a>
            <div class="space-x-8">
                <a href="/developer/" class="text-gray-300 hover:text-green-400 transition-colors">Developer</a>
                <a href="/#contact" class="text-gray-300 hover:text-green-400 transition-colors">Kontakt</a>
            </div>
        </nav>
    </header>


    <section id="developer-home" class="min-h-screen flex items-center justify-center text-center bg-gray-900">
        <div class="px-8 py-20">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white fade-in fade-in-1">
                Asmin Developer Studios
            </h1>
            <p class="mt-4 text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto fade-in fade-in-2">
                Istniejemy od: 2024.
            </p>
        </div>
    </section>

    <section id="github-section" class="py-20 bg-gray-900 text-center">
        <div class="container mx-auto px-8">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-200 mb-6">
                Chcesz zobaczyć mój GitHub?
            </h3>
            <a href="https://github.com/asminpl" class="inline-block bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition-colors">
                Kliknij tutaj
            </a>
        </div>
    </section>

    <section id="portfolio" class="py-20 bg-gray-950">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-200 mb-12">Portfolio</h2>
            
            <!-- Użycie grid do układania projektów obok siebie -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
                <!-- PROJEKT 1 -->
                <div class="bg-gray-900 rounded-lg shadow-xl overflow-hidden">
                    <img src="/img/img1.jpg" alt="mc.asmin.pl" class="w-full">
                    <div class="p-8">
                        <h3 class="text-3xl font-bold text-green-500 mb-4">mc.asmin.pl</h3>
                        <p class="text-gray-400 mb-6">
                            Prosty serwer minecraft dla widzów.
                        </p>
                        <a href="/redirect/mc_website.php" class="inline-block bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition-colors">Przejdź do projektu</a>
                    </div>
                </div>

                <!-- PROJEKT 2 -->
                <div class="bg-gray-900 rounded-lg shadow-xl overflow-hidden">
                    <img src="/img/bot_muz_img.PNG" alt="Music bot." class="w-full">
                    <div class="p-8">
                        <h3 class="text-3xl font-bold text-green-500 mb-4">Bot Muzyczny</h3>
                        <p class="text-gray-400 mb-6">
                            Prosty bot muzyczny, napisany w python.
                        </p>
                        <a href="https://github.com/AsminPL/music_bot" class="inline-block bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition-colors">Przejdź do projektu</a>
                    </div>
                </div>
				<! -- soon --!>
            </div>
        </div>
    </section>

    <footer class="bg-gray-950 text-center py-8 border-t border-gray-800">
        <p class="text-gray-500 text-sm">
            &copy; Asmin Development Studios 2025-2025
            <a href="https://docs.google.com/document/d/1QzCfKCwPfmTq_HuSUCIcZmja8hWxjusSPou9lcc_mb8/edit?usp=sharing" class="text-green-500 hover:text-green-400 ml-4 transition-colors">Polityka prywatności</a>
        </p>
    </footer>

</body>
</html>
