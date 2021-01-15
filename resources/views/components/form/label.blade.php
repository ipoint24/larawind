@props([
'for' => ''
])
<label {{ $attributes->merge(['class'=>'block uppercase tracking-wide text-gray-700 text-xs pt-2 font-bold mb-2']) }}
       for="{{$for}}"
>
    {{ $slot }}
</label>
