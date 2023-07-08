@if ($title !== 'Create New Data')
    <nav class="flex justify-center items-center sticky top-0 backdrop-blur-md">
        <div class="container flex px-28 py-5 justify-between items-center">
            <a href="" class="flex justify-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-7">
                <span class="font-bold text-xl">{{ $title }} PAGE</span>
            </a>
            <div class="flex gap-7">
                <a href="{{ url('/logoutAdmin') }}" class="font-bold text-lg text-primary-blue">Logout</a>
            </div>
        </div>
    </nav>
@endif
