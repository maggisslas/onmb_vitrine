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
                <h4 class="sec-title" style="text-transform: none;">
                    Découvrez les membres du Conseil National installé lundi 22 juin 2026
                </h4>
            </div>
            <div class="has-shadow">
                <div class="row gy-40 justify-content-center">
                    <!-- Single Item -->

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/ONMB_PR.jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Boro Kamel Séro LAFIA</h3>
                            <span class="team-desig">Président</span>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (7).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Ablo Prudence WACHINOU</h3>
                            <span class="team-desig">Vice-Président</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (5).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Gloria Joyce HOUNMENOU</h3>
                            <span class="team-desig">Secrétaire Générale</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (1).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Zoulkanéri ALASSANE</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>

                    <!-- Single Item -->

                <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (2).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Abdoul-Nassif SIME DEGUIRI CHABI YO</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (3).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Cossi Cyrille KPANGON</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (4).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Razacki MOUSTAPHA</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (6).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Dossi Yabo Marie-Reine ADANLIN</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/CN_ONMB (9).jpeg" alt="Team">
                            </div>
                            <h3 class="box-title">Dr Dominique Honoré SAKA</h3>
                            <span class="team-desig">Membre</span>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
        </div>
    </section>

@endsection
