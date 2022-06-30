<nav class="bg-gray-800">
    <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">


            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                {{-- logotipo --}}
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                </div>

            </div>
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm text-white white:text-white underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 underline">Iniciar sesion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-white dark:text-gray-500 underline">Registrarse</a>
                @endif
            @endauth
        </div>
    </div>
</nav>
