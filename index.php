<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asmin.pl</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .btn {
            @apply px-6 py-3 rounded-full font-bold transition-transform transform hover:scale-105;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-100">

    <header class="fixed top-0 left-0 right-0 z-50 bg-gray-950 bg-opacity-80 backdrop-blur-md p-4 shadow-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#home" class="text-2xl font-extrabold text-white tracking-widest">
                asmin.<span class="text-green-500">pl</span>
            </a>
            <div class="space-x-8">
                <a href="/developer/" class="text-gray-300 hover:text-green-400 transition-colors">Developer</a>
                <a href="#contact" class="text-gray-300 hover:text-green-400 transition-colors">Kontakt</a>
            </div>
        </nav>
    </header>

    <section id="home" class="min-h-screen flex items-center justify-center text-center bg-gray-900">
        <div class="px-8 py-20">
            <h1 class="text-6xl md:text-8xl font-extrabold text-white animate-pulse">Cześć!</h1>
            <p class="mt-4 text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto">
               ⬇️⬇️⬇️
            </p>
        </div>
    </section>

    <section id="counter-section" class="min-h-screen flex items-center justify-center text-center bg-gray-950">
        <div class="px-8 py-20">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-200">Subskrybcje</h2>
            <div id="subscriber-counter" data-value="15" #iloscsubow# class="text-8xl md:text-9xl font-extrabold text-green-500 mt-8">
                0
            </div>
        </div>
    </section>

    <section id="contact" class="min-h-screen flex items-center justify-center text-center bg-gray-950">
        <div class="px-8 py-20">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-200">KONTAKT</h2>
            <div class="mt-12 space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-300">Email</h3>
                    <a href="mailto:kontakt@asmin.pl" class="text-green-400 hover:text-green-300 transition-colors">asmin@asmin.pl</a>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-300">Telefon</h3>
                    <a href="tel:+48123456789" class="text-green-400 hover:text-green-300 transition-colors">+48 732 797 370</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-950 text-center py-8 border-t border-gray-800">
        <p class="text-gray-500 text-sm">
            &copy; Asmin Developer Studios 2025-2025
            <a href="https://docs.google.com/document/d/1QzCfKCwPfmTq_HuSUCIcZmja8hWxjusSPou9lcc_mb8/edit?usp=sharing" class="text-green-500 hover:text-green-400 ml-4 transition-colors">Polityka prywatności</a>
        </p>
    </footer>

    <script>
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

            
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter();
                        observer.unobserve(counter); 
                    }
                });
            }, { threshold: 0.5 }); 

            observer.observe(counter);
        });
    </script>
</body>
</html>
