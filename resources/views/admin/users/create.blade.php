@extends('admin.layouts.master')

@section('title')

    Ajout utilisateur

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Utilisateurs",
        'paths'         => [
            [route('admin.users.index') , "Liste", false],
            ['#' , "Création", true]
        ],

    ])
@endsection

@section('content')

	<div class="container-fluid">
	    <div class="row">
	        <!-- Base styles-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">

                        <form action="{{ route('admin.users.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 my-2">
                                    <label for="lastname"> Nom <span class="text-danger">*</span> </label>
                                    <input type="text"
                                            name="lastname"
                                            id="lastname"
                                            class="form-control @error('lastname') is-invalid @enderror"
                                            value="{{ old('lastname') }}"
                                            required>
                                    @error('lastname')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 my-2">
                                    <label for="firstname"> Prénom(s) <span class="text-danger">*</span> </label>
                                    <input type="text"
                                            name="firstname"
                                            id="firstname"
                                            class="form-control @error('firstname') is-invalid @enderror"
                                            value="{{ old('firstname') }}"
                                            required>
                                    @error('firstname')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 my-2">
                                    <label for="email"> E-mail <span class="text-danger">*</span> </label>
                                    <input type="email"
                                            name="email"
                                            id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"
                                            required>
                                    @error('email')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 my-2">
                                    <label for="telephone"> Téléphone <span class="text-danger">*</span> </label>
                                    <input type="text"
                                            name="telephone"
                                            id="telephone"
                                            class="form-control @error('telephone') is-invalid @enderror"
                                            value="{{ old('telephone') }}"
                                            required>
                                    @error('telephone')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-6 my-2">
                                    <label for="role_id"> Rôle <span class="text-danger">*</span> </label>
                                    <select name="role_id"
                                            id="role_id"
                                            class="js-example-basic-single @error('role_id') is-invalid @enderror"
                                            required>

                                        <option value="">Sélectionnez un rôle</option>

                                        @foreach ($roles as $role)
                                            {{-- <option value="{{ $role->id }}">{{ $role->label }}</option> --}}

                                            <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                                {{ $role->label }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('role_id')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-12 mt-3 d-flex justify-content-between">
                                    <a class="btn btn-light" href="{{ route('admin.users.index') }}">
                                        <i class="fa fa-arrow-left"></i> Retour
                                    </a>
                                    <button class="btn btn-primary"> <i class="fa fa-save"></i> Enregistrer </button>
                                </div>

                            </div>
                        </form>

	                </div>
	            </div>
	        </div>
	        <!-- Base styles Ends-->
	    </div>
	</div>
@endsection

@section('scripts')

    {{-- @include('admin.users.js.index') --}}

@endsection


