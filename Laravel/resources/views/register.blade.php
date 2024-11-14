<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register</h2>
                </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/register" method="post">
                @csrf
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required value="{{old('name')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 
                        @error('name')
                        peer
                        invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        @enderror
                        ">
                        @error('name')
                        <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required value="{{old('username')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 
                        @error('username')
                        invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        @enderror
                        peer">
                        @error('username')
                        <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                        {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="you@example.com" required value="{{old('email')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  focus:ring-indigo-600 sm:text-sm/6
                        @error('email')
                        invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        @enderror
                        peer">
                        @error('email')
                        <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                        {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6
                    @error('password')
                    invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                    @enderror
                    peer">
                    @error('password')
                    <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                </div>
        
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>
            <small class="text-center mt-3 display: block">Have an account? <a href="/login" class="text-blue-800 underline hover:underline-offset-1">login</a></small>
            </div>
        </div>
</x-layout>