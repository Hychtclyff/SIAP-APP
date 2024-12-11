<x-layouts>
    <form action="{{ isset($row) ? route('location.update', $row->id) : route('location.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @if (isset($row))
            @method('PATCH')
        @endif
        <div class="flex
        border border-gray-500 p-10 rounded-md">


            <div class="home p-5 pl-14 w-1/2 flex flex-col  justify-start items-start gap-5">
                <p>Lengkapi form berikut untuk menambahkan data rumah anda ! </p>
                <div class="card-title flex items-center justify-start w-full gap-3">
                    @if (isset($row) && $row->photo != null)
                        <img src="/{{ $row['photo'] }}" alt="pp" class="h-12 w-12 rounded-full">
                    @else
                        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                clip-rule="evenodd" />

                        </svg>
                    @endif

                    <div class="flex flex-col gap-1">
                        <input type="text" name="name" id="name" placeholder="Masukkan Nama Disini"
                            value="{{ old('name', $row->name ?? '') }}"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                        <input type="enail" name="email" id="email"
                            value="{{ old('email', $row->email ?? '') }}" placeholder="Masukkan Nomor atau Email Disini"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                        <label for="photo"
                            class="relative cursor-pointer rounded-full bg-gray-100 p-2  w-1/2 font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="align-items-start">Upload a
                                file</span>
                            <input id="photo" name="photo" type="file" class="sr-only">
                            {{--      @error('photo')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror --}}

                        </label>
                    </div>

                    @error('home_photo')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                    @error('photo')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="  text-light  w-full font-light text-sm flex flex-col gap-3">
                    <div class="w-full">
                        <label for="nickname">Nama Panggilan</label>
                        <input type="text" name="nickname" id="nickname" placeholder="Masukkan Judul"
                            value="{{ old('nickname', $row->nickname ?? '') }}"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">

                        @error('nickname')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="address">Alamat</label>
                        <input type="text" name="address" id="address" placeholder="Masukkan Alamat"
                            value="{{ old('address', $row->address ?? '') }}"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                        @error('address')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="postal_code">Kode Pos</label>
                        <input type="text" name="postal_code" id="postal_code" placeholder="Masukkan Kode Pos"
                            value="{{ old('postal_code', $row->postal_code ?? '') }}"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">

                        @error('postal_code')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="link_house">Link Alamat</label>
                        <input type="text" name="link_house" id="link_house" placeholder="Masukkan Link Alamat"
                            value="{{ old('link_house', $row->link_house ?? '') }}"
                            class="block group rounded-xl  d-md border-0 py-1 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                    </div>
                    @error('link_house')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>



            </div>

            <div class="w-1/2 flex justify-center items-center border border-dashed">
                @if (isset($row) && $row->photo != null)
                    <div class="flex justify-center">

                        <img src="/{{ $row['home_photo'] }}" alt="home_photo" class="w-auto h-32">
                    </div>
                @else
                    <label for="home_photo"
                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="home_photo" name="home_photo" type="file" class="sr-only">
                        @error('photo')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </label>
                @endif
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>

    </form>
</x-layouts>
