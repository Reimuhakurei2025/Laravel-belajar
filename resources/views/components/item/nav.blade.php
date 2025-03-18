@props(['active'=>false])

<a {{$attributes}} class="{{$active ? 'rounded-md bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700'}} px-3 py-2 text-sm font-medium" aria-current="{{$active?'page':false}}">{{$slot}}</a>