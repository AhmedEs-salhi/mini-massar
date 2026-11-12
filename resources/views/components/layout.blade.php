@props([
    'title' => 'Hello world'
])
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    {{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
<x-nav-bar>
    <li><a>Item 1</a></li>
    <li><a>Item 3</a></li>
</x-nav-bar>
<main class="p-5">
    {{ $slot }}
</main>
</body>
