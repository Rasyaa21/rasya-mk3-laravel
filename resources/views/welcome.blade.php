<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>

    <body class="bg-[#DBFB96]">
        <nav class="py-3 bg-black">
            <div class="container flex items-center justify-between mx-auto">
                <a class="text-3xl font-bold text-white" href="#">Rasya</a>
                <button class="block lg:hidden">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="hidden space-x-8 lg:flex">
                    <a class="text-lg text-white" href="#">Home</a>
                    <a class="text-lg text-white" href="#">About</a>
                    <a class="text-lg text-white" href="#">Portfolio</a>
                </div>
                <button class="px-4 py-2 text-sm font-bold text-black bg-white rounded-full">Contact</button>
            </div>
        </nav>

        <div class="container mx-auto flex items-center justify-between h-[94vh]">
            <div class="flex flex-col w-1/2 space-y-4">
                <h1 class="text-4xl font-bold text-black">Naufal Qathafa</h1>
                <h1 class="text-4xl font-bold text-black">Rasya Hidayat.</h1>
                <p class="font-semibold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi excepturi accusamus laborum deserunt vitae nesciunt consectetur aut natus minima aspernatur eum ab omnis quo cum, autem, fugit atque et neque!
                </p>
                <button class="w-1/3 px-6 py-2 font-bold text-white bg-black rounded-md">Let's go</button>
            </div>

            <div class="w-2/4">
                <img src="https://picsum.photos/seed/picsum/550/650" alt="" class="rounded-lg shadow-lg">
            </div>
        </div>
    </body>

</html>
