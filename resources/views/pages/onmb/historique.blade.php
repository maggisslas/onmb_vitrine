@php
    $title_page = 'Historique'
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
                    Découvrez tous les présidents de l'ONMB depuis sa création
                </h4>
            </div>
            <div class="has-shadow">
                <div class="row gy-40 justify-content-center">
                    <!-- Single Item -->

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/1974_1988.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Docteur VOGLER René</a></h3>
                            <span class="team-desig">Président 1974 - 1988</span>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/1995_2006.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Docteur Olivier JOHNSON</a></h3>
                            <span class="team-desig">Président 1995 - 2006</span>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/2006_2014.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Docteur Soulé DAOUDA</a></h3>
                            <span class="team-desig">Président 2006 - 2014</span>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/2014_2018.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Docteur GUEDEGBE Séraphin</a></h3>
                            <span class="team-desig">Président 2014 - 2018</span>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="assets/img/onmb/2018_2022.jpg" alt="Team">
                            </div>
                            <h3 class="box-title"><a href="javascript:void(0)">Docteur Francis M. DOSSOU</a></h3>
                            <span class="team-desig">Président 2018 - 2022</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

