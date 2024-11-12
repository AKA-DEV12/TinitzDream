<nav x-data="{ open: false }" class="fixed t-1 w-full z-50 bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center" :class="{'block': open, 'hidden': open}" class="hidden sm:hidden">
                    <a href="{{ route('index') }}">
                        <img class="w-16" src="/tinitz-logo-150x74.png" alt="" srcset="">
                    </a>
                    
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex justify-center">
                    
                    <x-nav-link :href="route('obtenir-application')" :active="request()->routeIs('obtenir-application')">
                        {{ __('Obtenir Une Application') }}
                    </x-nav-link>
                    <x-nav-link :href="route('maison-connectee')" :active="request()->routeIs('maison-connectee')">
                        {{ __('Connecter Ma Maison') }}
                    </x-nav-link>
                    <x-nav-link :href="route('tracking-gps')" :active="request()->routeIs('tracking-gps')">
                        {{ __('Tracking GPS') }}
                    </x-nav-link>
                    <x-nav-link :href="route('voir-realisation')" :active="request()->routeIs('voir-realisation')">
                        {{ __('Realisation') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6" x-data="{ open: false }">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger"> 
                        <!-- Bouton pour ouvrir/fermer le menu -->
                        <button @click="open = true" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <!-- Affichage du nom de l'utilisateur si connecté -->
                           
                        </button>
                    </x-slot>
                
                    <x-slot name="content">
                        <!-- Menu déroulant -->
                        <div x-show="open" @click.away="open = true" x-transition class="mt-2 bg-white shadow-lg rounded-md py-2 w-48">
                            @guest
                                <x-dropdown-link :href="route('login')">
                                    {{ __('Se connecter') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('register')">
                                    {{ __('S\'enregistrer') }}
                                </x-dropdown-link>
                            @endguest
                            @auth
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </x-dropdown-link>
                                </form>
                            @endauth
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
            
            <div class="-me-2 flex items-center ">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    @auth
                    <div>{{ Auth::user()->name }}</div> &nbsp;
                    @endauth

                    <!-- Icône utilisateur -->
                    <div>
                        <span>
                            <svg class="w-5 h-auto mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8 .4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"/>
                            </svg>
                        </span>
                    </div>

                    <!-- Flèche indiquant si le menu est ouvert ou fermé -->
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path :class="{'hidden': open, 'inline-flex': !open }" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </div>
            {{-- <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="shrink-0 flex items-center">
            <a href="/">
                <img class="w-14" src="/tinitz-logo-150x74.png" alt="" srcset="">
            </a>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            
            <x-responsive-nav-link :href="route('obtenir-application')" :active="request()->routeIs('obtenir-application')">
                {{ __('Obtenir Une Application') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('maison-connectee')" :active="request()->routeIs('maison-connectee')">
                {{ __('Connecter Ma Maison') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tracking-gps')" :active="request()->routeIs('tracking-gps')">
                {{ __('Tracking-GPS') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('voir-realisation')" :active="request()->routeIs('voir-realisation')">
                {{ __('Realisation') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>     
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <!-- logo tinitz pour menu de petit ecran -->   
            
        </div>
    </div>
    
    <div :class="{'block': open, 'hidden': ! open}" class="block relative right-1">
        
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 mt-2 relative right-1">
            <!-- logo tinitz pour menu de petit ecran -->
           
            <div class="px-4">

                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
               
            </div>

            <div class="mt-3 space-y-1">
                @auth
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                @endauth

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    @auth
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Deconnexion') }}
                        </x-responsive-nav-link>
                    @endauth

                    @guest
                    <x-dropdown-link :href="route('login')">
                        {{ __('Se connecter') }}
                    </x-dropdown-link>
                    
                        <x-dropdown-link :href="route('register')"
                           onclick="event.preventDefault();
                                       this.closest('form').submit();">
                                       @if (Route::has('register'))
                                       <a
                                           href="{{ route('register') }}"
                                           class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                       >
                                          {{ __('S\'enregister') }}
                                       </a>
                                   @endif
                    
                        </x-dropdown-link>
                            
                    @endguest
                   
                </form>
            </div>
        </div>
    </div>
</nav>
