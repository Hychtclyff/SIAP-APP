<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex mx-auto   max-h-lvh overflow-hidden sm:px-6 lg:px-0 bg-black text-white">


        <div class="home p-10   w-1/2 flex flex-col justify-start py-36  items-center gap-5 relative">
            <img src="/img/logo-dark.png" alt="" class="absolute top-0 left-0 m-5">
            <div class="welcome  text-light text-xl">
                <p>Selamat Datang, Admin !</p>
            </div>
            <div class='flex justify-center  w-full '>

                <form class="space-y-5 w-3/5" method="POST" action={{ route('login.authenticate') }}>
                    @csrf
                    <p>Silahkan masukkan Username dan Password</p>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="@error('email')
                                    is-invalid
                                @enderror block w-full text-black pl-5 rounded-md border-0 py-3 shadow-sm ring-1  ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('email')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Login Gagal!',
                                        text: `{!! session('error') !!}`,
                                        timer: 3000,
                                        showConfirmButton: false
                                    });
                                });
                            </script>
                        @enderror

                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6">Password</label>
                            <div class="text-sm">

                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                value="12345678" required
                                class="text-black pl-5 block w-full rounded-md border-0 py-3 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-white border border-gray-800 hover:text-gray-800 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                            Login
                        </button>
                    </div>
                </form>
            </div>



        </div>

        <div class="w-1/2">
            <img src="/img/bg-login.png" alt="hero" class="h-auto w-full">
        </div>
    </div>
</body>

</html>
