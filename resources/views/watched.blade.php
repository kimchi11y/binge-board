<x-layout>
    <x-slot:header>
        <h1>Watched</h1>
    </x-slot:header>

    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
        @foreach($movies as $movie)
            <li class="bg-white shadow-md rounded-lg p-5 flex flex-col items-start space-y-2">
                <h1 class="text-lg font-bold text-gray-800">{{$movie['title']}}</h1>
                <p class="text-sm text-gray-600"><strong>Genre:</strong> {{$movie['genre']}}</p>
                <p class="text-sm text-gray-600"><strong>Year:</strong> {{$movie['year']}}</p>
                <p class="text-sm text-gray-600"><strong>Rating:</strong> ⭐ {{$movie['rating']}}</p>
            </li>
        @endforeach
    </ul>

</x-layout>
