@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div class="border-4 rounded-md w-64 mt-6 mr-4 ml-2">
                <div class="text-2xl font-bold ml-2">{{ __('Register') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name" class="ml-2 text-xl">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="text-xl ml-2 border-4 rounded-md" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span role="alert" class="text-xl font-bold">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="ml-2 text-xl">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="text-xl ml-2 border-4 rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert" class="text-xl font-bold">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="ml-2 text-xl">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="text-xl ml-2 border-4 rounded-md" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert" class="text-xl font-bold">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm" class="ml-2 text-xl">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="text-xl ml-2 border-4 rounded-md" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="bg-green-600 text-white ml-2 my-8 w-24 rounded-md text-xl h-7">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
