<nav class="w-4/5 mx-auto bg-white flex justify-around py-2 px-2 gap-5">
    <h3 class="font-bold text-3xl"><a href="{{ route('home') }}"><i class="fa-solid fa-diamond"></i> SuaraKita</a></h3>
    <ul class="flex w-4/5 justify-between items-center">
        <div class="flex gap-5">
            <li><a class="{{ request()->is('make-petition') ? 'active border-b-4 border-b-red-500' : '' }} hover:border-b-4 hover:border-b-red-500" href="{{ route('create-petition') }}">Buat Petisi</a></li>
            <li><a class="{{ request()->is('agenda') ? 'border-b-4 border-b-red-500' : '' }} hover:border-b-4 hover:border-b-red-500" href="{{ route('agenda') }}">Agenda</a></li>
            <li><a class="{{ request()->is('discovery') ? 'border-b-4 border-b-red-500' : '' }} hover:border-b-4 hover:border-b-red-500" href="{{ route('discovery') }}">Jelajah Petisi</a></li>
        </div>              
        <div class="flex gap-3 w-72 justify-center items-center" x-data="{ open: false }">
            <li class="w-full">
                <input class="px-3 py-1 border-b border-b-2" type="search" name="" id="" placeholder="Telusuri">
            </li>
            @auth
            <li>
                <button type="button" @click="open = ! open"><i class="fa-solid fa-user"></i></button>
            </li>
            <div x-show="open" class="absolute right-28 bg-slate-100 w-24 p-2 rounded-md top-10 flex flex-col gap-2">
                <li><a href="">Profil</a></li>
                <li><a href="">Petisi Saya</a></li>
                <li><a href="">Logout</a></li>
            </div>
            @endauth
            @guest
                <li><a href="{{ route('register') }}">Daftar</a></li>
            @endguest
        </div>
    </ul>
</nav>