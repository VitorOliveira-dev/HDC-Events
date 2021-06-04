@extends('layouts.main')
@section('title','Cadastre-se')
@section('content')

        <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div id="form-fields" class="col-md-6 offset-md-3">
                <h1>Cadastre-se</h1>
            <div>
                <label for="name" value="{{ __('Name') }}" />Nome</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}" />E-mail</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" />Senha</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}" />Confirmar Senha</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms">
                        <div class="flex items-center">
                            <checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">{{ __('Já possui Cadastro ?') }}</a>
            </div>
    </div>

        <button class="btn btn-primary">
            {{ __('Cadastrar') }}
        </button>
    </div>
        </form>
@endsection