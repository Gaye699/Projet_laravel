@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f7f7f7;
        font-family: 'Nunito', sans-serif;
    }
    .container {
        padding-top: 50px;
    }
    .card {
        border: 1px solid #ced4da;
        background-color: white;
        margin-top: 100px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-bottom: 1px solid #ced4da;
        background-color: #007bff;
        color: white;
        text-align: center;
        font-size: 24px;
        padding: 15px;
    }
    .form-container {
        padding: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        font-weight: bold;
    }
    .form-control {
        background-color: #f7f7f7;
        border: 2px solid #ced4da;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: none;
    }
    .invalid-feedback {
        color: red;
        font-size: 14px;
    }
    .input-icon {
        position: relative;
    }
    .input-icon i {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #ced4da;
    }
    .input-icon input {
        padding-left: 30px;
    }
    .btn-primary {
        background-image: linear-gradient(to right, #0062E6, #33AEFF);
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
    }
    .btn-primary:hover {
        background-color: white;
        color: black;
        border: 2px solid #007bff;
    }
    .btn-light {
        background-color: #f7f7f7;
        color: black;
        border: 1px solid #ced4da;
    }
    .btn-light:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>
                <div class="card-body form-container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row input-icon">
                            <i class="icon-user"></i>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row input-icon">
                            <i class="icon-envelope"></i>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse e-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row input-icon">
                            <i class="icon-lock"></i>
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                                <a href="http://127.0.0.1:8000/login" class="btn btn-light btn-block"><i class="icon-home"></i> Retour à l'accueil</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
