<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resultados de búsqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-t-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Usuarios') }}
                </h2>
                @forelse ($users as $user)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class="pt-3 px-3 hover:text-xl font-bold dark:text-gray-200">{{$user->name}}</p>
                        <p class="px-3 dark:text-gray-300">Correo: {{$user->email}}</p>
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$users->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Pizzas') }}
                </h2>
                @forelse ($pizzas as $pizza)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class="pt-3 px-3 hover:text-xl font-bold dark:text-gray-200">{{$pizza->nombre}}</p>
                        <p class="px-3 dark:text-gray-300">Precio: {{$pizza->precio}} Bs.</p>
                        <p class="px-3 lowercase dark:text-gray-300">Descripcion: {{$pizza->descripcion}}</p>
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$pizzas->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-t-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Categorias') }}
                </h2>
                @forelse ($categorias as $categoria)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$categoria->nombre}}</p>
                        {{-- <p class=" px-3">ID: {{$categoria->id}}</p> --}}
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$categorias->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-t-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Tamaños') }}
                </h2>
                @forelse ($tamanos as $tamano)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$tamano->nombre}}</p>
                        {{-- <p class=" px-3">ID: {{$tamano->id}}</p> --}}
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$tamanos->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-t-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Metodos de pago') }}
                </h2>
                @forelse ($metodopagos as $metodopago)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$metodopago->nombre}}</p>
                        {{-- <p class=" px-3">ID: {{$metodopago->id}}</p> --}}
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$metodopagos->links()}}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-t-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-5">
                    {{ __('Estados') }}
                </h2>
                @forelse ($estados as $estado)
                <div class="bg-white dark:bg-gray-700 m-2 rounded-lg flex border dark:border-gray-600 justify-between">
                    <div>
                        <p class=" pt-3 px-3 hover:text-xl font-bold">{{$estado->nombre}}</p>
                        {{-- <p class=" px-3">ID: {{$estado->id}}</p> --}}
                    </div>
                </div>
                @empty
                <div class="p-2 bg-gray-200 dark:bg-gray-700">
                    <p class="dark:text-gray-300">Sin resultados</p>
                </div>
                @endforelse
                <div class="mt-6 px-3 py-2">
                    {{$estados->links()}}
                </div>
            </div>
        </div>

    </div>



</x-app-layout>
