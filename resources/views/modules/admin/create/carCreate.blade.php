<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Services</title>
</head>

<body>
    <main class="flex justify-center items-center min-h-screen">
        <div class="container">
            <form action="{{ url('/auth/services') }}" method="post"
                class="flex flex-col bg-white shadow-lg justify-center items-start mx-20 p-16 rounded-xl gap-7 max-h-screen">
                @csrf
                <div class="flex flex-col gap-2">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="w-14">
                    </a>
                    <h2 class="text-3xl font-bold">Login</h2>
                    <span>Take a control here</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="username" class="font-semibold text-xl">Username</label>
                    <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="username" name="username"
                        placeholder="Type your username here">
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="password" class="font-semibold text-xl">Password</label>
                    <input type="password" class="border-2 px-2 py-1 rounded-md w-full" id="password" name="password"
                        placeholder="Type your password here">
                </div>
                <button type="submit"
                    class="bg-primary-blue w-full py-3 rounded-lg text-white font-bold">Login</button>
            </form>
        </div>
    </main>

</body>

</html>
