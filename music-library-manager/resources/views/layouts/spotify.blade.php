<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Spotify Clone</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        spotifyGreen: '#1DB954',
                        darkBackground: '#121212',
                        lightGray: '#b3b3b3',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-darkBackground text-white font-sans min-h-screen">
<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-black p-6">
        <h1 class="text-2xl font-bold mb-6">🎵 My Music</h1>
        <nav class="space-y-4">
            <a href="{{ route('home') }}" class="block text-lightGray hover:text-white">Home</a>
            <a href="{{ route('search') }}" class="block text-lightGray hover:text-white">Search</a>
            <a href="{{ route('library') }}" class="block text-lightGray hover:text-white">Library</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-auto">
        @yield('content')
    </main>
</div>

<!-- Footer Player -->
<footer class="fixed bottom-0 left-0 right-0 bg-black p-4 flex justify-between items-center border-t border-gray-700">
    <div class="text-lightGray">Now playing: <span class="text-white">Song Title - Artist</span></div>
    <div class="space-x-4">
        <button class="text-white">⏮</button>
        <button class="text-white">⏯</button>
        <button class="text-white">⏭</button>
    </div>
</footer>
</body>
</html>
