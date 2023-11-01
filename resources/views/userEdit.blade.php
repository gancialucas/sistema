@extends('layouts.plantilla')
    @section('content')
        <section class="home-section">
            <div class="text">User edit</div>

            {{-- Tarjeta de usuario --}}
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-2 bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="/imgs/profile_img/{{ $user->profile_img }}" class="shadow-lg rounded" alt="profile_img">

                    <div class="px-6 py-4 grid justify-content-center items-center">
                        <h1 class="font-bold text-center text-xl text-orange-500">Personal information</h1>

                        <form action="/user/update" method="post">
                            @method('put')
                            @csrf

                            <div class="text-gray-700 text-sm my-2">
                                <p for="name" class="mb-2 underline underline-offset-2">Nombre</p>
                                <input type="text" name="nombre" class="w-full border rounded py-1 px-3" value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="text-gray-700 text-sm my-2">
                                <p for="email" class="mb-2 underline underline-offset-2">Email</p>
                                <input type="text" name="email" class="w-full border rounded py-1 px-3" value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="text-gray-700 text-sm my-2">
                                <p for="description" class="mb-2 underline underline-offset-2">Descripción</p>
                                <input type="text" name="description" class="w-full border rounded py-1 px-3" value="{{ old('position', $user->position) }}">
                            </div>

                            <div class="text-gray-700 text-sm my-2">
                                <p for="position" class="mb-2 underline underline-offset-2">Posición</p>
                                <input type="text" name="position" class="w-full border rounded py-1 px-3" value="{{ old('description', $user->description) }}">
                            </div>

                            <div class="text-gray-700 text-sm my-2">
                                <p for="password" class="mb-2 underline underline-offset-2">Contraseña</p>
                                <input type="password" name="password" class="w-full border rounded py-1 px-3" value="{{ old('password', $user->password) }}">
                            </div>

                            <p class="text-gray-700 text-center mt-4">{{ $user->created_at }}</p>

                            <div class="mt-4 grid grid-flow-col">
                                <button class="bg-violet-500 text-white rounded px-4 py-2 mr-2">Editar</button>
                                <button type="submit" class="bg-red-500 text-white rounded px-4 py-2">Borrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
