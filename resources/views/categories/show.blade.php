<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-hero>
        @slot('title')
            {{ $category->name }}
        @endslot
        @slot('content')
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione temporibus quod esse nisi ipsa officiis ea
            quisquam fugit eligendi earum magni eaque minus quo cumque, nulla numquam fuga? Aliquam quos soluta ad
            voluptatum dolor et veritatis voluptates eveniet officia ipsam!
        @endslot
    </x-hero>
</body>

</html>
