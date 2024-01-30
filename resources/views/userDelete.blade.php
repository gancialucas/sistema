@extends('layouts.plantilla')
    @section('content')
        <section class="home-section">

            <div class="flex justify-center">
                <div class="bg-red-400 rounded-lg shadow-lg my-96">
                    <div class="p-3">
                        <form action="/user/destroy" method="post">
                            @method('delete')
                            @csrf

                            <p>¿Seguro que desea eliminar su cuenta <span class="font-semibold">{{ $user->name }}</span>?</p>

                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="hidden" name="name" value="{{ $user->name }}">

                            <div class="flex justify-center pt-4">
                                <button class="bg-red-800 text-white rounded px-4 py-2">Delete</button>
                                <a href="/user/edit/{{ $user->id }}" class="bg-gray-400 text-white rounded px-4 py-2 ms-2">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    @endsection
