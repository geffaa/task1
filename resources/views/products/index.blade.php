<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products by Category</title>

    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-8 text-center">Products by Category</h1>

        <div class="mb-8 flex justify-center">
            <ul class="flex space-x-4">
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ url('/products/category/' . $category->id) }}"
                           class="px-4 py-2 rounded @if($categoryId == $category->id) bg-blue-500 text-white @else bg-gray-300 text-gray-900 hover:bg-gray-400 @endif">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <ul class="space-y-4">
                @foreach ($products as $product)
                    <li class="bg-white p-4 rounded shadow">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                                <p class="text-gray-600">${{ $product->price }}</p>
                            </div>
                            <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Buy</button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
