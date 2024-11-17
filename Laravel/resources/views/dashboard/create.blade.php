<x-dashboard.layout>
    <x-slot:title>{{$title}}</x-slot:title>
    
    <form class="max-w-sm mx-auto mt-8" method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
        @error('title')
        block mb-2 text-sm font-medium text-red-700 dark:text-red-500
        @enderror
        ">Title</label>
        <input type="title" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5
        @error('title')
        border-red-500 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 mb-5"
        @enderror
        required autofocus value="{{ old('title') }}" />
        @error('title')
        <p class="mb-5 text-sm text-red-500">{{$message}}</p>
        @enderror
        </div>
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white
        @error('slug')
        block mb-2 text-sm font-medium text-red-700 dark:text-red-500
        @enderror
        ">slug</label>
        <input type="slug" id="slug" name="slug" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
        @error('slug')
        border-red-500 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"
        @enderror
        required value="{{ old('slug') }}" />
        @error('slug')
        <p class="mb-5 text-sm text-red-500">{{$message}}</p>
        @enderror
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($categories as $category)
        @if(old('category_id') == $category->id)
        <option value="{{$category->id}}" selected>{{$category->name}}</option>
        @endif
        <option value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
        </select>
        <label for="body" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white
        @error('body')
        block mb-2 text-sm font-medium text-red-700 dark:text-red-500
        @enderror
        ">body</label>
        @error('body')
            <p class="mb-5 text-sm text-red-500">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body">
        <trix-editor input="body" class="trix-content"></trix-editor>
        </div>
        <div class="flex items-start mb-5">
        </div>
        <button type="submit" class="mb-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Post</button>
    </form>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>

</x-dashboard.layout>