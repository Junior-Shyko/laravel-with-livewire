<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABg1BMVEX////8/Pz//f8AAAAfHx////4oKCgiIiIlJSX5+fnz8/Pv7+/a2tr///wwMDDf39////nT09O3t7d6enrp6elQUFDExMTMzMxAQED5//84ODqurq7/+v+Li4uenp7AwMAUFBSnp6eBgYFwcHAWFho0NDRqampbW1uTk5MMDAxNTU1jY2P///IYGBheXl73//Tv///3/+ttwT6izIhrv0ZotkLw/eBmpMRNmsUAh8gAgM398vHJg4elJi746uPYeXrCChX949/ZenG0KDuhBgC5AAy9Fh+7FSnQkJLEioDRgX7+7PfdrKfUanW5bmPM3r/KCgmqFyTr0di5yq7bgXisxJXLnJivUE6Xu37W6r2IuW3E6LF5s16w2Jt4slGUxHnn7NzT38Xd89FutC+QwGas04yWzHxxsUjL4al+vGZpxDfB5aPA167a88Jyr0B0qVvI7PObx9aBts4/jbzU9/oOf7e51+ZWnbxoscYAeLNgp9B+rcgthpyjxt6xytIAdbV4qLFr2znVAAAQ2klEQVR4nO1c+2PaWHa+V+iBgCsECCTxECCWp8E8DMSTmc7sbtvZbdN2prs7bZ3E9i5O4sSTZO04tjeTTjJ/es+RADvOw+kUhli93w8gxNXV+e4597yETQgHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHh2D3KCXUJsKqJVkWmC7ZNvKTVi3JstDV8/bnt4S8YK9akmXBFgT2xd99KeTZqiVZFqhg069+/aWdD64Ov/zyN7/99nM7sI6GCH//D//49e9ugbGuWpJlgFJJIr//py/++YtbTA+klbIoYzZ4mH/57b9+9W+/WbU0i4ak6+ybPhGkzwX7T99+/fW//2HVEi0YOhP08R/bsPvsnv2nX//h1q38qkVaMIBh97u+LpC80FO/+vZWzw5ePNQn37WZYAuU5f/jPz+39aAxtIX+f00Y5KISYxSISlLgfCnbut1dtQxLhdC/eydovuVN6HfujgPMELZf/+528HbeHEJb727/ddwOrg51Rsc7G3rg4sM52tTefrol2O1VC7I86P27O30hwDq06fZom9EAq5C290dj0GQga14PwsPBrk7YnwPbPyT9ncEWId2/0FULsjRsjfbHgt39YyA9jcBo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"
                      width="60px" alt="">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Intruções') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}">
                        {{ __('Novo') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ url('ver-requerimento') }}">
                        {{ __('Consultar') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
