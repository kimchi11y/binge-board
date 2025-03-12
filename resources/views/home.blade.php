<x-layout>
   <p>Keep track of all your movies and tv shows in one place!</p>
    <x-slot:search>
        <form method="GET" action="/search" class="flex justify-center mt-2 md:text font-normal">
            <input type="text" name="search" class="border-2 border-gray-300 px-2 rounded-lg " placeholder="Search for movie or tv show">
            <button type="submit" class="bg-blue-500 ml-2 text-white p-1 rounded-lg">Search</button>
        </form>
    </x-slot:search>
</x-layout>
