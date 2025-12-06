@extends('admin.layouts.master')

@section('title')
    Liste des témoignages
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    @include('admin.layouts.css.dropzone')

@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Témoignages",
        'paths'         => [
            ['#' , 'Liste', true]
        ],
    ])
@endsection

@section('content')


	<div class="container-fluid">

        <div class="d-flex mb-4 justify-content-between">

            <div>
                <h3>Liste des témoignages</h3>
            </div>

            <div class="">
                <button class="btn btn-success btn_to_add"
                        data-bs-toggle="modal"
                        data-original-title="Ajouter un témoignage"
                        data-bs-target="#addModal">
                    <i class="icofont icofont-plus"></i> Ajouter un témoignage
                </button>
            </div>

        </div>

	    <div class="row">

	        <!-- Base styles-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display text-center" id="temoignage_table">
	                            <thead>
	                                <tr>
	                                    <th>N°</th>
	                                    <th>Image</th>
	                                    <th>Nom</th>
	                                    <th>Commentaire</th>
	                                    <th>Nbr étoiles</th>
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

    @include('admin.temoignage.modals.index')

@endsection

@section('scripts')
    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>

    @include('admin.temoignage.js.index')

@endsection


