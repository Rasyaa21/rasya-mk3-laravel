<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
<body class="bg-[#DBFB96]">
    <nav class="py-3 mx-auto bg-black">
        <div class="container flex items-center justify-between py-3 mx-auto ">
            <a class="text-3xl font-bold text-white" href="#">Rasya</a>
            <button class="block lg:hidden ">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex items-center justify-center space-x-8 lg:flex">
                <a class="text-white lg:text-lg" href="#">Home</a>
                <a class="text-white lg:text-lg" href="{{ route('about') }}">About</a>
                <a class="text-white lg:text-lg" href="#">Portfolio</a>
            </div>
            <button class="px-4 py-2 text-sm font-bold text-black bg-white rounded-full">Contact</button>
        </div>
    </nav>

    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between h-auto lg:h-[94vh] space-y-8 lg:space-y-0 lg:space-x-8">
        <div class="flex flex-col w-full space-y-4 text-center lg:w-1/2 lg:text-left">
            <h1 class="text-3xl font-bold text-black lg:text-5xl">Naufal Qathafa</h1>
            <h1 class="text-3xl font-bold text-black lg:text-5xl">Rasya Hidayat.</h1>
            <p class="px-4 font-semibold lg:px-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi excepturi accusamus laborum deserunt vitae nesciunt consectetur aut natus minima aspernatur eum ab omnis quo cum, autem, fugit atque et neque!
            </p>
            <div class="flex justify-center lg:justify-start">
                <button class="w-1/2 px-8 py-3 font-bold text-white bg-black rounded-md text-l lg:w-1/3">Let's go</button>
            </div>
        </div>
        <div class="flex justify-center w-1/2 lg:w-2/4 lg:justify-end">
            <img src="https://picsum.photos/seed/picsum/550/650" alt="" class="h-auto max-w-full rounded-lg shadow-lg">
        </div>
    </div>
</body>
</html>
