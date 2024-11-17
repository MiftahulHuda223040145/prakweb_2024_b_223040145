<x-dashboard.layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center my-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-xs text-gray-900 dark:text-white">
                                <div>
                                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">{{$post ->category->name}}</h1>
                                    <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $post -> created_at -> diffForHumans()}}</p>
                                    <a href="/dashboard/posts" class="font-medium"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Back to my posts</span></a>
                                    <a href="/dashboard/posts/{{$post->slug}}/edit" class="font-medium"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Edit</span></a>
                                    <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="inline">
                                        @method('delete')
                                        @csrf
                                        <a href="" class="font-medium"><span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2 py-0.5 rounded dark:bg-red-900 dark:text-red-300"><button type="submit" onclick="return confirm('Are You Sure?')">Delete</button></span></a>
                                    </form>
                                </div>
                            </div>
                        </address>
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
                    </header>
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </main>
    </div>
</x-dashboard.layout>