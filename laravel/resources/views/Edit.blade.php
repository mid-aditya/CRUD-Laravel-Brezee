<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="#"> + Add New Data</a>
                    <table border="1">
                        <tr>
                            <th>Field 1</th>
                            <th>Field 2</th>
                            <th>Field 3</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($game as $Get)
                        <tr>
                            <td>{{ $Get->Video }}</td>
                            <td>{{ $Get->judul }}</td>
                            <td>{{ $Get->gambar }}</td>
                            <td>{{ $Get->link }}</td>
                            <td>
                                <a href="/controller/edit/{{ $Get->Video }}">Update</a>
                                |
                                <a href="/controller/hapus/{{ $Get->Video }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
