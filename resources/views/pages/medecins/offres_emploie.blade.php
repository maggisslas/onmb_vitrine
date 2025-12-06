@php
    $title_page = "Offres d'emploie"
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])

    <p class="text-center py-5">
        Aucune offre d'emploie pour le moment.
    </p>

@endsection

