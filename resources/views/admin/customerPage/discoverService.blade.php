@extends('admin.layouts.master')

@section('title')
    Personnalisation de la page
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatable-extension.css') }}">

    @include('admin.layouts.css.dropzone')

    <style>

        .ck-editor__editable {
            min-height: 100px; /* Ajuste la hauteur minimale */
            max-height: 200px; /* Ajuste la hauteur maximale */
        }

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
        'title_page'    => "Personnalisation de la page",
        'paths'         => [
            ['#' , 'Liste', true]
        ],

    ])
@endsection

@section('content')


	<div class="container-fluid">

	    <div class="row">

            <div class="col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Personnalisation</h5>
                  </div>
                  <div class="card-body">
                    <div class="default-according style-1" id="accordionoc">

                        <form class="card"
                                method="POST"
                                action="{{ route('admin.customer.page.discover.service.update' , ['type' => $type]) }}"
                                enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-header bg-primary">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-white"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseicon"
                                            aria-expanded="true"
                                            aria-controls="collapse11"
                                            type="button">
                                        <i class="icofont icofont-plus"></i> Section : <span>Découvrez Betos {{ ucfirst($type) }} </span>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordionoc">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-lg-12 mb-3">
                                            <label class="col-form-label" for="catchphrase">Phrase d'accroche</label> <span class="text-danger">*</span>
                                            <input class="form-control"
                                                    type="text"
                                                    name="catchphrase"
                                                    id="catchphrase"
                                                    placeholder=""
                                                    value="{{ old('catchphrase' , $discover_service->catchphrase) }}">

                                                    @error('catchphrase')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                        </div>

                                        <div class="col-lg-12" id="content_page">


                                            <div data-repeater-list="content_list">

                                                @php
                                                    $contentList = old('content_list', $discover_service->discorver_service_details ?? []);
                                                @endphp

                                                @foreach ($contentList as $index => $discorver_service_details)

                                                    <div data-repeater-item>

                                                        <fieldset class="px-5 border-success">

                                                            <legend class="text-primary cursor-pointer">
                                                                Contenu
                                                                <i data-feather="x" class="mr-25 text-danger" style="cursor: pointer !important;" data-repeater-delete></i>
                                                            </legend>

                                                            <div class="row">

                                                                <div class="col-lg-12 mb-3">
                                                                    <label class="col-form-label" for="title">Titre</label>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="title"
                                                                            id="title"
                                                                            placeholder="Exemple : Evaluer"
                                                                            value="{{ old('content_list.$index.title', $discorver_service_details['title'] ?? '') }}">
                                                                </div>

                                                                <div class="col-lg-12 mb-3">
                                                                    <label class="col-form-label" for="description">Description</label> <span class="text-danger">*</span>
                                                                    <textarea name="description"
                                                                                id="description"
                                                                                class="form-control description"
                                                                                cols="30"
                                                                                rows="3"
                                                                                placeholder="Laissez une description ici...">{!! old("content_list.$index.description", $discorver_service_details['description'] ?? '') !!}</textarea>

                                                                    @error("content_list.$index.description")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div id="advanced" class="col-lg-12 mb-3">
                                                                    <label class="col-form-label" for="advanced">Avantage</label>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="advanced"
                                                                            placeholder="Exemple : La transparence | La simplicité | La confiance"
                                                                            value="{{ old('content_list.$index.avanced', $discorver_service_details['advanced'] ?? '') }}">
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
                                                        onclick="completed_contenu();"
                                                        title="Ajouter un nouveau contenu">
                                                    <i data-feather="plus" class="fw-bold"></i>
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                    <div>
                                        <label for="">Image</label> <span class="text-danger">*</span>

                                        <div class="drop-zone" id="dropZone">
                                            <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                                            <input type="file"
                                                    id="picture"
                                                    name="picture"
                                                    class="image-validator"
                                                    hidden
                                                    accept="image/*">
                                        </div>

                                        <p id="error-message" style="color: red; display: none;"></p>

                                        <div class="file-list" id="pictureList"></div>

                                    </div>

                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-success w-auto">Enregistrer</button>
                                    </div>

                                </div>

                            </div>



                        </form>


                        @if ($type == 'laverie')

                            <form class="card"
                                    method="POST"
                                    action="{{ route('admin.customer.page.store.offer') }}"
                                    enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                    <div class="card-header bg-primary">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-white"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#sessionOffres"
                                                    aria-expanded="true"
                                                    aria-controls="collapse11"
                                                    type="button">
                                                <i class="icofont icofont-plus"></i> Section : <span>Nos offres </span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="sessionOffres" aria-labelledby="sessionOffres" data-bs-parent="#accordionoc">

                                        <div class="card-body">

                                            @foreach ($laverie_offers as $key => $laverie_offer)

                                                <div class="row">

                                                    <div class="d-none">
                                                        <input type="text"
                                                                name="id[]"
                                                                value="{{ $laverie_offer->id }}">
                                                    </div>

                                                    <div class="col-lg-5 mb-3">
                                                        <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                                                        <input class="form-control"
                                                                type="text"
                                                                name="title[]"
                                                                id="title"
                                                                placeholder="Exemple : Nettoyage de linge classique"
                                                                value="{{ old('title' , $laverie_offer->title) }}">

                                                                @error('title')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                    </div>

                                                    <div class="col-lg-5 mb-3">
                                                        <label class="col-form-label" for="sub_title">Sous-titre</label> <span class="text-danger">*</span>
                                                        <input class="form-control"
                                                                type="text"
                                                                name="sub_title[]"
                                                                id="sub_title"
                                                                placeholder="Exemple : Livré gratuitement en 72h"
                                                                value="{{ old('sub_title' , $laverie_offer->sub_title) }}">

                                                                @error('sub_title')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                    </div>

                                                    <div class="col-lg-2 mb-3 d-flex align-items-end">
                                                        <a class="btn btn-warning text-center btn_to_add_new_offer"
                                                            href="{{ route('admin.customer.page.get.details.offer' , $laverie_offer->id) }}">
                                                            <i class="icofont icofont-plus"></i> Offres
                                                        </a>
                                                    </div>

                                                </div>

                                            @endforeach

                                            <div class="d-flex justify-content-center mt-3">
                                                <button type="submit" class="btn btn-success w-auto">Enregistrer</button>
                                            </div>

                                        </div>

                                    </div>



                            </form>

                        @endif

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



    @include("admin.customerPage.js.index")

    {{-- <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-custom.js"></script> --}}

@endsection


