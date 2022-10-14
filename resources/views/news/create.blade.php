<x-layout>
    <div class="max-w-xl mx-auto mt-8">
        <form method="post" action="{{ route('news.store') }}">
            @csrf

            <div>
                <label for="title">Title</label>
                <input class="w-full" id="title" type="text" name="title" placeholder="title...">
            </div>

            <div class="mt-5">
                <label for="content">Content</label>
                <textarea name="content" rows="8" id="content" class="w-full" placeholder="Content..."></textarea>
            </div>

            <div class="my-8">
                <button type="submit" class="px-5 py-2 bg-teal-500 text-white hover:bg-teal-600">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
