@extends('layout')

@section('content')
    <div class=" container justify-content-center">
            <header class="text-center ">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Zaloguj się
                </h2>
            </header>

            <form method="POST" action="/users/login">
                @csrf
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{old('email')}}"
                    />
                    <!-- Error Example -->
                    @Error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                        class="inline-block text-lg mb-2"
                    >
                        Hasło
                    </label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password"
                        value="{{old('password')}}"
                    />
                    @Error('password')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        type="submit"
                        class="bg-laravel text-dark rounded py-2 px-4 hover:bg-black"
                    >
                        Zaloguj się
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Nie masz konta?
                        <a href="/register" class="text-laravel"
                            >zarejestruj się</a
                        >
                    </p>
                </div>
            </form>
        </div>
@endsection