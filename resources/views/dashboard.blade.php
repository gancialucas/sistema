@extends('layouts.plantilla')
    @section('content')
        <section class="home-section">
            <div class="text">Dashboard</div>

            <div class="flex justify-center">

                @if (session('message'))
                    <div class="flex justify-center text-sm text-slate-500
                    mr-4 py-2 px-4 rounded-full border-0
                    text-sm font-semibold bg-{{ session('css_tailwind') }}-50 text-{{ session('css_tailwind') }}-700
                    hover:bg-{{ session('css_tailwind') }}-100">
                        <p class="m-1">{{ session('message') }}</p>
                    </div>
                @endif


                @if ($errors->any())
                    <div class="text-xs text-center pt-5">
                        @foreach ($errors->all() as $error)
                            <p class="m-0 p-1"><i class='bx bxs-error'></i> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

            </div>
        </section>
    @endsection
