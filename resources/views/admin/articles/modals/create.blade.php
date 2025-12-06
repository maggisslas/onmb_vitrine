<!-- Ajouter une catégorie -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <form action="{{ route('admin.articles.store') }}"
        method="post"
        class="modal-content"
        id="article-form"
        enctype="multipart/form-data">

        @csrf

        <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel"> Ajouter un article </h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                @csrf

                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <label class="col-form-label" for="title">Titre</label> <span class="text-danger">*</span>
                        <input class="form-control"
                                type="text"
                                name="title"
                                id="title"
                                placeholder="Ex : Comment s'inscrire à l'ONMB">
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
                    <label class="col-form-label" for="post">Contenu</label> <span class="text-danger">*</span>
                    <textarea name="post"
                                id="post"
                                class="editor"
                                placeholder="Laissez votre post ici..."></textarea>
                </div>


                <div>
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

                <div>
                    <label for="">Images supplémentaire</label> <span class="text-danger">*</span>

                    <div class="drop-zone" id="dropZoneSup">
                        <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                        <input type="file"
                                id="pictureSup"
                                name="pictureSup[]"
                                class="image-validator"
                                hidden
                                multiple
                                accept="image/*">
                    </div>

                    <p id="error-message-sup" style="color: red; display: none;"></p>

                    <div class="file-list" id="pictureSupList"></div>

                </div>

        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-success" id="createBtnForm" type="submit"> <i class="fa fa-save"></i> Enregistrer </button>
        </div>
    </form>
    </div>
</div>



