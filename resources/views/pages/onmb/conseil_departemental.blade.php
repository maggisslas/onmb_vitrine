@php
    $title_page = 'Conseil départemental'
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

    <section class="py-5">
        <div class="container">

            <div class="py-4">
                <strong>
                    Conformément aux textes statutaires, le conseil national a procédé à l’installation de conseillers départementaux. Leur cahier de charge se résume comme suit :
                </strong>
            </div>

            <div class="row checklist style">

                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Collecter les dossiers d’inscription et de demande d’autorisation des médecins de leurs départements respectifs.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Confectionner la liste des médecins intervenant dans le département
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Participer aux visites de sites de la commission technique de délivrance des autorisations.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Participer aux opérations de contrôle et de fermeture des structures de santé illégales.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Contribuer à l’organisation de diverses activités de l’Ordre dans leur département.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-1">
                    <ul>
                        <li>
                            <i class="fas fa-shield-check text-theme2"></i> Préparer et conduire au moment opportun les élections des conseils départementaux.
                        </li>
                    </ul>
                </div>

            </div>


        </div>
    </section>


    <section class="">
        <div class="container">

            <div class="title-area text-center">
                <h4 class="sec-title">
                    Liste des conseillers départementaux
                </h4>
            </div>

            <div class="row">

                {{-- ALIBORI --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">Alibori</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_Alibori.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">BODJRENOU Edmond</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">DANDJESSO Gaston</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">OLOUDE Moufidath</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- ATACORA --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">Atacora</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">DEDEDI Thibaut</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">SAKA Dominique</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/T_Atacora.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">GAYITO Adagba Réné</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- ATLANTIQUE --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">Atlantique</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_Atlantique.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> ADJADI BAKARIN. Modukpé</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">CHABI Eriolla F.</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">TOHOUENOU Christian</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- BORGOU --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">BORGOU</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_Borgou.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> AYEDOUN Moussa</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/P_Borgou.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Présidente</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">HOUNKPONOU AHOUINGNAN Fanny M.</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/T_Borgou.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">TOSSOU Nestor</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- COLLINES --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">Collines</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/KINKPE_Elisee_Sessi.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> KINKPE S. Elisée</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">AHOUASSA Jacques</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">ΚΑΚΡΟ Κ. Armand</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- COUFFO --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">COUFFO</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> LOKOSSOU Armel Godfrid M. </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">KPOTON Séna Godwin Gérard</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">DAVO Alain</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- DONGA --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">DONGA</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_DONGA.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> GBETCHOEVI Dominique Laurent </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/P_Donga.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">ABDOULAYE Imorou Abdoulaye</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">ZOUMAROU Cyrille</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- LITTORAL --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">LITTORAL</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> GUEZO Romaric Darius </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">AGOSSOU vidéhouénou</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">AGBESSI Odry</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- MONO --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">MONO</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_Mono.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> DJIDONOU Anselme </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/P_Mono.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">AKAKPO Rubens</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">DOTONHOUE Modeste</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- OUEME --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">OUEME</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> GBANTEHOU Yenido David </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">AGOSSOU Dagbégnon Etienne</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/T_Oueme.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">FIOGBE Djotolé Arnette</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- PLATEAU --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">PLATEAU</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> ALIHO Déo-Gracias Ulrich </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">Da CRUZ Paul Codjo</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">HOUNDEKON Boucheix M</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                 {{-- ZOU --}}
                <div class="col-xl-6 p-5">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h5 class="sec-title has-line text-center">
                                <a href="javascript:void(0)" class="th-btn style-smoke">ZOU</a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gy-40">

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/S_BORGOU.jpeg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Secrétaire</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px"> ZOUNON Imourann Ghislain </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/P_Zou.jpg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category text-white" style="border-radius: 10px; background:#bc1f24;">Président</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">NOUWAKPO Natacha Baïvi</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/onmb/avatar-default.svg" alt="Membre">
                                </div>
                                <div class="product-content text-center">
                                    <a href="javascript:void(0)" class="product-category">Rapporteur</a>
                                    <h5 class="product-title">
                                        <a href="javascript:void(0)" style="font-size: 16px">GLITHO Sylvain Egnommon</a>
                                    </h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection

