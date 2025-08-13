<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asmin.pl</title>
    <!-- Ładowanie Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Ładowanie Font Awesome do ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        /* Animacja migoczącej strzałki */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(-25%);
                animation-timing-function: cubic-bezier(0.8,0,1,1);
            }
            50% {
                transform: none;
                animation-timing-function: cubic-bezier(0,0,0.2,1);
            }
        }
        .animate-bounce-slow {
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-100">

    <!-- Nagłówek i nawigacja -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-gray-950 bg-opacity-80 backdrop-blur-md p-4 shadow-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#home" class="text-2xl font-extrabold tracking-widest">
                <span class="text-green-500">asmin.</span><span class="text-white">pl</span>
            </a>
            <div class="space-x-8 hidden md:flex">
                <a href="#contact" class="text-gray-300 hover:text-green-400 transition-colors">Kontakt</a>
                <a href="/developer/" class="text-gray-300 hover:text-green-400 transition-colors">Developer</a>
            </div>
        </nav>
    </header>

    <!-- Sekcja powitalna ze zdjęciem i licznikiem -->
    <section id="home" class="min-h-screen flex items-center justify-center text-center bg-gray-900">
        <div class="px-8 py-20">
            <!-- Twoje zdjęcie profilowe -->
            <img src="/img/img2.jpg" alt="Zdjęcie profilowe Asmina" class="rounded-full w-48 h-48 md:w-64 md:h-64 object-cover mx-auto shadow-lg mb-8">
            
            <div id="subscriber-counter" data-value="15" class="text-8xl md:text-9xl font-extrabold text-green-500">
                0
            </div>
            <p class="text-lg md:text-xl text-gray-400 mt-2">subskrypcji na YouTube</p>
            
            <!-- Migocząca strzałka i tekst -->
            <div class="mt-12 text-center text-green-500 animate-bounce-slow">
                <i class="fa-solid fa-chevron-down text-3xl"></i>
                <p class="text-lg mt-2 font-bold">Przewiń w dół...</p>
            </div>
        </div>
    </section>
    
    <!-- Sekcja o mnie -->
    <section id="about" class="py-16 md:py-24 bg-gray-950">
        <div class="container mx-auto px-8 flex flex-col items-center text-center md:flex-row md:text-left md:space-x-12">
            <div class="md:w-1/3 mb-8 md:mb-0">
                <img src="/img/img2.jpg" alt="Zdjęcie Asmina" class="rounded-full shadow-lg mx-auto md:mx-0 w-48 h-48 md:w-full md:h-auto object-cover">
            </div>
            <div class="md:w-2/3">
                <h2 class="text-4xl md:text-6xl font-bold text-gray-200">O Mnie</h2>
                <p class="mt-6 text-lg md:text-xl text-gray-400">Jestem Asmin, developer, i mini YouTuber (2 lata doświadczenia). 
					<BR>
					W filmach opowiadam o technologii i sprzęcie, a na live'ach gram w gry.
                </p>
            </div>
        </div>
    </section>

    <!-- Sekcja kontakt -->
    <section id="contact" class="py-16 md:py-24 bg-gray-900">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-200">KONTAKT</h2>
            <div class="mt-12 space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-300">Email</h3>
                    <a href="mailto:asmin@asmin.pl" class="text-green-400 hover:text-green-300 transition-colors">asmin@asmin.pl</a>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-300">Telefon</h3>
                    <a href="tel:+48732797370" class="text-green-400 hover:text-green-300 transition-colors">+48 732 797 370</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stopka -->
    <footer class="bg-gray-950 text-center py-8 border-t border-gray-800">
        <p class="text-gray-500 text-sm">
            &copy; Asmin Developer Studios 2025-2025
            <a href="https://docs.google.com/document/d/1QzCfKCwPfmTq_HuSUCIcZmja8hWxjusSPou9lcc_mb8/edit?usp=sharing" class="text-green-500 hover:text-green-400 ml-4 transition-colors">Polityka prywatności</a>
        </p>
    </footer>

    <script>
        // Skrypt do animacji licznika
        document.addEventListener('DOMContentLoaded', () => {
            const counter = document.getElementById('subscriber-counter');
            const target = +counter.getAttribute('data-value');
            let count = 0;
            const duration = 2000; 
            const step = (target / (duration / 10));

            function animateCounter() {
                const interval = setInterval(() => {
                    count += step;
                    if (count >= target) {
                        clearInterval(interval);
                        counter.innerText = target.toLocaleString();
                    } else {
                        counter.innerText = Math.floor(count).toLocaleString();
                    }
                }, 10);
            }
            animateCounter();
        });
    </script>
</body>
</html>
