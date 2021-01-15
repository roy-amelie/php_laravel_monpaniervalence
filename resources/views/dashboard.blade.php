<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    {{--    @if(Auth::user()->role == 'Commerçant')
            bg-blue-500 text-white
        @else
            bg-yellow-500
        @endif--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-3xl m-2"> Bonjour {{Auth::user()->firstname }} et bienvenue sur votre
                    espace {{Auth::user()->role }} </div>
                <div class="text-2xl m-2"> Que souhaitez-vous faire ?</div>
                <div class="mt-3 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="text-2xl"> Gestion du profil</div>
                            <div class="flex items-center ml-3">
                                {{--<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>--}}
                                <ul>
                                    <li>
                                        <a href="{{route('users.show', Auth::user()->id) }}"
                                           class="underline text-gray-900 dark:text-white">Voir mon profil</a>
                                    </li>
                                    <li>
                                        <a href="{{route('users.edit', Auth::user()->id) }}"
                                           class="underline text-gray-900 dark:text-white">Modifier mon profil</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                      @if(Auth::user()->role == 'Commerçant' )
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="text-2xl"> Gestion boutique</div>
                            <div class="flex items-center ml-3">
                                {{--<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>--}}
                                <ul>
                                    <li>
                                        <a href="{{--{{route('shops.show', Auth::user()->id) }}--}}"
                                           class="underline text-gray-900 dark:text-white">Gérer mes produits</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @else
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="text-2xl"> Gestion des commandes</div>
                            <div class="flex items-center ml-3">
                                {{--<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>--}}
                                <ul>
                                    <li>
                                        <a href="{{--{{route('shops.show', Auth::user()->id) }}--}}"
                                           class="underline text-gray-900 dark:text-white">Mes anciennes commandes</a>
                                    </li>
                                    <li>
                                        <a href="{{--{{route('shops.show', Auth::user()->id) }}--}}"
                                           class="underline text-gray-900 dark:text-white">Mes commandes en cours</a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    @endif

                    @if(Auth::user()->role == 'Commerçant' )
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="text-2xl"> Gestion boutique</div>
                            <div class="flex items-center ml-3">
                                {{--<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>--}}
                                <ul>
                                    <li>
                                        <a href="{{--{{route('shops.show', Auth::user()->id) }}--}}"
                                           class="underline text-gray-900 dark:text-white">Voir ma boutique</a>
                                    </li>
                                    <li>
                                        <a href="{{--{{route('users.edit', Auth::user()->id) }}--}}"
                                           class="underline text-gray-900 dark:text-white">Modifier ma boutique</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    @else
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">

                        </div>
                    </div>
                @endif

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">

                               <span class="hidden sm:block shadow-sm rounded-md">
                              <a type="button"
                                 class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-700 active:bg-blue-700 transition duration-150 ease-in-out"
                                 href="#">

                                Des question ?

                              </a>
                        </span>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
