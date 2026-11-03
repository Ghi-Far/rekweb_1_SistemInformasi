<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') ?? '/' }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        {{-- Menu Mahasiswa (Hanya tampil jika login) --}}
                        <x-nav-link :href="url('/mahasiswa')" :active="request()->is('mahasiswa*')">
                            {{ __('Mahasiswa') }}
                        </x-nav-link>
                    @endauth

                    {{-- Menu Product (Bisa diakses Semua Orang) --}}
                    <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.*')">
                        {{ __('Product') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Bagian Kanan: Info Profil atau Tombol Login -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-4">
                @auth
                    <div class="text-sm text-gray-700">
                        {{ Auth::user()->name }}
                        <span class="uppercase font-bold ml-1">{{ Auth::user()->role }}</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:text-red-900 font-semibold ml-4">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900 ml-4">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
