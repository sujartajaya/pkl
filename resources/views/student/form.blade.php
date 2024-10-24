@extends('layout.app')
    @section('content')
        <div class="min-h-screen flex items-center justify-center w-full">
            <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
                <h4 class="block text-xl font-medium text-slate-800 dark:text-gray-200">
                    Complate Your Register
                </h4>
                <p class="text-slate-500 font-light dark:text-gray-200">
                    Nice to meet you {{ $name }}! Enter your details to register.
                </p>
                <form class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96" action="<?php if (isset($nim)) { echo "/student/edit"; } else { echo "/student/add"; } ?>" method="post">
                    @csrf
                    @if (isset($nim))
                    <input type='hidden' name='_method' value='PATCH'>
                    @endif
                    <div class="mb-1 flex flex-col gap-6">
                    <div class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm text-slate-600 dark:text-gray-200">
                        NIM
                        </label>
                        <input type="text" name="nim" class="w-full placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Your NIM" required autofocus value="{{old('nim')}} <?php if (isset($nim)) echo $nim; ?>" <?php if (isset($nim)) echo "disabled" ?>/>
                        @error('nim')
                        <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm text-slate-600 dark:text-gray-200">
                        Fakultas
                        </label>
                        <input type="text" name="fakultas" class="w-full placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Fakultas" required value="{{ old('fakultas') }} <?php if(isset($fakultas)) echo $fakultas; ?>"/>
                        @error('fakultas')
                        <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm text-slate-600 dark:text-gray-200">
                        Program Studi
                        </label>
                        <input type="text" name="prodi" class="w-full placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Program Studi" required value="{{ old('prodi') }} <?php if(isset($prodi)) echo $prodi; ?>"/>
                        @error('prodi')
                        <div class="invalid block text-sm font-medium text-gray-700 dark:text-red-600 mb-2">{{$message}}</div>
                        @enderror
                    </div>
                    </div>
                    <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
                    <?php if (isset($nim)) {echo "Update"; } else { echo "Save"; } ?>
                    </button>
                </form>
            </div>    
        </div>
    @endsection
    