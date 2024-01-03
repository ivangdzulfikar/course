<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

</head>

<body class="p-10 items-center">

    <x-modal title="Modal 1" name="modal1">
        <x-slot:body>
            <p>
                Modal 1 Body
            </p>
        </x-slot:body>
    </x-modal>

    <x-modal title="Modal 2" name="modal2">
        <x-slot:body>
            <livewire:form-register :lazy='true'/>
        </x-slot:body>
    </x-modal>

    <button x-data @click="$dispatch('open-modal',{name : 'modal1'})" class="bg-sky-500 px-3 py-1 rounded hover:bg-sky-700 text-white">Modal 1</button>
    <button x-data @click="$dispatch('open-modal',{name : 'modal2'})" class="bg-teal-500 px-3 py-1 rounded hover:bg-teal-700 text-white">Modal 2</button>

    <div class="mt-5">
        <livewire:user-list search=""/>
    </div>

{{-- @livewireScripts --}}
</body>

</html>