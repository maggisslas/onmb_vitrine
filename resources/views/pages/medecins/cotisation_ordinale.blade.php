@php
    $title_page = 'Cotisation ordinale'
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])


    <section class="why-sec2 py-5">

        <div class="shape-mockup" data-bottom="0%" data-left="0%"><img src="assets/img/shape/pattern_shape_4.png" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="title-area text-center">
                        <p>
                            Les frais d’inscription à l’ONMB (25.000 FCFA) et les cotisations annuelles (24.000 FCFA) peuvent être payés suivant 5 méthodes. Quelque soit la méthode choisie, conservez la preuve du paiement (reçu, capture d’écran) que vous enverrez au secrétariat de l’ONMB à l’adresse mail ''onmb1973_2006@yahoo.fr'' ou par Whatsapp au +229 94 96 81 81.
                        </p>
                    </div>
                </div>
            </div>
            <div class="choose-tab-area">
                <div class="choose-tab">
                    <div class="nav indicator-active" role="tablist">
                        <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="false">
                            <span class="icon">
                                <img src="assets/img/icon/tab_icon_1.svg" alt="icon">
                            </span> Site web
                        </button>
                        <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="true">
                            <span class="icon">
                                <img src="assets/img/icon/tab_icon_1.svg" alt="icon">
                            </span> MTN
                        </button>
                        <button class="tab-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">
                            <span class="icon">
                                <img src="assets/img/icon/tab_icon_1.svg" alt="icon">
                            </span> MOOV
                        </button>
                        <button class="tab-btn" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false">
                            <span class="icon">
                                <img src="assets/img/icon/tab_icon_1.svg" alt="icon">
                            </span> Orabank
                        </button>
                        <button class="tab-btn" id="nav-five-tab" data-bs-toggle="tab" data-bs-target="#nav-five" type="button" role="tab" aria-controls="nav-five" aria-selected="false">
                            <span class="icon">
                                <img src="assets/img/icon/tab_icon_1.svg" alt="icon">
                            </span> BGFI
                        </button>
                    </div>
                </div>
                <div class="tab-content why-tab-content">
                    <!-- Single item -->
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="row gy-40 align-items-center">
                            <div class="col-xl-7">
                                <h3 class="sec-title">
                                    Paiement à effectuer depuis votre espace membre
                                    <span class="text-theme">Tableau de bord des membre</span>
                                </h3>
                                <p class="box-text">
                                    Depuis votre espace membre, dans le menu COTISATION, vous avez la possibilité de faire vos paiement de cotisation annuelle.
                                </p>
                                <a href="https://monespace.ordremedecinsbenin.bj/" target="_blank" class="btn btn-p">Effectuez une cotisation maintenant</a>

                            </div>
                            <div class="col-xl-5">
                                <div class="ms-xl-5">
                                    <img src="assets/img/onmb/onmb.png" alt="Logo de l'ONMB" class="w-100 rounded-30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <div class="row gy-40 align-items-center">
                            <div class="col-xl-7">
                                <h3 class="sec-title">
                                    Paiement à effectuer via mobile money
                                    <span class="text-theme">MTN </span>
                                    Au *880*41*747956*MONTANT#
                                </h3>
                                <p class="box-text">
                                    Il s’agit d’un numéro accepteur (numéro non joignable par appel usuel). Le processus est différent de celui d’un envoi d’argent usuel entre abonnés physiques.
                                </p>

                            </div>
                            <div class="col-xl-5">
                                <div class="ms-xl-5">
                                    <img src="assets/img/onmb/logo-mtn.png" alt="Logo de MTN" class="w-100 rounded-30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <div class="row gy-40 align-items-center">
                            <div class="col-xl-7">
                                <h3 class="sec-title">
                                    Paiement à effectuer via mobile money
                                    <span class="text-theme">MOOV </span>
                                    Au *855*4*1*13131*MONTANT*1*CODE SECRET#
                                </h3>
                                <p class="box-text">
                                    Il s’agit d’un numéro accepteur (numéro non joignable par appel usuel). Le processus est différent de celui d’un envoi d’argent usuel entre abonnés physiques.
                                </p>

                            </div>
                            <div class="col-xl-5">
                                <div class="ms-xl-5">
                                    <img src="assets/img/onmb/Moov_Africa_logo.png" alt="logo de MOOV" class="w-100 rounded-30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                        <div class="row gy-40 align-items-center">
                            <div class="col-xl-7">
                                <h3 class="sec-title">
                                    Paiement à effectuer au niveau d'une agence bancaire
                                    <span class="text-theme">Orabank </span>
                                </h3>
                                <p class="box-text">
                                    Versez les frais d’inscription ou la cotisation à la banque ORABANK sous le numéro de compte de l’ONMB : 01000-00101380139-79. Un tiers peut le faire à votre place. Dans ce cas il devra préciser votre identité au niveau du champ « client ».
                                </p>
                                <strong>
                                    Numéro de compte : 01000-00101380139-79
                                </strong>

                            </div>
                            <div class="col-xl-5">
                                <div class="ms-xl-5">
                                    <img src="assets/img/onmb/orabank.jpg" alt="logo de ORABANK" class="w-100 rounded-30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
                        <div class="row gy-40 align-items-center">
                            <div class="col-xl-7">
                                <h3 class="sec-title">
                                    Paiement à effectuer au niveau d'une agence bancaire
                                    <span class="text-theme">BGFI </span>
                                </h3>
                                <p class="box-text">
                                    Versez les frais d’inscription ou la cotisation à la banque BGFI sous le numéro de compte de l’ONMB : 060021515011-58. Un tiers peut le faire à votre place. Dans ce cas il devra préciser votre identité au niveau du champ « client ».
                                </p>
                                <strong>
                                    Numéro de compte : 060021515011-58
                                </strong>

                            </div>
                            <div class="col-xl-5">
                                <div class="ms-xl-5">
                                    <img src="assets/img/onmb/BGFI-Bank.png" alt="logo de BGFI BANK" class="w-100 rounded-30">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

