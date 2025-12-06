<!-- Modifier une catégorie -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#"
                method="post"
                class="modal-content"
                id="category-update-form"
                {{-- action="{{route('admin.categories.store' ,)}}" --}}
                >

            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Modifier une catégorie</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label" for="name">Nom</label>
                        <input class="form-control"
                                type="text"
                                name="name"
                                id="name"
                                value=""
                                required>
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

                    <div class="drop-zone" id="dropZoneUpdate">
                        <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                        <input type="file"
                                id="pictureUpdate"
                                name="picture"
                                class="image-validator"
                                hidden
                                accept="image/*">
                    </div>
                    <p id="error-message" style="color: red; display: none;"></p>

                    <div class="file-list" id="pictureListUpdate"></div>

                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">

                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
                <button class="btn btn-success" id="updateBtnForm" type="submit"> <i class="fa fa-edit"></i> Modifier </button>

            </div>
        </form>
    </div>
</div>
