<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Spotify Clone</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
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
        <h2 class="text-3xl font-bold mb-6">Welcome to your music world</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach(range(1, 8) as $i)
                <div class="bg-gray-800 rounded-lg p-4 hover:bg-gray-700 transition">
                    <div class="h-40 bg-gray-700 rounded mb-4"></div>
                    <h3 class="font-semibold text-lg">Playlist {{ $i }}</h3>
                    <p class="text-sm text-lightGray">Your favorite tracks</p>
                </div>
            @endforeach
        </div>
    </main>
</div>

<!-- Player -->
<footer class="fixed bottom-0 left-0 right-0 bg-black p-4 flex justify-between items-center border-t border-gray-700"
        x-data="{ isPlaying: false, currentTrack: 1 }">
    <div class="text-lightGray">
        Now playing: <span class="text-white" x-text="'Song Title - Artist ' + currentTrack"></span>
    </div>
    <div class="space-x-4">
        <!-- Previous Button -->
        <button class="text-white" @click="currentTrack = currentTrack > 1 ? currentTrack - 1 : currentTrack">
            ⏮
        </button>

        <!-- Play/Pause Button -->
        <button class="text-white" @click="isPlaying = !isPlaying" :class="{'bg-spotifyGreen': isPlaying, 'bg-gray-700': !isPlaying}">
            <span x-show="!isPlaying">⏯</span>
            <span x-show="isPlaying">❚❚</span>
        </button>

        <!-- Next Button -->
        <button class="text-white" @click="currentTrack = currentTrack + 1">
            ⏭
        </button>
    </div>
</footer>
</body>
</html>
