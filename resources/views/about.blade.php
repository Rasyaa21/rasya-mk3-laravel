<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-400">

    <!-- Header Section -->
    <div class="flex justify-center py-8">
        <h1 class="text-4xl font-bold text-pink-400">About Me</h1>
    </div>

    <!-- About Content Section -->
    <div class="container px-4 py-12 mx-auto">
        <div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-center text-gray-800">Lorem ipsum dolor sit amet</h2>
            <p class="mb-6 text-lg leading-relaxed text-center text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <!-- Skills and Interests Section -->
            <div class="mt-8">
                <h3 class="text-xl font-semibold text-gray-800">Skills</h3>
                <p class="mt-4 leading-relaxed text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque pulvinar pellentesque habitant morbi tristique.
                </p>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-semibold text-gray-800">Interests</h3>
                <p class="mt-4 leading-relaxed text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat interdum varius sit amet mattis vulputate.
                </p>
            </div>

            <!-- Contact Button -->
            <div class="flex justify-center mt-8">
                <a href="" class="px-8 py-3 text-white bg-pink-500 rounded-lg hover:bg-pink-600">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>

</body>
</html>
