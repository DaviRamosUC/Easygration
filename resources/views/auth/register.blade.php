<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="h-screen flex flex-row">
        <div class="w-3/4">
            <div class="m-8 flex justify-between align-center">
                <a href="/" class="text-2xl font-semibold flex flex-row">
                    <Image src="{{ Vite::asset('resources/assets/images/favicon-32x32.png') }}" alt="Logo Easygration"
                        class="mr-3" />
                    Easygration
                </a>
                <p>
                    Já tem uma conta? <a href="{{ route('login') }}" class="text-[#20DC49]">Entre!</a>
                </p>
            </div>
            <div class="w-full flex flex-col mt-5 pt-5">
                <h2 class="font-bold text-4xl text-center pb-2">Vamos começar?</h2>
                <p class="text-center text-gray-400 text-sm">Iniciar nessa jornada nunca foi tão fácil</p>
            </div>
            <div class="inline-flex justify-center w-full mt-10">
                <div class="grid grid-cols-2 w-[280px]">
                    <button type="button"
                        class="bg-white
                                              focus:ring-4
                                              focus:outline-none
                                              hover:border-[#20DC49]
                                              border
                                              focus:ring-[#20DC49]/50
                                              font-medium
                                              rounded-lg
                                              text-sm
                                              px-5
                                              py-2.5
                                              text-center
                                              items-center
                                              inline-flex
                                              dark:focus:ring-[#20DC49]/55
                                              m-auto">

                        <Image src="{{ Vite::asset('resources/assets/icons/google.png') }}" alt="Logo google"
                            class="mr-2 font-semibold" />
                        Google
                    </button>
                    <button type="button"
                        class="bg-white
                                              focus:ring-4
                                              focus:outline-none
                                              hover:border-[#20DC49]
                                              border
                                              focus:ring-[#20DC49]/50
                                              font-medium
                                              rounded-lg
                                              text-sm
                                              px-5 py-2.5
                                              text-center
                                              inline-flex
                                              items-center
                                              dark:focus:ring-[#20DC49]/55
                                              m-auto">
                        <Image src="{{ Vite::asset('resources/assets/icons/facebook.png') }}" alt="Logo facebook"
                            class="mr-2 font-semibold" />
                        Facebook
                    </button>
                </div>
            </div>
            <div class="relative flex py-5 items-center">
                <span class="ml-20"></span>
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 ">Ou continue com</span>
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="ml-20"></span>
            </div>
            <div class="w-full flex flex-col justify-center items-center">
                <div class="w-1/2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" placeholder="Nome"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" placeholder="Email"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password"  placeholder="Senha"/>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password"  placeholder="Confirmar senha"/>

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="w-full flex justify-center mt-5">
                           <x-primary-button class="w-full flex justify-center">
                                {{ __('Criar minha conta!') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div
            class="bg-green-100 bg-cover bg-right bg-no-repeat w-1/2 bg-[url('/resources/assets/images/landscapeCadastro.jpg')]">
        </div>
    </div>
    <script type="text/javascript">
        function checkRemember(params) {
            params.checked;
        }
    </script>
</x-guest-layout>
