@extends('admin.layouts.master')

@section('title')
    Personnalisation des offres de laverie
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatable-extension.css') }}">

    @include('admin.layouts.css.dropzone')

    <style>

        fieldset {
            border: 1px solid transparent;
            /* padding: 1.5rem; */
            /* margin-bottom: 1.5rem; */
            border-radius: 5px;
            margin: 3rem 0px;
        }
        legend {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 0 10px;
            margin-top: -15px !important;
            margin-left: 20px;
            width: auto;
            color: #000000;
            border: none;
            background: white;
        }

    </style>

@include('admin.layouts.css.dropzone')

@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Personnalisation des offres de laverie",
        'paths'         => [
            [route('admin.customer.page.discover.service' , ['type' => 'laverie']) , 'Page de personnalisation', false],
            ['#' , 'Offres', true]
        ],

    ])
@endsection

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Personnalisation des offres de : {{ $laverie_offer->title }}</h5>
              </div>
              <div class="card-body">
                <div class="default-according style-1" id="accordionoc">

                    <form class="card"
                            method="POST"
                            action="{{ route('admin.customer.page.store.details.offer' , $laverie_offer->id ) }}"
                            enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                            <div class="card-body">

                                    <div class="row">


                                        <div class="col-lg-12" id="offer_content_page">


                                            <div data-repeater-list="offer_content_list">

                                                @php
                                                    $contentListOffer = old('offer_content_list', $laverie_offer->laverie_offer_details ?? []);
                                                @endphp

                                                @foreach ($contentListOffer as $index => $laverie_offer_details)

                                                    <div data-repeater-item class="repeater-item">

                                                        <fieldset class="px-5 border-success">

                                                            <legend class="text-primary cursor-pointer">
                                                                Nos offres
                                                                <i data-feather="x" class="mr-25 text-danger" style="cursor: pointer !important;" data-repeater-delete></i>
                                                            </legend>

                                                            <div class="row">

                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="title"
                                                                            id="title"
                                                                            placeholder=""
                                                                            value="{{ old('offer_content_list.$index.title', $laverie_offer_details['title'] ?? '') }}">
                                                                </div>

                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="col-form-label" for="price">Prix</label>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="price"
                                                                            id="price"
                                                                            placeholder=""
                                                                            value="{{ old('offer_content_list.$index.price', $laverie_offer_details['price'] ?? '') }}">

                                                                    @error("offer_content_list.$index.price")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div id="by" class="col-lg-4 mb-3">
                                                                    <label class="col-form-label" for="by">Par</label>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="by"
                                                                            placeholder=""
                                                                            value="{{ old('offer_content_list.$index.by', $laverie_offer_details['by'] ?? '') }}">
                                                                </div>


                                                                <div class="pb-3">
                                                                    <label for="">Image</label> <span class="text-danger">*</span>
                                                                    <div class="drop-zone" id="{{ 'dropZoneOffer_'.$index }}">
                                                                        <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                                                                        <input type="file"
                                                                                id="{{ 'picture_offer_'.$index }}"
                                                                                name="picture_offer"
                                                                                class="image-validator"
                                                                                hidden
                                                                                accept="image/*">
                                                                    </div>

                                                                    <p id="error-message" style="color: red; display: none;"></p>

                                                                    <div class="file-list" id="{{ 'pictureOfferList_'.$index }}"></div>

                                                                </div>

                                                            </div>

                                                        </fieldset>

                                                    </div>

                                                @endforeach


                                            </div>

                                            <div class="pb-2 mt-3">
                                                <button class="btn-icon rounded-circle btn-success"
                                                        style="width:auto;"
                                                        type="button"
                                                        data-repeater-create
                                                        onclick="completed_offer_contenu();"
                                                        title="Ajouter un nouveau contenu">
                                                    <i data-feather="plus" class="fw-bold"></i>
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                {{-- @endforeach --}}

                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-success w-auto">Enregistrer</button>
                                </div>

                            </div>

                    </form>

                </div>
              </div>
            </div>
          </div>

    </div>
</div>

@endsection


@section('scripts')

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/js/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>



    @include("admin.customerPage.js.laverieDetailsOffer")

    {{-- <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-custom.js"></script> --}}

@endsection
