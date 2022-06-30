<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Control de embarazo</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
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
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("https://elmedicointeractivo.com/wp-content/uploads/2018/09/embarazo.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                El blog de las madres.
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Cada mamá quiere saber qué es lo mejor para su bebé. Nuestros expertos abordan las
                                exposiciones más apremiantes de hoy en día.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Logros</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                                    consequuntur deleniti enim ex excepturi explicabo in libero magni maxime nam nihil,
                                    numquam officia omnis placeat quaerat saepe soluta sunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Control de embarzo</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa distinctio
                                    dolor iure minima nisi numquam quae rem suscipit vero. Ad dolore eius explicabo
                                    laboriosam nam quos sed, sunt totam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Acompañamiento</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet delectus ea et
                                    expedita fugit iste, magnam molestiae qui ratione saepe sapiente? Dolorum eos in
                                    incidunt qui repudiandae veritatis voluptate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-1.jpg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                    class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-2.jpg') }}"
                                class="w-full align-middle rounded-t-lg max-h-20 min-h-20" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                            
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-3.jpg') }}"
                                class="w-full align-middle rounded-t-lg max-h-20" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-4.jpg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-5.jpg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="{{ URL('img/post-6.jpg') }}"
                                class="w-full align-middle rounded-t-lg" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                    </polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Top Notch Services
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    The Arctic Ocean freezes every winter and much of the
                                    sea-ice then thaws every summer, and that process will
                                    continue whatever happens.
                                </p>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        Leer más...
                                    </button>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">

        <hr class="my-6 border-gray-400" />
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
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
