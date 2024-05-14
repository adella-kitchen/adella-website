@extends('layouts.auth')

@section('title', 'Register')
@section('auth')
    <section id="login" class="flex">
        <div class="w-1/2 h-[100vh] bg-red rounded-r-[50px] hidden lg:flex"></div>
        <div class="w-full lg:w-1/2 h-[100vh] py-[50px] flex justify-center items-center">
            <div class="w-full flex justify-center flex-col items-center">
                <h1 class="text-center font-bold text-[28px] text-navy">REGISTER PAGE</h1>
                <p class="w-[450px] text-center font-light mb-[30px]">Masukan email dan password dengan benar</p>
                <form action="/add-user" method="POST"
                    class="flex flex-col justify-center w-full px-8 sm:px-14 sm:max-w-[650px] md:px-16">
                    @csrf
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="name" class="font-semibold text-[18px]">Nama Pengguna</label>
                        <input type="text" name="name" id="name" class="border border-grey4 w-full px-5 py-4"
                            placeholder="Masukan nama Anda!">
                        @error('email')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="email" class="font-semibold text-[18px]">Email</label>
                        <input type="text" name="email" id="email" class="border border-grey4 w-full px-5 py-4"
                            placeholder="Masukan email Anda!">
                        @error('email')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="password" class="font-semibold text-[18px]">Password</label>
                        <input type="password" name="password" id="pasword" class="border border-grey4 w-full px-5 py-4"
                            placeholder="Masukan password Anda!">
                        @error('password')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <span class="flex flex-col gap-2">
                        <label for="konfirmasi_password" class="font-semibold text-[18px]">Konfirmasi Password</label>
                        <input type="password" name="konfirmasi_password" id="konfirmasi_password"
                            class="border border-grey4 w-full px-5 py-4" placeholder="Masukan konfirmasi password Anda!">
                        @error('password')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <div id="other-step" class="my-6">
                        <hr>
                        <p class="dash-line text-grey3 font-light">atau cara lain</p>
                        <hr>
                    </div>
                    <button
                        class="py-3 px-4 flex items-center gap-2 text-lg justify-center border border-slate-200 font-semibold text-grey1">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0 0 48 48">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>Google
                        Akun</button>
                    <button type="submit"
                        class="bg-red mt-8 flex px-20 py-2 font-semibold text-white mx-auto">REGISTER</button>

                </form>
            </div>
        </div>
    </section>
@endsection
