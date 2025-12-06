@extends('admin.layouts.master')

@section('title')
    Tableau de bord
@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Tableau de bord",
        'paths'         => [
            ['#' , 'test', true]
        ],

    ])
@endsection

@section('content')

@endsection
