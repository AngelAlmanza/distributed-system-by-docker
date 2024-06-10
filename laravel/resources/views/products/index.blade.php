<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Product</a>
                </div>

                <div class="container px-4 p-6">
                    <h1 class="text-2xl font-bold mb-6">Products</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($products as $product)
                            <div class="bg-white shadow-lg rounded-lg p-4">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
                                <div class="p-4">
                                    <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
                                    <p class="text-gray-700 mb-2">{{ $product->description }}</p>
                                    <p class="text-gray-900 font-bold mb-2">Price: ${{ $product->price }}</p>
                                    <p class="text-gray-900 font-bold mb-2">Stock: {{ $product->stock }}</p>
                                    <p class="text-gray-900 font-light mb-2">Created by: {{ $product->user->name }}</p>
                                    <p class="text-gray-900 font-light mb-2">Created at: {{ $product->created_at }}</p>

                                    @if($product->user_id == auth()->id())
                                        <div class="flex mt-4">
                                            <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
