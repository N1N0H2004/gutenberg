<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Gutenberg Form</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
    <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>

    <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <!-- Vite Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100">

<div class="container mx-auto py-8">
    <form action="{{ route('gutenbergs.update', $gutenberg) }}" method="post" class="max-w mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="titel" class="block text-gray-700 font-bold mb-2">Titel:</label>
            <input type="text" id="titel" name="titel" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-gray-700 font-bold mb-2">Slug:</label>
            <input type="text" id="slug" name="slug" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="inhoud" class="block text-gray-700 font-bold mb-2">Inhoud:</label>
            <textarea id="inhoud" name="inhoud" class="hidden">{{ $gutenberg->inhoud }}</textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="w-auto bg-gray-300 tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Update Gutenberg</button>
            <a href="{{ route('gutenbergs.index', $gutenberg->slug) }}" class="w-auto bg-gray-300 tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>
        </div>
    </form>
</div>

<script>
    window.onload = function() {
        Laraberg.init('inhoud');
    }
</script>
</body>
</html>
