@php
    $title_page = "Inscription à l'ONMB"
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
        a.important{
            text-decoration: underline !important;
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

            <div class="title-area text-center pt-5">
                <h4 class="sec-title text-primary">
                    Comment s'inscrire sur la plateforme de l’Ordre National des Médecins du Bénin ?
                </h4>
            </div>

            <p>
                Dans le cadre de la modernisation de ses services, <span class="important">l’Ordre National des Médecins du Bénin (ONMB)</span> met à la disposition de ses membres une plateforme numérique sécurisée permettant d’effectuer plusieurs démarches en ligne.
            </p>

            <h5>
                Accéder à la page d’inscription
            </h5>
            <p>
                Rendez-vous sur <a href="https://ordremedecinsbenin.bj/" class="important">https://ordremedecinsbenin.bj/</a>, cliquez sur <span class="important">Mon espace</span>, puis sur <span class="important">S’inscrire</span>.
            </p>
            {{-- <p>
                👉 Pour les utilisateurs de téléphones portables, il est nécessaire d’ouvrir le menu principal, puis de sélectionner <span class="important">S’inscrire</span> afin d’accéder à la même interface.
            </p> --}}


            <blockquote>
                <p>
                    Pour les nouveaux médecins, il est obligatoire de procéder d’abord à l’inscription auprès de l’Ordre National des Médecins du Bénin (ONMB) afin d’obtenir un numéro d’inscription. Ce numéro est indispensable pour toute inscription sur la plateforme de l’ONMB.
                </p>
                <p>
                    Sans numéro d’inscription délivré par l’ONMB, aucune inscription sur la plateforme n’est possible.
                </p>
                {{-- <cite>N.B.</cite> --}}
            </blockquote>


            {{-- ETAPE 1 --}}

                <div class="accordion-1 accordion py-3" id="faqAccordion1">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                <i class="fa fa-edit text-primary"></i> Étape 1 : Vérification de l’identité du médecin
                            </button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <p>
                                                La première phase consiste à vérifier l’identité du médecin. Deux informations sont requises :
                                            </p>
                                        </div>
                                        <div class="col-xl-6 text-center text-xl-start">
                                            <div class="pe-xxl-5 mb-40 mb-xl-0">


                                                <div class="contact-process-wrap">
                                                    <div class="contact-process">
                                                        <div class="box-number shadow-sm">01</div>
                                                        <div class="media-body text-start">
                                                            <h3 class="box-title">Le numéro d'inscription</h3>
                                                            <p class="box-text">Le numéro matricule, qui doit impérativement respecter le format indiqué dans le champ prévu à cet effet. Ce format comprend :</p>
                                                            <ul>
                                                                <li><strong>les quatre premiers chiffres</strong> (Ex: 0001)</li>
                                                                <li><strong>la mention ONMB</strong> (Ajouter automaniquement par la plateforme)</li>
                                                                <li><strong>le département</strong> (Ex: LIT ou ATL)</li>
                                                                <li><strong>l’année d’inscription à l’Ordre</strong> (Ex: 1990)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="contact-process">
                                                        <div class="box-number shadow-sm">02</div>
                                                        <div class="media-body text-start">
                                                            <h3 class="box-title">Le nom de famille</h3>
                                                            <p class="box-text">Le nom de famille, à renseigner exclusivement (sans les prénoms).</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/inscription1.jpeg" alt="Inscription">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- ETAPE 2 --}}

                <div class="accordion-2 accordion py-3" id="faqAccordion2">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                <i class="fa fa-edit text-primary"></i> Étape 2 : Renseignement des informations personnelles et professionnelles
                            </button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion1">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/inscription2.png" alt="Inscription">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/inscription3.png" alt="Inscription">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2" >
                                            <div class="pe-xxl-5 mb-40 mb-xl-0" >

                                                <p>
                                                    À ce niveau, le médecin doit compléter les informations suivantes :
                                                </p>

                                                <ul>
                                                    <li>le ou les prénoms ;</li>
                                                    <li>l’année d’inscription à l’ONMB ;</li>
                                                    <li>une carte professionnelle ou une attestation délivrée par l’ONMB ;</li>
                                                    <li>le secteur d’activité ;</li>
                                                    <li>le lieu principal d’exercice, ainsi que tout autre lieu d’exercice le cas échéant ;</li>
                                                    <li>une adresse e-mail valide ;</li>
                                                    <li>spécialité ;</li>
                                                    <li>etc...</li>
                                                </ul>

                                                <p>
                                                    Il est également demandé de créer un mot de passe sécurisé. Celui-ci doit comporter au <span class="important">minimum huit (08) caractères</span> et inclure :
                                                </p>

                                                <ul>
                                                    <li>des lettres minuscules ;</li>
                                                    <li>des lettres majuscules ;</li>
                                                    <li>des chiffres (caractères alphanumériques) ;</li>
                                                    <li>au moins un caractère spécial.</li>
                                                </ul>

                                                <p>
                                                    Exemple de mot de passe selon les exigences de la plateforme : <span class="important">Monpass@01</span>.
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- ETAPE 3 --}}

                <div class="accordion-3 accordion py-3" id="faqAccordion3">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                <i class="fa fa-edit text-primary"></i> Étape 3 : Finalisation de l’inscription
                            </button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse show" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion1">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">

                                        <div class="col-xl-6">
                                            <div class="pe-xxl-5 mb-40 mb-xl-0">

                                                <p>
                                                    Après avoir correctement renseigné l’ensemble des champs, il suffit de cliquer sur le bouton « S’inscrire » pour finaliser la création du compte.
                                                    L’inscription est alors effective. Le médecin peut désormais se connecter à son espace personnel et accéder aux différentes fonctionnalités de la plateforme de l’ONMB.
                                                </p>

                                                Découvrez en détail le <a href="{{ route('publications.annonces.paiement_cotisations') }}" class="important">processus de paiement des cotisations</a> en consultant cet article :

                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/afterlogin.jpeg" alt="Dashboard après inscription">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div>

            </div>

        </div>
    </section>

@endsection

@section('scripts')

@endsection
