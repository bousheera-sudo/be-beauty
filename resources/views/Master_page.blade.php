<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be-Beauty - @yield('title', 'Accueil')</title>
    <!-- Google Fonts: Playfair Display (Serif) & Lato (Sans) -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-gold': '#D4AF37', // Or
                        'brand-dark': '#1a1a1a', // Noir doux
                        'brand-light': '#f9f9f9', // Gris très clair
                        'brand-accent': '#f3e5f5' // Lavande très pâle pour touches subtiles
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Lato"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Lato', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', serif; }
    </style>
    <!-- AOS Library CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-brand-light text-gray-800 flex flex-col min-h-screen">

    @include('Menu')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('Footer')

    <!-- AOS Library JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-in-out-cubic'
        });
    </script>
</body>
</html>
