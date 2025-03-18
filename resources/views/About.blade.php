<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <h1 class="border-b">My Name is, {{$name}}</h1>
    <p class="text-justify">&ensp;&ensp;&ensp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, delectus. Reiciendis dolorum eos dolore soluta aperiam magnam placeat minus ea, repellat, at expedita modi? Libero consectetur harum quis modi animi odio. Libero saepe distinctio laudantium itaque inventore asperiores repudiandae eligendi magnam aspernatur quasi debitis et, explicabo molestias fugiat reiciendis dolor consectetur provident ducimus rem voluptatum! Provident tenetur autem dolor voluptatum nulla saepe velit, dignissimos, iste at illum consectetur sit commodi eligendi beatae. Est, id vero sapiente, quaerat eveniet modi assumenda optio sed consectetur magni consequuntur. Nihil excepturi quo minima facere? Reiciendis maxime optio eaque tempore expedita eum aliquam blanditiis aut quae enim, quasi provident earum voluptatibus exercitationem ullam laborum, eius commodi iure recusandae sapiente ab harum, natus quisquam tempora! Voluptatum totam ea mollitia impedit, numquam at perferendis, eos deserunt laborum enim, cumque porro accusamus.
    </p>
    @foreach ($Posts as $Post)
    <article class="pt-12 pb-5 text-justify">
    <a href="#" class="text-2xl border-b-1 font-bold text-gray-800">{{$Post['Title']}}</a>
    <div>
        <img src="img/smk.jpg" class="max-w-1/2" style="margin-left: 25%; margin-top: 1rem">
    </div>
    <p class="mt-1">&ensp;&ensp;&ensp;{{Str::limit($Post['Body']), 50}}</p>
    <a href="/about/{{$Post['id']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo</a>
    </article>
    @endforeach
    {{-- <article class="text-justify">
        <a href="#" class="text-2xl border-b-1 font-bold text-gray-800">SMP (sekolah Menengah Pertama)</a>
    <div>
        <img src="img/smp.jpg" class="max-w-1/2" style="margin-left: 25%; margin-top: 1rem">
    </div>
    <p class="mt-1">&ensp;&ensp;&ensp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio est, ipsa atque distinctio ut non minus maiores eligendi cum delectus. Facilis nesciunt, consequuntur inventore voluptates consequatur tempore ipsa repellendus at.
    Reprehenderit rem eaque laborum eligendi inventore harum quo optio! Reiciendis quidem mollitia quam illum sapiente non nulla, consequatur dicta animi ipsa! Quod unde dolorem quia vel est, a assumenda minima!
    Iure quae doloribus numquam ipsum quam in asperiores necessitatibus deleniti earum error ipsa quasi itaque esse ad aut aliquam eligendi assumenda velit, fuga ratione. Blanditiis totam eos voluptas voluptatibus ratione!</p>
    </article> --}}

  </x-layout>