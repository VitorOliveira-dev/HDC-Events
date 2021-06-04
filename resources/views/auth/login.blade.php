@extends('layouts.main')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="login-logo">
            <img src="\img\hdcevents_logo.svg" alt="HDC Events">
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div id="form-fields" class="col-md-6 offset-md-3">
            <div class="form-group">
                <label class="strong-label" for="email" value="{{ ('Email') }}" />E-mail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="form-group">
                <label class="strong-label" for="password" value="{{ __('Password') }}" />Senha</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="form-group">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha ?') }}
                    </a>
                @endif
            </div>
        </div>

            <button class="btn btn-primary">
                {{ __('Acessar') }}
            </button>
        </form>
    </div>
        @endsection
