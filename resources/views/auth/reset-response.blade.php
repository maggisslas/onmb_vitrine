@extends('auth.layouts.master')

@section('title') Réinitialisation de mot de passe @endsection

@section('content')

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="">

                        <div class="row">

                            <div class="col-12 py-5" style="background: rgba(255, 255, 255, 0.445);">
                                <div class="container p-space-header-top">
                                    @if ($response == "password reset")
                                        <div class="alert alert-success">
                                            <i class="fa fa-check-circle"></i>
                                            Mot de passe réinitialisé avec succès.
                                        </div>
                                    @endif
                                    @if ($response == "password not reset")
                                        <div class="alert alert-danger">
                                            <i class="fa fa-exclamation-circle"></i>
                                            Nous n'arrivons pas à réinitialiser votre mot de passe.
                                        </div>
                                    @endif
                                    @if ($response == "token not found")
                                        <div class="alert alert-danger">
                                            <i class="fa fa-exclamation-circle"></i>
                                            Cette session n'est plus valide.
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <a href="{{ route('login.index') }}" class="btn btn-primary">
                                    Revenir à la page de connexion
                                </a>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
