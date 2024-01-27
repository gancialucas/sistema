@extends('layouts.plantilla')
    @section('content')

        <section class="home-section">
            <div class="text">Información del usuario</div>

            {{-- Tarjeta de usuario --}}
            <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="p-3">
                    <form action="/user/update" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf


                        <div class="flex justify-center">
                            <label for="profile_img">
                                <img src="/imgs/profile_img/{{ $user->profile_img }}" class="w-32 h-32 object-cover rounded-full" alt="profile_img">
                            </label>
                        </div>

                        <input type="file" name="profile_img" id="profile_img"
                        class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100 pt-5">

                        @foreach(['name', 'email', 'description', 'position', 'password'] as $field)
                        <div class="my-3">
                            <label for="{{ $field }}" class="block text-gray-700 text-sm mb-1">{{ ucfirst($field) }}</label>

                            <input
                            type="{{ $field === 'password' ? 'password' : 'text' }}"
                            name="{{ $field }}"
                            class="w-full border rounded py-1 px-3"
                            value="{{ old($field, $user->$field) }}">
                        </div>
                        @endforeach

                        <p class="text-xs text-gray-700 text-center mt-4">Fecha de Registro</p>
                        <p class="text-gray-700 text-center">{{ $user->created_at }}</p>

                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="imgActual" value="{{ $user->profile_img }}">

                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="bg-black text-white rounded px-4 py-2">Edit</button>

                            <a href="/user/delete/{{ $user->id }}" class="bg-black text-white rounded px-4 py-2">Delete</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    @endsection
