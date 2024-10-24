@extends('layout.app')
    @section('content')
        <div class="min-h-screen flex items-center justify-center w-full">
            <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
                <h4 class="block text-xl font-medium text-slate-800 dark:text-gray-200">
                    New Category
                </h4>
                <form class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96" action="/category/add" method="post">
                    @csrf
                    <div class="mb-1 flex flex-col gap-6">
                    <div class="w-full max-w-sm min-w-[200px]">
                        <label class="block mb-2 text-sm text-slate-600 dark:text-gray-200">
                        Category
                        </label>
                        <input type="text" name="category" class="w-full placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Category" required autofocus/>
                    </div>
                    </div>
                    <div class="inline-flex items-center mt-2">
                    </div>
                    <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
                    Save
                    </button>
                </form>
            </div>    
        </div>
    @endsection
    