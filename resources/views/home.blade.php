<x-layouts>
    <div class="flex">

        <div class="home p-10  w-1/2 flex flex-col justify-start items-center gap-5">
            <div class="welcome  text-light text-xl">
                <Span class="text-6xl  font-extrabold">Selamat Datang @guest
                        Di RT 009.
                    @endguest
                    @auth
                        Admin
                    @endauth
                </Span>
                <p>Kami siap mempermudah kebutuhan anda mengenai Alamat Penduduk RT Kami.</p>
            </div>
            <div class='flex justify-start items-start w-full '>
                @guest

                    <a href="{{ route('login') }}"
                        class="px-10 py-2 bg-black shadow-md hover:bg-white border border-black rounded-xl text-white hover:text-black transition">
                        Login</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="px-6 py-2 text-white bg-red-600 rounded-lg shadow-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition ease-in-out duration-150">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>



        </div>

        <div class="w-1/2">
            <img src="/img/hero.png" alt="hero" class="h-auto w-full">
        </div>
    </div>

</x-layouts>
