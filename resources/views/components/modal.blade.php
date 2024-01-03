@props(['name','title'])
<div 
    x-data="{show : false , name : '{{ $name }}'}" 
    x-show="show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    x-transition
    style="display: none"

    class="fixed z-50 inset-0">
    <div @click="show = false" class="bg-gray-600 fixed opacity-40 z-10 inset-0"></div>
    <div class="bg-white m-auto fixed inset-0 z-50 max-w-2xl h-[80vh] rounded">
        <div class="py-2 px-4 flex items-center justify-between">
            <h2 class="text-center grow">{{ $title }}</h2>
            <p @click="show = false" class="border hover:cursor-pointer px-4 py-2 rounded-xl hover:bg-gray-50 shadow">X</p>
        </div>
        <div class="px-4">
            {{ $body }}
        </div>
    </div>
</div>