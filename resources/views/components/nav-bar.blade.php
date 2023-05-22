<navbar class="flex items-center">
    <div class="sm:fixed sm:top-0 sm:left-0 p-6 text-left">
        <h2 class="mx-6 md:mx-8 text-2xl text-{{ $textColor }} font-semibold">
            @if ($logo == 'true')
                <Image src="{{ Vite::asset('resources/assets/images/favicon-32x32.png') }}" alt="Logo Easygration"
                    class="mr-3" />
            @endif
            Easygration
        </h2>
    </div>
    @if (Route::has('login'))
        <div
            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 gap-4 grid-cols-4 flex items-center text-{{ $textColor }}">
            <a href="{{ url('/') }}" class="">Início</a>
            <a href="{{ url('/about') }}" class="">Sobre
                nós</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Registrar</a>
                @endif
                <a href="{{ route('login') }}"
                    class="mr-4 md:mr-6 py-1.5 px-4 rounded-lg border-2 border-white hover:border-[#20DC49] hover:text-[#20DC49]">Entrar</a>
            @endauth
        </div>
    @endif
</navbar>
