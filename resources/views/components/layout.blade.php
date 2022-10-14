<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alefba Web</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body class="antialiased">
<header class="border-b border-gray-300 py-5 bg-gray-50">
    <div class="max-w-xl mx-auto">
        <ul class="flex space-x-8 font-bold">
            <li>
                <a class="py-4" href="{{ route('news.index') }}">Index</a>
            </li>
            <li>
                <a class="py-4" href="{{ route('news.popular') }}">Popular</a>
            </li>
            <li>
                <a class="py-4" href="{{ route('news.create') }}">Create News</a>
            </li>
        </ul>
    </div>
</header>
{{ $slot }}
</body>
