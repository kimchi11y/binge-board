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

<div class="flex justify-center text-center m-4">
    <p class="text-center mt-4">
        {{$slot}}
    </p>
</div>
</body>
</html>
