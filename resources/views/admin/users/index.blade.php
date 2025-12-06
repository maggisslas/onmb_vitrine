@extends('admin.layouts.master')

@section('title')

    {{-- {!! ucfirst($page_name) !!} --}}
    Utilisateurs

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Utilisateurs",
        'paths'         => [
            ['#' , 'Liste', true]
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

                        @if(Auth::user()->role->name == 'admin')

                            <div class="row mb-3">
                                <div class="col-lg-12 text-end">
                                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Ajouter
                                    </a>
                                </div>
                            </div>

                        @endif

	                    <div class="" style="width: 100% !important;">
	                        <table class="display" id="example-style-1">
	                            <thead>
	                                <tr>
	                                    <th>Non</th>
	                                    <th>Prénom</th>
                                        <th>E-mail</th>
	                                    <th>Téléphone</th>
	                                    <th>Actions</th>
	                                </tr>
	                            </thead>
	                            <tbody>

                                    @foreach ($users as $key => $user)

                                        <tr>

                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->telephone }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">

                                                    <div class="switch-md-customer mx-2">
                                                        <label class="switch">
                                                            <input type="checkbox"
                                                                id="{{ 'state-'.$user->id }}"
                                                                onchange="user_state({{ $user }} , '{{ 'state-'.$user->id }}')"
                                                                {{ $user->is_enabled ? 'checked' : '' }}>
                                                            <span class="switch-state"></span>
                                                        </label>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>

                                    @endforeach

	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Base styles Ends-->
	    </div>
	</div>
    
@endsection

@section('scripts')

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script>
        $.extend(true, $.fn.dataTable.defaults, {
            processing: true,
            responsive:true,
            scrollX:"300px",
            language: {
                url: '{!! asset('admin/js/datatable/lang/french.json') !!}'
            },
        });
    </script>

    @include('admin.users.js.index')

@endsection


