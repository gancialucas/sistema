<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>Sistema</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="" type="image/x-icon">

    {{-- Scripts - Tailwind & SweetAlert --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Link - CSS --}}
    <link rel="stylesheet" href="css/welcome.css">
</head>

<body>
    <div class="overflow-hidden">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-4 sm:flex sm:justify-center">
                    <div class="flex items-center text-sm underline underline-offset-2 leading-6 text-gray-600">
                        <span class="mr-1">¡Hola!</span><img class="w-auto h-4" src="/imgs/utilities/hand_shake.png" alt="hand_shake">
                    </div>
                </div>

                <div class="text-center">
                    <h1 class="text-4xl tracking-tight text-gray-900 sm:text-6xl">¡Bienvenido!</h1>

                    <p class="mt-6 leading-8 text-gray-600">
                        Soy Lucas, un <span class="text-orange-400 font-semibold">desarrollador web</span>
                        apasionado por aprender y expandir mis conocimientos. Este proyecto tiene como propósito la
                        <span class="text-blue-400 font-semibold">creación de un sistema de gestión completo con un dashboard completamente
                            funcional.</span>
                    </p>

                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/login" class="text-sm leading-6 text-gray-900 rounded-full px-5 py-1 text-sm leading-6 text-gray-600 ring-2 ring-gray-900/10 hover:ring-gray-900/20">Conocer más <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
