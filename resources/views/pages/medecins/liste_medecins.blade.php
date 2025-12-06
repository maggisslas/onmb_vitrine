@php
    $title_page = 'Tableau des médécins'
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css">

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])

    <section class="container py-0">

            <div class="title-area text-center pt-5">
                <h4 class="sec-title">

                </h4>
            </div>



            <table id="list" class="display">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom & Prénom</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($members as $key => $member)

                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $member['old_full_name'] }}</td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

    </section>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script>

    <script>
        new DataTable('#list',{
            info: true,
            ordering: true,
            paging: true,
            language: {
                search: 'Recherchez un membre',
                zeroRecords: 'Aucun membre trouvé',
                lengthMenu: "Afficher _MENU_ Membres par page",
                info:'Affichage du _START_ (er/ème) au _END_ ème membre sur _TOTAL_ au total',
                infoEmpty: 'Aucune donnée disponible',
                infoFiltered: '(filtré à partir de _MAX_ membres au total)',
            }
        });
    </script>
@endsection
