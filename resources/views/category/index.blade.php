@extends('layout.app')
    @section('content')
        <!-- component -->
        <div class="text-gray-900 bg-gray-200">
            <div class="p-4 flex">
                <h1 class="text-3xl">
                    Category
                </h1>
                
            </div>
            <div class="p-4 flex">
                <a class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" href="/category/add">
                    Add
                </a>    
            </div>

            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">#</th>
                            <th class="text-left p-3 px-5">Category</th>
                            <th></th>
                        </tr>

                        @foreach ($categories as $category)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <th class="p-3 px-5" flex justify-left>{{ $category->id }}</th>
                            <td class="p-3 px-5">{{ $category->category }}</td>
                            <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection