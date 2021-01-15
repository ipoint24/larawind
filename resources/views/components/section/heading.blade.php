@props([
'icon' => ''
])

<div {{ $attributes->merge(['class'=>'flex flex-row justify-left items-center'])}}>
    <div class="h6 text-green-700 {{$icon}}"></div>
    <div {{ $attributes->merge(['class'=>'h6 px-2'])}}>
        {{$text}}
    </div>
</div>


