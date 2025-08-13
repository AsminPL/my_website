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
    </style>
</head>
<body class="bg-gray-950 text-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-gray-900 rounded-xl shadow-2xl p-8 md:p-16 text-center max-w-lg mx-4">
        <h1 class="text-3xl md:text-5xl font-extrabold text-red-500 mb-4 animate-pulse">
            UWAGA!
        </h1>
        <p class="text-xl md:text-2xl text-gray-300">
            Opuszczasz stronę <span class="font-bold text-green-500">asmin.pl</span>
        </p>
        <p class="text-md md:text-lg text-gray-400 mt-4">
            Zostaniesz przekierowany do innej witryny. (za 15 sekund.)
        </p>
        <a href="/" class="mt-8 inline-block bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition-colors">
            Powrót na stronę główną
        </a>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const redirectDelay = 15000;
            const redirectUrl = 'https://vishop.pl/shop/21993/server/20776';

            setTimeout(() => {
                window.location.href = redirectUrl;
            }, redirectDelay);
        });
    </script>

</body>
</html>
