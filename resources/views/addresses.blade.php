<x-layouts>
    <div class="flex flex-col ">
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    timer: 5000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            </script>
        @endif
        <div class="flex justify-center">
            <form action="{{ route('search') }}" method="GET">
                @if (session('error'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'No Results Found!',
                                text: `{!! session('error') !!}`,
                                timer: 3000,
                                showConfirmButton: false
                            });
                        });
                    </script>
                @endif
                <div class="search flex gap-3 ">
                    <input type="text" name="search" id="price" placeholder="Search"
                        class="block group rounded-full w-[40rem]  d-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                    <button type="submit"
                        class="bg-gray-800 p-2 rounded-full hover:animate-spin border border-gray-800 transition ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffff">
                            <path
                                d="M792-120.67 532.67-380q-30 25.33-69.64 39.67Q423.39-326 378.67-326q-108.44 0-183.56-75.17Q120-476.33 120-583.33t75.17-182.17q75.16-75.17 182.5-75.17 107.33 0 182.16 75.17 74.84 75.17 74.84 182.27 0 43.23-14 82.9-14 39.66-40.67 73l260 258.66-48 48Zm-414-272q79.17 0 134.58-55.83Q568-504.33 568-583.33q0-79-55.42-134.84Q457.17-774 378-774q-79.72 0-135.53 55.83-55.8 55.84-55.8 134.84t55.8 134.83q55.81 55.83 135.53 55.83Z" />
                        </svg>
                    </button>
                    @auth
                        <a href="{{ route('form.add') }}" type="submit"
                            class="bg-black text-border-black p-2 rounded-full hover:border-black hover:bg-white hover:text-black border transition px-10">
                            Add
                        </a>
                    @endauth

                </div>
            </form>
        </div>

        <div class="address-list">

            <div class="data my-10 grid grid-cols-4 z-10 gap-5 ">
                @foreach ($data as $e)
                    <a href="{{ route('detail', $e['id']) }}">
                        <div
                            class="card max-h-[35rem]  border border-gray-300 rounded-xl overflow-hidden  shadow-lg bg-transparent backdrop-blur-xl ">
                            <div class=" overflow-hidden border-black">
                                <img src="/{{ $e['home_photo'] ? $e['home_photo'] : 'img/house.png' }} "
                                    class="card-img h-52 w-full" alt="...">
                            </div>


                            <div class="card-body p-3 text-justify flex flex-col gap-3">

                                <sapn class="card-text text-center pb-3 border-0 border-b border-black font-semibold">
                                    Rumah
                                    {{ $e['nickname'] }}
                                </sapn>
                                <p class="text-gray-400">{{ $e['address'] }}
                                    <br>
                                    <span>Kode Pos : {{ $e['postal_code'] }}</span>

                            </div>
                            <div class=" overflow-hidden border-black p-3">
                                <img src="/img/Basemap-image.png " class="card-img h-auto w-full" alt="...">

                            </div>
                        </div>

                    </a>
                @endforeach
            </div>
        </div>

    </div>

</x-layouts>
