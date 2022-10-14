<x-layout>
    <div class="max-w-xl mx-auto mt-8">
        <ul class="list-none divide-y">
            @foreach($news as $post)
                <li class="py-5">
                    <a href="{{ route('news.show', $post) }}">
                        <strong>{{ $post->title }}</strong>
                        <span class="text-gray-500 text-sm">
                            (ID: {{ $post->id }})
                        </span>
                    </a>
                    <div class="text-gray-500 text-sm">views: {{ $post->view->views }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
