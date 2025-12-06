<!-- Ajouter une catégorie -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{ route('admin.temoignages.store') }}"
        method="post"
        class="modal-content"
        id="temoignage-form"
        enctype="multipart/form-data">

        @csrf

        <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel"> Ajouter un témoignage </h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                @csrf
                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <label class="col-form-label" for="lastname">Nom</label> <span class="text-danger">*</span>
                        <input class="form-control"
                                type="text"
                                name="lastname"
                                id="lastname"
                                placeholder="Ex : GBEMAVO">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="col-form-label" for="firstname">Prénom(s)</label> <span class="text-danger">*</span>
                        <input class="form-control"
                                type="text"
                                name="firstname"
                                id="firstname"
                                placeholder="Ex : Gildas">
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-6 mb-3">

                        <label class="col-form-label" for="star">Etoiles</label> <span class="text-danger">*</span>

                        <select name="star" id="star" class="form-control">

                            @for ($i = 1; $i <=5 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor

                        </select>
                    </div>

                    <div class="col-lg-6 mb-3">

                        <label class="col-form-label" for="type">Type</label> <span class="text-danger">*</span>

                        <select name="type" id="type" class="form-control">

                            <option value="Immobilier">Immobilier</option>
                            <option value="Express">Express</option>
                            <option value="Clean">Clean</option>
                            <option value="Laverie">Laverie</option>

                        </select>
                    </div>

                </div>

                 <div class="mb-3">
                    <label class="col-form-label" for="comment">Commentaires</label> <span class="text-danger">*</span>
                    <textarea name="comment"
                                id="comment"
                                class="form-control"
                                cols="30"
                                rows="5"
                                placeholder="Laissez une commentaire ici..."></textarea>
                </div>

                <label for="">Image</label>

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

        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-success" id="createBtnForm" type="submit"> <i class="fa fa-save"></i> Enregistrer </button>
        </div>
    </form>
    </div>
</div>



