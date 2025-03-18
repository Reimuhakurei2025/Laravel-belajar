<x-layout>
    <x-slot:title>{{$post['Title']}}</x-slot:title>


    <article class="pt-12 pb-5 text-justify">
    <a class="text-2xl border-b-1 font-bold text-gray-800">{{$post['date']}}</a>
    <div>
        <img src="{{$post['image']}}" class="max-w-1/2" style="margin-left: 25%; margin-top: 1rem">
    </div>
    <p class="mt-1">&ensp;&ensp;&ensp;{{$post['Body'] }}</p>
    <a href="/about" class="font-medium text-blue-500 hover:underline">&laquo Back to About</a>
    </article>

  </x-layout>
