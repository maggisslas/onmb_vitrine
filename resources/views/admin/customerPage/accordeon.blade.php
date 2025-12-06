@extends('admin.layouts.master')

@section('title')
    Personnalisation de la liste {{ ucfirst($type) }}
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
        'title_page'    => "Personnalisation de la liste " . ucfirst($type),
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
                <h5>Personnalisation de la liste {{ ucfirst($type) }}</h5>
              </div>
              <div class="card-body">
                <div class="default-according style-1" id="accordionoc">

                    <form class="card"
                            method="POST"
                            action="{{ route('admin.customer.page.store.list.accordeon' , ['type' => $type] ) }}"
                            enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                            <div class="card-body">

                                    <div class="row">


                                        <div class="col-lg-12" id="accordeon">


                                            <div data-repeater-list="accordeon_list">

                                                @php
                                                    $accordeons = old('accordeon_list', $list_accordeons ?? []);
                                                @endphp

                                                @foreach ($accordeons as $index => $accordeon)


                                                    <div data-repeater-item class="repeater-item">

                                                        <fieldset class="px-5 border-success">

                                                            <legend class="text-primary cursor-pointer">
                                                                Item
                                                                <i data-feather="x" class="mr-25 text-danger" style="cursor: pointer !important;" data-repeater-delete></i>
                                                            </legend>

                                                            <div class="row">

                                                                <div class="col-lg-12 mb-3">
                                                                    <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                                                                    <input class="form-control"
                                                                            type="text"
                                                                            name="title"
                                                                            id="title"
                                                                            placeholder=""
                                                                            value="{{ old('accordeon_list.$index.title', $accordeon['title'] ?? '') }}">
                                                                </div>

                                                                <div class="col-lg-12 mb-3">
                                                                    <label class="col-form-label" for="description">Description</label> <span class="text-danger">*</span>
                                                                    <textarea name="description"
                                                                                id="description"
                                                                                class="form-control"
                                                                                cols="30"
                                                                                rows="5"
                                                                                placeholder="Laissez une description ici...">{{ old('accordeon_list.$index.description', $accordeon['description'] ?? '') }}</textarea>

                                                                    @error("accordeon_list.$index.description")
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
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
                                                        {{-- onclick="completed_item();" --}}
                                                        title="Ajouter une nouvelle item">
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



    @include("admin.customerPage.js.accordeon")

    {{-- <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-custom.js"></script> --}}

@endsection


