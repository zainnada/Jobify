@props(['active'=>false])

@php
    $active_page_class = "rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white";
    $normal_page_class = "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white";
@endphp

<a aria-current="{{$active ?'page':'false'}}"
   class="{{$active ? $active_page_class : $normal_page_class }}"
    {{$attributes}}
>{{$slot}}</a>
