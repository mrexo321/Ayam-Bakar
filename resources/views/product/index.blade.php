<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <x-hero>
        @slot('title')
            Product
        @endslot
        @slot('content')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, corrupti officiis molestias quasi veritatis
            illo
            minus culpa natus optio, labore repellendus harum itaque porro et earum repellat accusamus blanditiis. Deleniti.
        @endslot
    </x-hero>
    <x-product />

</body>

</html>
