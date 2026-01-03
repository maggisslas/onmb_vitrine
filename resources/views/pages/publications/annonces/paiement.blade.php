@php
    $title_page = "Paiement à l'ONMB en ligne"
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
                    Le processus de paiement de cotisation en ligne
                </h4>
            </div>

            <p>
                Dans le cadre de la digitalisation de ses services, l’Ordre National des Médecins du Bénin (ONMB) offre à ses membres la possibilité de
                payer leurs cotisations en ligne, de manière simple, sécurisée et rapide. Cette solution permet aux médecins de s’acquitter de leurs
                obligations sans déplacement physique.
            </p>


            {{-- ETAPE 1 --}}

                <div class="accordion-1 accordion py-3" id="faqAccordion1">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                <i class="fa fa-edit text-primary"></i> Étape 1 : Se connecter à son espace personnel
                            </button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion1">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <p>
                                                Avant toute opération de <strong>paiement</strong>, le médecin doit être <a href="{{ route('publications.annonces.inscription') }}" class="important">inscrit sur la plateforme de l’ONMB</a>.
                                                Une fois l’inscription effectuée, il convient de se connecter à son espace personnel en renseignant :
                                            </p>
                                            <ul>
                                                <li>son <strong>numéro d'inscription</strong> délivré par l’ONMB ;</li>
                                                <li>son <strong>mot de passe</strong> personnel.</li>
                                            </ul>
                                            <p>
                                                Après validation, l’utilisateur accède à son tableau de bord.
                                            </p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/connexion.jpg" alt="Connexion">
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
                                <i class="fa fa-edit text-primary"></i> Étape 2 : Accéder à la rubrique « Cotisation »
                            </button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion2">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <p>
                                                Depuis l’espace personnel, il faut cliquer sur le menu « <strong>Cotisation</strong> ». Cette section affiche automatiquement :
                                            </p>
                                            <ul>
                                                <li>le nombre d’années de cotisation dues ;</li>
                                                <li>les années concernées, classées de la plus ancienne à la plus récente.</li>
                                            </ul>
                                            <p>
                                                Conformément aux règles en vigueur, le <strong>paiement</strong> se fait dans l’ordre chronologique, en commençant par l’année la plus ancienne.
                                            </p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/cotidu.jpeg" alt="Cotisation due">
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
                                <i class="fa fa-edit text-primary"></i> Étape 3 : Lancer le paiement de la cotisation
                            </button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse show" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion3">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <p>
                                                Une fois l’année à régler sélectionnée, cliquez sur le bouton « <strong>Payer ma cotisation</strong> ». Une nouvelle fenêtre
                                                s’ouvre et propose les moyens de <strong>paiement</strong> disponibles.
                                            </p>
                                            <p>
                                                Sélectionnez l’option « <strong>Mobile Money</strong> », puis choisissez votre opérateur :
                                            </p>
                                            <ul>
                                                <li>MTN  ;</li>
                                                <li>MOOV ;</li>
                                                <li>CELTIS.</li>
                                            </ul>
                                            <p>
                                                Renseignez ensuite le <strong>numéro de téléphone</strong> mobile à partir duquel le montant sera prélevé.
                                            </p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/cotidu.jpeg" alt="Cotisation due">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- ETAPE 4 --}}

                <div class="accordion-4 accordion py-3" id="faqAccordion4">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                <i class="fa fa-edit text-primary"></i> Étape 4 : Confirmer le paiement
                            </button>
                        </div>
                        <div id="collapse-4" class="accordion-collapse collapse show" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion4">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <p>
                                                Après avoir saisi le <strong>numéro de téléphone</strong>, cliquez sur « <strong>Payer 24 000 francs</strong> ». Un message USSD
                                                s’affiche alors sur votre téléphone pour <strong>confirmation</strong> :
                                            </p>
                                            <ul>
                                                <li>saisir votre <strong>code secret mobile money</strong>  ;</li>
                                                <li><strong>confirmer</strong> la transaction.</li>
                                            </ul>
                                            <p>
                                                Une fois la confirmation effectuée, le paiement est immédiatement pris en compte par la plateforme.
                                            </p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/paie.jpeg" alt="Paiement">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- ETAPE 5 --}}

                <div class="accordion-5 accordion py-3" id="faqAccordion5">
                    <div class="accordion-card">
                        <div class="accordion-header" id="collapse-item-5">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                <i class="fa fa-edit text-primary"></i> Étape 5 : Télécharger le reçu de paiement
                            </button>
                        </div>
                        <div id="collapse-5" class="accordion-collapse collapse show" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion5">
                            <div class="overflow-hidden accordion-body">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <p>
                                                Après le paiement, le médecin peut se rendre dans la rubrique « Historique » de son espace personnel pour :
                                            </p>
                                            <ul>
                                                <li>consulter les <strong>paiements</strong> effectués ;</li>
                                                <li>télécharger le <strong>reçu officiel</strong> de la cotisation réglée.</li>
                                            </ul>
                                            <p>
                                                Grâce à ce système, l’ONMB facilite les démarches administratives tout en garantissant transparence,
                                                sécurité et traçabilité des opérations.
                                            </p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="img-box3">
                                                <img src="assets/img/onmb/inscription_paiement/historique.jpg" alt="Historique">
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
