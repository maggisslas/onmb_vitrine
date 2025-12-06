@extends('auth.layouts.master')

@section('title') Connexion @endsection

@section('content')

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form method="POST" action="{{ route('login') }}" class="theme-form login-form">
                            @csrf

                            <h4>Connectez-vous</h4>
                            <h6>Bienvenue! Connectez-vous à votre compte.</h6>

                            @if(session('error_login'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-exclamation-circle"></i>
                                    {{ session('error_login') }}
                                </div>
                            @endif

                            @if(session('update_profile'))
                                <div class="alert alert-success">
                                    <i class="fa fa-check"></i>
                                    {{ session('update_profile') }}
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
                                            placeholder="test@gmail.com"
                                            oninput="checkUser()">
                                </div>
                                @error('email')
                                    <span class="text-danger">
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>

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

                            <div class="form-group d-none" id="content_confirm_password">
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
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                <input type="checkbox" name="remember_me" id="remember_me">
                                <label for="remember_me">Se souvenir de moi</label>
                                </div>
                                <a class="link" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Connexion</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        function checkUser(){
            var email = $('#email').val()
            if (email) {

                var route = '{{ route("define_password", ":email") }}';
                    route = route.replace(':email', email);

                $.ajax({
                    type: "GET",
                    url: route,
                    success: function(data) {

                        if (data.response) {
                            $('#content_confirm_password').removeClass('d-none')
                        }else{
                            $('#content_confirm_password').addClass('d-none')
                        }
                    },
                    error: function(err){
                        console.log(err)
                    }
                });
            }
        }

        window.onload = checkUser()
    </script>

@endsection
