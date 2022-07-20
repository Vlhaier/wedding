@extends('layouts.app')

@section('content')

    <div class="sm:bg-cover bg-auto bg-no-repeat bg-center h-screen w-full" style="background-image: url('images/bg.png')">
        <div class="container px-5 mx-auto">
            <div class="flex items-center justify-center sm:h-screen sm:relative absolute sm:top-0 top-1/2 sm:translate-y-0 -translate-y-1/2 left-0 right-0">
                <div class="lg:w-1/2 md:w-2/3 bg-white bg-opacity-50 -my-6 xl:px-24 lg:px-18 md:px-8 sm:px-14 px-5 md:mx-0 -mx-5 lg:py-32 md:py-14 sm:py-10 py-6 md:h-full md:flex md:items-center">
                    <div class="w-full">
                        <h1 class="sm:text-6xl text-5xl text-green-800 text-center">Katya & Carlos</h1>
                        <h4 class="text-green-800 text-center mt-4">Acceder a toda la información</h4>
                        <form action="/login" method="POST" class="mt-8">
                            @csrf
                            <div>
                                <label class="text-green-800" for="username">Usuario</label>
                                <input id="username" type="text" name="username" class="block w-full py-3 px-4 mt-2 leading-5 transition duration-150 ease-in-out rounded form-input text-sm bg-amber-100 border border-amber-300 placeholder-amber-400 text-green-700 focus:outline-none focus:border-amber-500 focus:shadow-none" placeholder="Escribe tu usuario" required>
                                @error('username')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="text-green-800" for="password">Contraseña</label>
                                <password-toggle>
                                    <input id="password" type="password" name="password" class="block w-full py-3 pl-4 pr-14 mt-2 leading-5 transition duration-150 ease-in-out rounded form-input text-sm bg-amber-100 border border-amber-300 placeholder-amber-400 text-green-700 focus:outline-none focus:border-amber-500 focus:shadow-none" placeholder="Escribe tu contraseña" required>
                                </password-toggle>
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-green md:inline-block block md:w-auto w-full px-8 py-2 mt-8">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
