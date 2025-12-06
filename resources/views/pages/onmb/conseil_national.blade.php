@php
    $title_page = 'Conseil national'
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


    <section class="bg-top-center space-top pb-5" id="team-sec">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <h4 class="sec-title">
                    Découvrez les membres de notre conseil national installé depuis le 20 juin 2018
                </h4>
            </div>
            <div class="has-shadow">
                <div class="row gy-40 justify-content-center">
                    <!-- Single Item -->

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Pr-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr Abou ADEGBINDIN</a></h3>
                            <span class="team-desig">Président</span>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/vp-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr Josiane Houansou</a></h3>
                            <span class="team-desig">Vice-Président</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/SG-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr Iguémal ADJAHOTO</a></h3>
                            <span class="team-desig">Secrétaire Général</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/TG-ONMB.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr Solange KANMADOZO</a></h3>
                            <span class="team-desig">Trésorière Générale</span>
                        </div>
                    </div>

                    <!-- Single Item -->

                <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Kiki_onmb.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr KIKI MIGAN Eric</a></h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/LAFIA-BORO-Kamel.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr LAFIA BORO Kamel</a></h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Alexis_onmb.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr TCHEVOEDE Yémalin Alexis</a></h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Boris_onmb.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Dr DAGBOZOUNKOU Boris</a></h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/Pr.-Angelo.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Pr. Cossi Angelo ATTINSOUNON</a></h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
