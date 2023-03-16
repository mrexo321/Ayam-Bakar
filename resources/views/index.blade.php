<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isann</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans">
    <x-hero>
        @slot('title')
            Ayam bakar bu ratna
        @endslot
        @slot('content')
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione temporibus quod esse nisi ipsa officiis ea
            quisquam fugit eligendi earum magni eaque minus quo cumque, nulla numquam fuga? Aliquam quos soluta ad
            voluptatum dolor et veritatis voluptates eveniet officia ipsam!
        @endslot
    </x-hero>
    <x-feature />
</body>

</html>
