<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentacion saludable</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="top-0 bg-black absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">CMMB</a>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="text-sm text-white white:text-white underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 underline">Iniciar
                                sesion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-white dark:text-gray-500 underline">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto ">
        <div class="flex flex-col items-center py-16">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Alimentación durante el embarazo
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{ URL('img/post-6.jpg') }}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Alimentación</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet
                        Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on
                        April 25th, 2020
                    </p>
                    <h1 class="text-2xl font-bold pb-3">IAlimentación durante el embarazo</h1>
                    <p class="pb-3">Durante el embarazo, debes ser muy cuidadosa con tu alimentación ya que si es deficiente, pudieras tener una hija o hijo de bajo peso y con mayor riesgo de sufrir enfermedades o incluso de morir.</p>
                    <h1 class="text-2xl font-bold pb-3">Recomendaciones</h1>
                    <p class="pb-3">Consume verduras y frutas de temporada</p>
                    <p class="pb-3">Incluye alimentos ricos en calcio, hierro y ácido fólico</p>
                    <p class="pb-3">Disminuye el consumo de pan dulce, pastelitos, galletas, frituras, pizzas, hamburguesas, hot-dogs, refrescos y postres. Estos son alimentos con alto contenido de grasa y azúcares y con pocas vitaminas, minerales y fibra.</p>
                    <h1 class="text-2xl font-bold pb-3">En caso de náusea y vómito se recomienda</h1>
                    <p class="pb-3">Comer alimentos en pequeñas cantidades, varias veces al día</p>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                        Anterior</p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
                <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Siguiente <i
                            class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
                </a>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                    sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                </a>
            </div>

        </aside>

    </div>
    <main>
    </main>

    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © 2022 - Computación visual y realidad aumentada - Grupo 3
                    <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">UPAO</a>.
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
    </script>
</body>

</html>
