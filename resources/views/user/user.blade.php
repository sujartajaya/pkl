@extends('layout.app')
    @section('content')
        <div class="text-gray-900 bg-gray-200">
            <div class="p-4 flex">
                <h1 class="text-3xl">
                    Data User
                </h1>
                
            </div>
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">#</th>
                            <th class="text-left p-3 px-5">Name</th>
                            <th class="text-left p-3 px-5">Email</th>
                            <th class="text-left p-3 px-5">Type</th>
                            <th class="text-left p-3 px-5">NIM</th>
                            <th class="text-left p-3 px-5">Fakultas</th>
                            <th class="text-left p-3 px-5">Prodi</th>
                            <th></th>
                        </tr>
                        @foreach ($users as $user)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <th class="p-3 px-5" flex justify-left>{{ $user->id }}</th>
                            <td class="p-3 px-5">{{ $user->name }}</td>
                            <td class="p-3 px-5">{{ $user->email }}</td>
                            <td class="p-3 px-5">{{ $user->type }}</td>
                            <td class="p-3 px-5">{{ $user->student->nim }}</td>
                            <td class="p-3 px-5">{{ $user->student->fakultas }}</td>
                            <td class="p-3 px-5">{{ $user->student->prodi }}</td>
                            <td class="p-3 px-5 flex justify-end"><a type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" href="#">Edit</a><a type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" href="#">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-4 mx-4">
                {{ $users->links() }}
            </div>
        </div>        
    @endsection