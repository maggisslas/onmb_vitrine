@extends('admin.layouts.master')

@section('title')

    Profil

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Utilisateurs",
        'paths'         => [
            [route('admin.users.index') , "Liste", false],
            ['#' , "Modification", true]
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

                        <form action="{{ route('admin.users.update' , $user) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-lg-6 my-2">
                                    <label for="lastname"> Nom <span class="text-danger">*</span> </label>
                                    <input type="text"
                                            name="lastname"
                                            id="lastname"
                                            class="form-control @error('lastname') is-invalid @enderror"
                                            value="{{ $user->lastname }}"
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
                                            value="{{ $user->firstname }}"
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
                                            value="{{ $user->email }}"
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
                                            value="{{ $user->telephone }}"
                                            required>
                                    @error('telephone')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="current_password"> Mot de passe actuel <span class="text-danger">*</span> </label>
                                            <input type="password"
                                                    name="current_password"
                                                    id="current_password"
                                                    class="form-control @error('current_password') is-invalid @enderror"
                                                    placeholder="********"
                                                    >
                                            @error('current_password')
                                                <small class="form-text text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>

                                        <div class="col-lg-4">
                                            <label for="password"> Nouveau mot de passe <span class="text-danger">*</span> </label>
                                            <input type="password"
                                                    name="password"
                                                    id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="********"
                                                    >
                                            @error('password')
                                                <small class="form-text text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>

                                        <div class="col-lg-4">
                                            <label for="confirm_password"> Confirmation mot de passe <span class="text-danger">*</span> </label>
                                            <input type="password"
                                                    name="password_confirmation"
                                                    id="password_confirmation"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    placeholder="********"
                                                    >
                                            @error('password_confirmation')
                                                <small class="form-text text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-4 d-flex justify-content-between">
                                    <a class="btn btn-light" href="{{ route('admin.users.index' , 'admin') }}">
                                        <i class="fa fa-arrow-left"></i> Retour
                                    </a>
                                    <button class="btn btn-primary">
                                        <i class="fa fa-edit"></i> Modifier
                                    </button>
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


