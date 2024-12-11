<x-layouts>
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
    <div class="flex ">
        <div class="about p-5  w-1/2 flex flex-col justify gap-10 py-10">
            <div class="welcome  text-light text-xl flex flex-col gap-5 items-start justify-center text-justify">
                <div class="card-body p-3 text-justify flex flex-col gap-3 ">

                    <sapn class="card-text  pb-3  border-black font-semibold text-5xl">Rumah {{ $row->nickname }}
                    </sapn>
                    <div class="card-title flex items-center gap-3">
                        <img src="/{{ $row->photo ? $row->photo : 'img/Basemap-image.png' }}"
                            class="w-10 h-10 rounded-full" alt="">
                        <div class="flex flex-col ">
                            <h5>{{ $row->name }}</h5>
                            <p class="text-sm text-gray-400">{{ $row->email }}</p>
                        </div>
                    </div>
                    <p class="text-gray-400">{{ $row->address }}</p>

                    <span>Kode Pos : {{ $row->postal_code }}</span>

                </div>
                <div class=" overflow-hidden border-black w-4/5 ">
                    <a href={{ $row->link_house }} target="_blank">

                        <img src="/img/Basemap-image.png " class="card-img h-auto w-full" alt="...">
                    </a>
                </div>
            </div>


        </div>
        <div class="w-1/2 flex flex-col items-start gap-5 justify-start">
            <img src="/{{ $row->home_photo ? $row->home_photo : 'img/house.png' }}" alt="hero"
                class="h-auto w-full ">

            <div class='flex justify-end items-center w-full gap-3'>

                <a href={{ route('addresses') }}
                    class="px-10 py-1 bg-white shadow-md hover:bg-black border border-black rounded-full text-black hover:text-white transition">
                    Back</a>
                @auth
                    <form action="{{ route('location.destroy', $row->id) }}" method="POST"
                        id="delete-location-{{ $row->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button"
                            class="px-10 py-1 bg-white shadow-md hover:bg-black border border-black rounded-full text-black hover:text-white transition"
                            onclick="confirmDelete({{ $row->id }})">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('location.update', $row->id) }}"
                        class="px-10 py-1 bg-white shadow-md hover:bg-black border border-black rounded-full text-black hover:text-white transition">
                        Edit</a>
                @endauth


            </div>
        </div>


    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-location-${id}`).submit();
                }
            });
        }
    </script>


</x-layouts>
