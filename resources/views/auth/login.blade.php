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
                    Não tem uma conta? <a href="{{ route('register') }}" class="text-[#20DC49]">Cadastre-se</a>
                </p>
            </div>
            <div class="w-full flex flex-col mt-10 pt-10">
                <h2 class="font-bold text-4xl text-center pb-2">Seja bem vindo novamente</h2>
                <p class="text-center font-semibold text-xl">Realize o login em sua conta</p>
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

                        <!-- Email Address -->
                        <div>
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" placeholder="Senha" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex justify-between">
                            <div class="block mt-4">
                                <label for="remember_me" class="relative inline-flex items-center cursor-pointer"
                                    onclick="checkRemember(this)">
                                    <input id="remember_me" type="checkbox" value="" class="sr-only peer">
                                    <div
                                        class="w-11
                                               h-6
                                               bg-gray-200
                                               rounded-full
                                               peer
                                               peer-focus:ring-4
                                               peer-focus:ring-blue-300
                                               dark:peer-focus:ring-blue-800
                                               dark:bg-gray-700
                                               peer-checked:after:translate-x-full
                                               peer-checked:after:border-white
                                               after:content-['']
                                               after:absolute
                                               after:top-0.5
                                               after:left-[2px]
                                               after:bg-white
                                               after:border-gray-300
                                               after:border
                                               after:rounded-full
                                               after:h-5
                                               after:w-5
                                               after:transition-all
                                               dark:border-gray-600
                                        peer-checked:bg-blue-600">
                                    </div>
                                    <span
                                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-[#D93F21] dark:text-gray-400 hover:text-[#DB391A] dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="w-full flex justify-center mt-5">
                            <x-primary-button class="w-full flex justify-center">
                                {{ __('Entrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div
            class="bg-green-100 bg-cover bg-right bg-no-repeat w-1/2 bg-[url('/resources/assets/images/landscapeLogin.jpg')]">
        </div>
    </div>
    <script type="text/javascript">
        function checkRemember(params) {
            params.checked;
        }
    </script>
</x-guest-layout>
