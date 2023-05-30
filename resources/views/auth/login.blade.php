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
                    <div>
                        <a href="/auth/google/redirect" type="button"
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
                        </a>
                    </div>
                    <div>
                        <a href="/auth/github/redirect" type="button"
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
                            <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                                data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 496 512">
                                <path fill="currentColor"
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                </path>
                            </svg>

                            Github
                        </a>
                    </div>
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
                    <form method="POST" action="{{ route('login') }}">
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
