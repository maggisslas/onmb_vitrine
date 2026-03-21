@php
    $title_page = "Liste définitive des électeurs"
@endphp

@extends('layouts.master')

@section('title')
    {{ $title_page }}
@endsection

@section('style')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css"> --}}
    <link rel="stylesheet" href="assets/css/dataTable.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.8/css/responsive.dataTables.css">
    <!-- <link rel="stylesheet" href="assets/css/datatables.bundle.css"> -->
    <style>
        select, input {
            height: 47px !important;
            background: #f5f7fa !important;
            border-radius: 20px !important;
            border: none !important;
            padding: 0px 15px !important;

        }

        .dt-layout-row{
            display: flex !important;
            align-items: flex-start !important;
        }
        .dt-length{
            display: none !important;
        }
    </style>

@endsection

@section('content')

    @include('componnents.banner' , [
        'title' => $title_page,
        'paths' => [
            [$title_page]
        ]
    ])

    <section class="container pb-5 mb-5">

            <div class="title-area text-center pt-5">
                <h4 class="sec-title">

                </h4>
            </div>

            <div class="table-responsive">
                <table id="list" class="table table-rounded table-striped gy-7 gs-7">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Photo</th>
                            <th>Numéro d'inscription</th>
                            <th>Nom & Prénom</th>
                            <th>Departement</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($members as $key => $member)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ $member['profile_image_url'] ?? 'assets/img/onmb/default-avatar.png' }}" alt="Profil" width="50" height="50"></td>
                                <td>{{ $member['matricule'] }}</td>
                                <td>{{ $member['lastname'] || $member['firstname'] ? $member['lastname'] . ' ' . $member['firstname'] : $member['old_full_name'] }}</td>
                                <td>{{ $member['department'] ? $member['department']['name'] : 'N/A' }}</td>
                                <td>{{ $member['user'] ? $member['user']['email'] : 'N/A' }}</td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

    </section>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.8/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.8/js/responsive.dataTables.js"></script>

    <script>
        new DataTable('#list',{
            info: true,
            ordering: true,
            paging: true,
            responsive: true,
            // autoWidth: true,
            language: {
                search: 'Recherchez un membre',
                zeroRecords: 'Aucun electeur trouvé',
                lengthMenu: "Afficher _MENU_ electeurs par page",
                info:'Affichage : _START_ - _END_ sur _TOTAL_ electeurs',
                infoEmpty: 'Aucune donnée disponible',
                infoFiltered: '(filtré à partir de _MAX_ electeurs au total)',
            }
        });
    </script>
@endsection
