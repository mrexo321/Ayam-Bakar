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
            Artikel
        @endslot
        @slot('content')
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet provident tempore explicabo dolore laudantium,
            ex nobis, adipisci voluptatem ipsam hic rem sint, sed ducimus numquam tempora illum quas corporis cum aliquam.
            Cumque, sunt ex. Perferendis, necessitatibus! Illo accusantium aliquid, perferendis autem illum molestias
            ratione harum praesentium voluptatem itaque, assumenda soluta!
        @endslot
    </x-hero>
    <x-articles>

    </x-articles>
</body>

</html>
