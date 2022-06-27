@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div class="border-4 rounded-md w-64 mt-6 mr-4 ml-2">
                <div class="text-2xl font-bold ml-2">{{ __('Reset Password') }}</div>

                <div>
                    @if (session('status'))
                        <div role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            <label for="email" class="text-xl ml-2">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="text-xl ml-2 border-4 rounded-md" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span role="alert" class="ml-2">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="bg-green-600 text-white ml-2 my-8 w-24 rounded-md text-xl h-7">
                                    {{ __('Send Password Reset Link') }}
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
