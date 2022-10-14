<x-layout>
    <div class="max-w-xl mx-auto mt-8">
        <div class="prose">
            <h1>{{ $news->title }}</h1>
            <div class="mt-5">
                <div class="flex items-center justify-between">
                    <time>
                        {{ $news->created_at->diffForHumans() }}
                    </time>
                    <div>views: {{ $news->view->views }}</div>
                </div>
            </div>
            <hr>
            <p>{{ $news->content }}</p>
        </div>
    </div>
    <script>
      axios.patch("{{ route('news.increment', $news->id) }}");
    </script>
</x-layout>
