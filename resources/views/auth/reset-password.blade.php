@extends('auth.layouts.master')

@section('title') Réinitialisation de mot de passe @endsection

@section('content')

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form method="POST" action="{{ route('password.update') }}" class="theme-form login-form">
                            @csrf

                            <h4>Mot de passe oublié</h4>
                            <h6>Veuillez saisir votre nouveau mot de passe.</h6>

                            <div class="form-group">
                                <label>Mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control hideOrShowPassword @error('password') is-invalid @enderror"
                                            type="password"
                                            name="password"
                                            id="password"
                                            required
                                            placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                                @error('password')
                                    <span class="text-danger">
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Confirmer mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control hideOrShowPassword @error('confirm_password') is-invalid @enderror"
                                            type="password"
                                            name="confirm_password"
                                            id="confirm_password"
                                            placeholder="*********">
                                </div>

                                @error('confirm_password')
                                    <span class="text-danger">
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    </span>
                                @enderror

                                <input type="text" name="email" hidden value="{{ $email }}">
                                <input type="text" name="token" hidden value="{{ $token }}">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit"> Réinitialiser </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
