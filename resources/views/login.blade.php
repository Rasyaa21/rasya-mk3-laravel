<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <script src="/assets/js/script.js" defer></script>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('/assets/images/03_macOSSonomaWallpaper_Blurred_8K.jpeg');">
        <form method="post" class="flex flex-col w-full max-w-sm gap-4 p-8 bg-white rounded-lg shadow-lg" id="loginForm">
            <label for="username" class="text-lg font-bold text-gray-700">Username</label>
            <input type="text" id="username" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Enter your username">

            <label for="password" class="text-lg font-bold text-gray-700">Password</label>
            <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Enter your password">

            <button type="submit" class="py-3 font-semibold text-white transition-colors bg-blue-500 rounded-lg hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>
