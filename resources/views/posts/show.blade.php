<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-5xl font-bold text-gray-600"> {!!$post->name!!}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="@if($post->image) {{Storage::url($post->image->url)}} @else img/mujer.jpg @endif" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {!!$post->category->name!!}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                <img class="w-36 h-20 object-contain object-center" src="@if($similar->image) {{Storage::url($similar->image->url)}} @else img/mujer.jpg @endif" alt="">
                                <span class="ml-2 text-gray-600">{!!$similar->name!!}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>