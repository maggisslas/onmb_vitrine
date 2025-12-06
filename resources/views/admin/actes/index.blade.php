@extends('admin.layouts.master')

@section('title')
    Liste des actes
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    
    @include('admin.layouts.css.dropzone')

@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Actes",
        'paths'         => [
            ['#' , 'Liste', true]
        ],

    ])
@endsection

@section('content')


	<div class="container-fluid">

        <div class="d-flex mb-4 justify-content-between">

            <div>
                <h3>Liste des actes</h3>
            </div>

            <div class="">
                <button class="btn btn-success btn_to_add"
                        data-bs-toggle="modal"
                        data-original-title="Ajouter une catégorie"
                        data-bs-target="#addModal">
                    <i class="icofont icofont-plus"></i> Ajouter un acte
                </button>
            </div>

        </div>

	    <div class="row">

	        <!-- Base styles-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display text-center" id="acte_table">
	                            <thead>
	                                <tr>
	                                    <th>N°</th>
	                                    <th>Nom</th>
	                                    {{-- <th>URL</th> --}}
	                                    <th>Description</th>
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

    @include('admin.actes.modals.index')

@endsection

@section('scripts')

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    @include('admin.actes.js.index')

@endsection


