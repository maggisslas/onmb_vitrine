@extends('auth.layouts.master')

@section('title') Réinitialisation de mot de passe @endsection

@section('content')

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form method="POST" action="{{ route('password.email') }}" class="theme-form login-form">
                            @csrf

                            <h4>Mot de passe oublié</h4>
                            <h6>Veuillez saisir votre mail</h6>

                            @if(session('error_reset'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-exclamation-circle"></i>
                                    {{ session('error_reset') }}
                                </div>
                            @endif

                            @if(session('mail_send'))
                                <div class="alert alert-success">
                                    <i class="fa fa-exclamation-circle"></i>
                                    {{ session('mail_send') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control @error('email') is-invalid @enderror"
                                            type="email"
                                            name="email"
                                            id="email"
                                            value="{{ old('email') }}"
                                            required
                                            placeholder="test@gmail.com">
                                </div>
                                @error('email')
                                    <span class="text-danger">
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    </span>
                                @enderror
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
