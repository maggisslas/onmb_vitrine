@extends('admin.layouts.master')

@section('title')
    Liste des biens
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatable-extension.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="css/select2.css"> --}}
    <style>
        .ck-editor__editable {
            min-height: 200px; /* Ajuste la hauteur minimale */
            max-height: 400px; /* Ajuste la hauteur maximale */
        }

        /* ---- STYLE PRINCIPAL ---- */
        .select2-container .select2-selection--single {
            /* height: 50px; */
            border-radius: 8px;
            border: 1px solid #e5e7eb; /* Gris clair */
            /* background-color: #f9fafb;  */
            display: flex !important;
            align-items: center !important;
            padding: 8px 16px !important;
            transition: all 0.3s ease-in-out;

        }

        /* Au survol et au focus */
        .select2-container--default .select2-selection--single:hover,
        .select2-container--default .select2-selection--single:focus {
            border-color: #d1d5db;
        }

        /* Texte de l'élément sélectionné */
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            /* font-size: 16px; */
            color: #333;
            font-weight: 500;
        }

        /* Flèche du Select2 */
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #999 transparent transparent transparent !important;
        }

        /* ---- DROPDOWN (MENU DÉROULANT) ---- */
        .select2-dropdown {
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* ---- OPTIONS DU SELECT2 ---- */
        .select2-container--default .select2-results__option {
            /* padding: 0px 16px; */
            font-size: 16px;
            color: #333;
            transition: background-color 0.2s ease-in-out;
        }

        /* Au survol */
        .select2-container--default .select2-results__option--highlighted {
            background: #047857; /* Vert foncé */
            color: #fff;
        }

        /* Option sélectionnée */
        .select2-container--default .select2-results__option[aria-selected="true"] {
            background: #047857;
            font-weight: bold;
            color: #fff;
        }

        .select2-results__options {
            max-height: 200px; /* Définir la hauteur maximale pour le dropdown */
            overflow-y: auto;  /* Activer le scroll vertical si le contenu dépasse la hauteur */
        }




    </style>

    @include('admin.layouts.css.dropzone')

@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Biens",
        'paths'         => [
            ['#' , 'Liste', true]
        ],

    ])
@endsection

@section('content')


	<div class="container-fluid">

        <div class="d-flex mb-4 justify-content-between">

            <div>
                <h3>Liste des biens immobilier</h3>
            </div>

            <div class="">
                <button class="btn btn-success btn_to_add"
                        data-bs-toggle="modal"
                        data-original-title="Ajouter une catégorie"
                        data-bs-target="#addModal">
                    <i class="icofont icofont-plus"></i> Ajouter un bien
                </button>
            </div>

        </div>

	    <div class="row">

	        <!-- Base styles-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display text-center" id="immobilier_table">
	                            <thead>
	                                <tr>
	                                    <th>N°</th>
	                                    <th>Image</th>
	                                    <th>Nom</th>
	                                    {{-- <th>Slug</th> --}}
	                                    <th>Description</th>
	                                    <th>Caractéristiques</th>
	                                    <th>Localisation</th>
	                                    <th>Montant</th>
	                                    <th>Catégorie</th>
	                                    <th>Par</th>
	                                    <th>Actions</th>
	                                </tr>
	                            </thead>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>

            <form id="delete_form" action="#" method="POST">
                @method('DELETE')
                @csrf
            </form>
	        <!-- Base styles Ends-->
	    </div>
	</div>

    @include('admin.immobiliers.modals.index')

@endsection

@section('scripts')

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    {{-- <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-custom.js"></script> --}}

    @include('admin.immobiliers.js.index')

@endsection


