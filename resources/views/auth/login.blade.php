@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div class="border-4 rounded-md w-64 mt-6 mr-4 ml-2">
                <div class="text-2xl font-bold ml-2">{{ __('Login') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="text-xl ml-2">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="text-xl ml-2 border-4 rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="text-2xl font-bold ml-2">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="text-xl ml-2 border-4 rounded-md" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <div>
                                    <input class="text-xl ml-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-xl ml-2" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="bg-green-600 text-white ml-2 mt-6 w-24 rounded-md text-xl h-7">
                                    {{ __('Login') }}
                                </button></br>

                                @if (Route::has('password.request'))
                                    <a class="text-xl ml-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
