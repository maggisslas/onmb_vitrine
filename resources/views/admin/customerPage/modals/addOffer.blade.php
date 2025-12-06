<!-- Ajouter une catégorie -->
<div class="modal fade" id="addOfferModal" tabindex="-1" role="dialog" aria-labelledby="addOfferModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="#"
        method="post"
        class="modal-content"
        id="category-form"
        enctype="multipart/form-data">

        @csrf

        <div class="modal-header">
            <h5 class="modal-title" id="addOfferModalLabel"> Modifier les offres </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
                @csrf
                {{--
                    <div class="mb-3">
                        <label class="col-form-label" for="name">Nom</label> <span class="text-danger">*</span>
                        <input class="form-control"
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Ex : Tourisme">
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label" for="description">Description</label> <span class="text-danger">*</span>
                        <textarea name="description"
                                    id="description"
                                    class="form-control"
                                    cols="30"
                                    rows="5"
                                    placeholder="Laissez une description ici..."></textarea>
                    </div>

                    <label for="">Image</label> <span class="text-danger">*</span>

                    <div class="drop-zone" id="dropZone">
                        <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                        <input type="file"
                                id="picture"
                                name="picture"
                                class="image-validator"
                                hidden
                                accept="image/*">
                    </div>
                    <p id="error-message" style="color: red; display: none;"></p>

                    <div class="file-list" id="pictureList"></div>
                --}}


                <div class="col-lg-12" id="offer_content_page">


                    <div data-repeater-list="offer_content_list">

                        @php
                            $contentListOffer = old('offer_content_list', $laverie_offer->laverie_offer_details ?? []);
                        @endphp

                        @foreach ($contentListOffer as $index => $laverie_offer_details)

                            <div data-repeater-item class="repeater-item">

                                <fieldset class="px-5 border-success">

                                    <legend class="text-primary cursor-pointer">
                                        Nos offres
                                        <i data-feather="x" class="mr-25 text-danger" style="cursor: pointer !important;" data-repeater-delete></i>
                                    </legend>

                                    <div class="row">

                                        <div class="col-lg-4 mb-3">
                                            <label class="col-form-label" for="title">Titre</label>
                                            <input class="form-control"
                                                    type="text"
                                                    name="title"
                                                    id="title"
                                                    placeholder="Exemple : Lavage & Pliage"
                                                    value="{{ old('offer_content_list.$index.title', $laverie_offer_details['title'] ?? '') }}">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="col-form-label" for="price">Prix</label>
                                            <input class="form-control"
                                                    type="text"
                                                    name="price"
                                                    id="price"
                                                    placeholder="Exemple : 500 F"
                                                    value="{{ old('offer_content_list.$index.price', $laverie_offer_details['price'] ?? '') }}">

                                            @error("offer_content_list.$index.price")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div id="by" class="col-lg-4 mb-3">
                                            <label class="col-form-label" for="by">Par</label>
                                            <input class="form-control"
                                                    type="text"
                                                    name="by"
                                                    placeholder="Exemple : par kilo"
                                                    value="{{ old('offer_content_list.$index.by', $laverie_offer_details['by'] ?? '') }}">
                                        </div>

                                        <div class="pb-3">
                                            <label for="">Image</label> <span class="text-danger">*</span>
                                            <div class="drop-zone" id="dropZoneOffer_0">
                                                <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                                                <input type="file"
                                                        id="picture_offer_0"
                                                        name="picture_offer[]"
                                                        class="image-validator"
                                                        hidden
                                                        accept="image/*">
                                            </div>

                                            <p id="error-message" style="color: red; display: none;"></p>

                                            <div class="file-list" id="pictureOfferList_0"></div>

                                        </div>

                                    </div>

                                </fieldset>

                            </div>

                        @endforeach


                    </div>

                    <div class="pb-2 mt-3">
                        <button class="btn-icon rounded-circle btn-success"
                                style="width:auto;"
                                type="button"
                                data-repeater-create
                                onclick="completed_offer_contenu();"
                                title="Ajouter un nouveau contenu">
                            <i data-feather="plus" class="fw-bold"></i>
                        </button>
                    </div>

                </div>

        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-success" id="createBtnForm" type="submit"> <i class="fa fa-save"></i> Enregistrer </button>
        </div>
    </form>
    </div>
</div>
