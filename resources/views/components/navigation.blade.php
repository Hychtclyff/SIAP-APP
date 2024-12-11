<nav>
    <div class="flex justify-center px-4 border-b @guest border-white @endguest @auth border-black @endauth">
        <div
            class="flex container mx-auto sm:px-6 lg:px-28 h-16 items-center justify-between  w-full @guest
bg-white @endguest">
            <div class="flex items-center w-1/3">
                <div class="flex-shrink-0 text-gray-800  font-bold text-4xl">
                    <a href="/" :active="request() - > is('blog')">
                        @guest
                            <img src="/img/siap-logo.png" alt="siap-logo.png">

                        @endguest
                        @auth
                            <img src="/img/logo-dark.png" alt="siap-logo.png">

                        @endauth
                    </a>
                </div>

            </div>

            <div class="  ml-4 flex items-center md:ml-6 justify-start w-2/3 gap-2 ">
                @guest
                    <x-nav-link href="/" :active="request()->is('/')">
                        <span class="hover:text-black ">Home</span>
                    </x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">
                        <span class="hover:text-black ">About</span>
                    </x-nav-link>
                    <x-nav-link href="/addresses" :active="request()->is('addresses')">
                        <span class="hover:text-black ">Address</span>
                    </x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">
                        <span class="hover:text-black ">Conctact</span>
                    </x-nav-link>
                @endguest
                @auth
                    <x-nav-link href="/" :active="request()->is('/')">
                        <span class="hover:text-white ">Home</span>
                    </x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">
                        <span class="hover:text-white ">About</span>
                    </x-nav-link>
                    <x-nav-link href="/addresses" :active="request()->is('addresses')">
                        <span class="hover:text-white ">Address</span>
                    </x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">
                        <span class="hover:text-white ">Conctact</span>
                    </x-nav-link>
                @endauth


            </div>

        </div>
    </div>


</nav>
