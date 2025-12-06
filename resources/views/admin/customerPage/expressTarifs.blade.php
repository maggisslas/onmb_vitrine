@extends('admin.layouts.master')

@section('title')
    Personnalisation des tarifs
@endsection

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/datatable-extension.css') }}">

    @include('admin.layouts.css.dropzone')

    <style>

        fieldset {
            border: 1px solid transparent;
            /* padding: 1.5rem; */
            /* margin-bottom: 1.5rem; */
            border-radius: 5px;
            margin: 3rem 0px;
        }
        legend {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 0 10px;
            margin-top: -15px !important;
            margin-left: 20px;
            width: auto;
            color: #000000;
            border: none;
            background: white;
        }

    </style>

@include('admin.layouts.css.dropzone')

@endsection

@section('beadcrumbs')
    @include('admin.components.breadcrumbs' , [
        'title_page'    => "Personnalisation des offres de laverie",
        'paths'         => [
            [route('admin.customer.page.discover.service' , ['type' => 'laverie']) , 'Page de personnalisation', false],
            ['#' , 'Offres', true]
        ],

    ])
@endsection

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Personnalisation des tarifs express</h5>
              </div>
              <div class="card-body">
                <div class="default-according style-1" id="accordionoc">

                    <form class="card"
                            method="POST"
                            action="{{ route('admin.customer.page.store.express.tarifs') }}">
                        @csrf
                        @method('PUT')

                            <div class="card-body">

                                    <div class="row">

                                        <div class="col-lg-12" id="offer_content_page">


                                            @foreach ($express_tarifs as $index => $tarif)

                                                <fieldset class="px-5 border-success">

                                                    <legend class="text-primary cursor-pointer">
                                                        Tarifs
                                                    </legend>

                                                    <div class="row">

                                                        <div class="d-none">
                                                            <input type="text"
                                                                    name="id[]"
                                                                    value="{{ $tarif->id }}">
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    name="title[]"
                                                                    id="title"
                                                                    placeholder=""
                                                                    value="{{ old('title.'.$index , $tarif->title) }}">
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="price">A partir de </label> <span class="text-danger">*</span>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    name="price[]"
                                                                    id="price"
                                                                    placeholder=""
                                                                    value="{{ old('price.'.$tarif->price , $tarif->price) }}">

                                                            @error("price")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="weight">Poids colis </label> <span class="text-danger">*</span>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    name="weight[]"
                                                                    id="weight"
                                                                    placeholder=""
                                                                    value="{{ old('weight.'.$index , $tarif->weight) }}">

                                                            @error("weight")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="city">Ville </label> <span class="text-danger">*</span>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    name="city[]"
                                                                    id="city"
                                                                    placeholder=""
                                                                    value="{{ old('city.'.$index , $tarif->city) }}">

                                                            @error("city")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="duration">Durée </label> <span class="text-danger">*</span>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    name="duration[]"
                                                                    id="duration"
                                                                    placeholder=""
                                                                    value="{{ old('duration.'.$index , $tarif->duration)}}">

                                                            @error("duration")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="support"> Support </label> <span class="text-danger">*</span>
                                                            <select name="support[]"
                                                                    id="support"
                                                                    class="form-control">
                                                                <option value="OUI" {{ old('support.'.$index, $tarif->support) == 'OUI' ? 'selected' : '' }}>OUI</option>
                                                                <option value="NON" {{ old('support.'.$index, $tarif->support) == 'NON' ? 'selected' : '' }}>NON</option>
                                                            </select>

                                                            @error("support")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <label class="col-form-label" for="follow_up"> Suivi  </label> <span class="text-danger">*</span>
                                                            <select name="follow_up[]"
                                                                    class="form-control">
                                                                <option value="OUI" {{ old('follow_up.'.$index, $tarif->follow_up) == 'OUI' ? 'selected' : '' }}>OUI</option>
                                                                <option value="NON" {{ old('follow_up.'.$index, $tarif->follow_up) == 'NON' ? 'selected' : '' }}>NON</option>
                                                            </select>

                                                            @error("follow_up")
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                </fieldset>

                                            @endforeach

                                        </div>

                                    </div>


                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-success w-auto">Enregistrer</button>
                                </div>

                            </div>

                    </form>

                </div>
              </div>
            </div>
          </div>

    </div>
</div>

@endsection


@section('scripts')

    <script src="{{ asset('admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/js/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>



    {{-- @include("admin.customerPage.js.laverieDetailsOffer") --}}

    {{-- <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-custom.js"></script> --}}

@endsection
