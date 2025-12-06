<!-- Ajouter une catégorie -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{ route('admin.categories.store', ['page' => $page ] ) }}"
        method="post"
        class="modal-content"
        id="category-form"
        enctype="multipart/form-data">

        @csrf

        <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel"> Ajouter une catégorie </h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                @csrf
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

        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-success" id="createBtnForm" type="submit"> <i class="fa fa-save"></i> Enregistrer </button>
        </div>
    </form>
    </div>
</div>



