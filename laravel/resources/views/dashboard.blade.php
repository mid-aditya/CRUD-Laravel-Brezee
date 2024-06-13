<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="alertMessage" class="alert alert-success" role="alert">
                {{ __("You're logged in!") }}
            </div>

            <div class="mb-4">
                <a href="{{ route('games.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Game</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Video</th>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Gambar</th>
                                <th class="px-4 py-2">Link</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $game->video }}</td>
                                    <td class="border px-4 py-2">{{ $game->judul }}</td>
                                    <td class="border px-4 py-2">{{ $game->gambar }}</td>
                                    <td class="border px-4 py-2">{{ $game->link }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('games.edit', $game->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            var alertMessage = document.getElementById('alertMessage');
            alertMessage.parentNode.removeChild(alertMessage);
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
</x-app-layout>
