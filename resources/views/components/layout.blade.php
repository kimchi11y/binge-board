<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="w-full h-full bg-gray-100">
<h1 class="text-3xl font-bold text-center mt-4 text-red-600 md:text-5xl">
    BingeBoard
</h1>


<div class=" justify-center text-center font-bold md:text-2xl m-4">
    <p class="">
        {{$slot}}
    </p>

</div>

<!-- Navigation Links -->
<div class="flex justify-center space-x-4 mt-4">
    <a href="{{ route('home') }}" class="text-blue-500 font-bold hover:underline">Home</a>
    <a href="{{ route('watched') }}" class="text-blue-500 font-bold hover:underline">Watched</a>
</div>
</body>
</html>
