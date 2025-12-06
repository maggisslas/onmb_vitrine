<!-- Modifier une catégorie -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="#"
                method="post"
                class="modal-content"
                id="article-update-form">

            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Modifier un acte</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    @method('PUT')
                    @csrf

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                            <input class="form-control"
                                    type="text"
                                    name="title"
                                    id="title"
                                    value=""
                                    required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="category_id">Catégorie</label> <span class="text-danger">*</span>
                            <select name="category_id" id="category_id" class="js-example-basic-single">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

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

                    <div class="mb-3">
                        <label for="">Acte</label> <span class="text-danger">*</span>
                        <input type="file" name='acte' id="acte" accept="application/pdf">
                        {{-- <div class="drop-zone" id="dropZoneUpdate">
                            <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                            <input type="file"
                                    id="acteUpdate"
                                    name="acte"
                                    class="image-validator"
                                    hidden
                                    accept="pdf/*">
                        </div>
                        <p id="error-message" style="color: red; display: none;"></p> --}}

                        {{-- <div class="file-list" id="acteListUpdate"></div> --}}
                    </div>


                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">

                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
                <button class="btn btn-success" id="updateBtnForm" type="submit"> <i class="fa fa-edit"></i> Modifier </button>

            </div>
        </form>
    </div>
</div>
