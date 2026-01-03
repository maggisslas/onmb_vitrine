@php
    $title_page = "Annonces"
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')

    <style>
        .text-primary {
            color: #bc1f24 !important;
        }

        .important{
            color: #bc1f24 !important;
            font-weight: bold;
        }
        .contact-process .box-number{
            background: #bc1f24 !important;
            color: #ffffff !important;

        }
    </style>

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])


    <section class="overflow-hidden  py-5" id="service-sec">
        <div class="container">

            <div class="row">

                <div class="col-xl-6 col-md-6 th-blog">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/img/onmb/inscription_paiement/inscription1.jpeg" alt="Inscription" />
                        </div>
                        <div class="blog-content">
                            <h3 class="box-title">
                                <a href="{{ route('publications.annonces.inscription') }}">
                                    Comment s'inscrire sur la plateforme de l'ONMB
                                </a>
                            </h3>
                            <a href="{{ route('publications.annonces.inscription') }}" class="th-btn btn-sm btn-s">
                                Lire plus
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6 th-blog">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="assets/img/onmb/inscription_paiement/afterlogin.jpeg" alt="Paiement" />
                        </div>
                        <div class="blog-content">
                            <h3 class="box-title">
                                <a href="{{ route('publications.annonces.paiement_cotisations') }}">
                                    Le processus de paiement de cotisation en ligne
                                </a>
                            </h3>
                            <a href="{{ route('publications.annonces.paiement_cotisations') }}" class="th-btn btn-sm btn-s">
                                Lire plus
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

@section('scripts')

@endsection
