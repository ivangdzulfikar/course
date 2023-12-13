<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

</head>

<body class="p-10">

    <p class="text-3xl  text-center font-bold underline">
        Hello world!
    </p>
    <livewire:click />
</body>

</html>