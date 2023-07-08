<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Drive Go</title>
</head>

<body>
    <main class="flex min-h-screen max-h-screen justify-center items-center">
        <div class="container h-screen grid grid-cols-2">
            <div
                class="flex justify-center items-center bg-gradient-to-tr from-purple-400 via-primary-blue to-cyan-500 px-20">
                <div class="flex flex-col justify-center items-center backdrop-blur-lg bg-white/50 p-16 gap-6">
                    <h1 class="text-5xl font-bold text-white">Instant and ready-to-use ordering with a selection of
                        <span class="text-sky-800">exotic</span> cars.
                    </h1>
                    <div class="flex justify-start items-start w-full">
                        <span class="text-white text-sm">Account authentication is required here</span>
                    </div>
                </div>
            </div>
            @yield('contents')
    </main>
</body>

</html>
