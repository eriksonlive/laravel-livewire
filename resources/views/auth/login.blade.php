<x-guest-layout>

    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:2/3">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Brand</h2>
                        <p class="max-w-xl text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
                            laudantium vero harum tenetur? Laudantium fuga veritatis quisquam placeat earum sequi
                            nostrum perferendis necessitatibus voluptate optio similique, consectetur possimus nisi
                            delectus.</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">

                        <div class="flex items-center justify-center mb-6">
                            <x-authentication-card-logo />
                        </div>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </p>
                    </div>

                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ms-4">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-authentication-card>


        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession


    </x-authentication-card> --}}
</x-guest-layout>
