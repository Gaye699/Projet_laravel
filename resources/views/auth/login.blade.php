@extends('layouts.login_master')

@section('content')
   <!--  <div class="page-content login-cover">-->

        <!-- Contenu principal -->
        <div class="content-wrapper">

            <!-- Zone de contenu -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Carte de connexion -->
                <form class="login-form" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Connectez-vous à votre compte</h5>
                                <span class="d-block text-muted">Vos identifiants</span>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger alert-styled-left alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                                <span class="font-weight-semibold">Oups !</span> {{ implode('<br>', $errors->all()) }}
                            </div>
                            @endif

                            <div class="form-group">
                                <input type="text" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="Identifiant ou Email">
                            </div>

                            <div class="form-group">
                                <input required name="password" type="password" class="form-control" placeholder="{{ __('Mot de passe') }}">
                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled" {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        Se souvenir de moi
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="ml-auto">Mot de passe oublié ?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Se connecter <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                          
                            <div class="form-group">
                                <a href="http://127.0.0.1:8000/register" class="btn btn-light btn-block"><i class=""></i> S'inscrire</a>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
@endsection
