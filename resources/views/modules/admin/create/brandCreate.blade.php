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
            <form action="{{ url('/manage/brand') }}" method="post"
                class="flex flex-col bg-white  justify-center items-start px-28 gap-7 min-h-screen">
                @csrf
                <div class="flex flex-col">
                    <div class="flex gap-2">
                        <a href="{{ url('/manage/brand') }}" class="text-3xl">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                        <h2 class="text-3xl font-bold">Create New Data</h2>
                    </div>
                    <span>Create new data here</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <label for="brand" class="font-semibold text-xl">Brand Name</label>
                    <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="brand" name="brand"
                        placeholder="Type your brand name here">
                </div>
                <button type="submit"
                    class="bg-primary-blue w-full py-3 rounded-lg text-white font-bold">Create</button>
            </form>
        </div>
    </main>

</body>

</html>
