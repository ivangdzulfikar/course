<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

</head>

<body class="p-10 flex justify-between gap-5">

    <div class="grow">
        <livewire:user-list />
    </div>
{{-- 
    <div class="flex justify-center items-center">

        <livewire:form-register />
        
    </div> --}}
    {{-- <div>
        <livewire:todo-list />
    </div> --}}

</body>

</html>