@php
    $title_page = 'Actes & autorisations'
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')
    <style>
        .service-card:hover .box-shape{
            opacity: 1;
        }
        .service-card:hover .box-icon{
            background-color: #e6e9ee;
        }
        .service-card:hover .box-title {
            color: var(--theme-color);
        }
        .service-card .box-icon{
            margin: 0 auto 10px auto;
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

            {{-- <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Our Mediax specialties Technical service</h2>
                    </div>
                </div>
            </div> --}}

            {{-- Select & Search --}}
            <section class="container">

                <div class="pb-5" >
                    <div id="ajax-search-container"
                        style="margin-top:20px; display:flex; flex-wrap: wrap; justify-content: space-between; align-items: center !important;">

                        <div>
                            <select name="category_acte_autorisation"
                                    id="category_acte_autorisation"
                                    style="width:auto; margin-bottom:8px !important;">
                                    <option value="" onclick="load_actes()"> Toutes les catégories </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" onclick="load_actes()">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                            </select>
                            <span id="nbr_element"></span>
                        </div>
                        <div>
                            <input type="text"
                                    name="search"
                                    id="search_acte_autorisation"
                                    style="width:auto; margin-bottom:8px !important;"
                                    placeholder="Rechercher un acte"
                                    oninput="load_actes()">
                        </div>

                    </div>
                    <div id="ajax-search-results-actes-autorisations"></div>
                </div>

                {{-- PDFs --}}
                <div class="row gy-4 justify-content-center" id="content_acte">

                    {{-- @foreach ($actes as $acte)


                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="service-card">
                                <div class="box-shape">
                                    <img src="assets/img/bg/service_card_bg.png" alt="Service">
                                </div>
                                <div class="box-icon">
                                    <img src="assets/img/icon/pdf.svg" alt="Icon pdf" style="width: 40px">
                                </div>
                                <h3 class="box-title py-2">
                                    <a href="javascript:void(0)" style="font-size: 16px">
                                        {{ $acte->title }}
                                    </a>
                                </h3>
                                <a href="{{ $acte->getFirstMediaUrl('Acte') ? $acte->getFirstMediaUrl('Acte') : '#' }}"
                                    class="th-btn btn-sm btn-p"
                                    style="font-size: 10px"
                                    target="_blank">
                                    <i class="fa fa-download"></i> Télécharger
                                </a>
                            </div>
                        </div>

                    @endforeach --}}

                </div>

            </section>

        </div>
    </section>

@endsection

@section('scripts')
    @include('pages.onmb.js.actes_autorisations')
@endsection
