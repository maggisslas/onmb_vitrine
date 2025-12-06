<!-- Modifier une catégorie -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="#"
                method="post"
                class="modal-content"
                id="immobilier-update-form">

            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Modifier un bien immobilier</h5>
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
                                    placeholder="Ex : Parcelle à Minontin">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="amount">Montant</label> <span class="text-danger">*</span>
                            <input class="form-control"
                                    type="number"
                                    name="amount"
                                    id="amount"
                                    placeholder="Ex : 200.000">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3 form-group">
                            <label for="department_id">Département</label> <span class="text-danger">*</span>
                            <select name="department_id"
                                    id="department_id"
                                    class="js-example-disabled-results"
                                    onchange="filterCities(this)">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3 form-group">
                            <label for="city_id">Ville</label> <span class="text-danger">*</span>
                            <select name="city_id"
                                    id="city_id"
                                    class="js-example-disabled-results"
                                    onchange="filterAreas(this)">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 mb-3 form-group">
                            <label for="area_id">Quartier</label> <span class="text-danger">*</span>
                            <select name="area_id"
                                    id="area_id"
                                    class="js-example-disabled-results">
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">
                                        {{ $area->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="localisation">Localisation</label> <span class="text-danger">*</span>
                            <input class="form-control"
                                    type="text"
                                    name="localisation"
                                    id="localisation"
                                    placeholder="Ex : Minontin, face BOA">
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
                        <label class="col-form-label" for="maps">Maps</label>
                        <input class="form-control"
                                type="text"
                                name="maps"
                                id="maps"
                                placeholder="Ex : https://www.google.com/maps/embed?pb=...">
                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="description">Description</label> <span class="text-danger">*</span>
                            <textarea name="description"
                                        id="description"
                                        class="form-control"
                                        cols="30"
                                        rows="5"
                                        placeholder="Laissez une description ici..."></textarea>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label class="col-form-label" for="caracteristiques">Caractéristiques</label> <span class="text-danger">*</span>
                            <textarea name="caracteristiques"
                                        id="caracteristiques"
                                        class="form-control"
                                        cols="30"
                                        rows="5"
                                        placeholder="Laissez une caracteristique ici..."></textarea>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="col-form-label" for="post">Contenu</label> <span class="text-danger">*</span>
                        <textarea name="post"
                                    id="postUpdate"
                                    class="editor"
                                    placeholder="Laissez votre post ici..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Image</label> <span class="text-danger">*</span>
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


                    <div class="">
                        <label for="">Images supplémentaire</label> <span class="text-danger">*</span>

                        <div class="drop-zone" id="dropZoneSupUpdate">
                            <p>Glissez-déposez vos fichiers ici ou <strong>cliquez pour sélectionner</strong></p>
                            <input type="file"
                                    id="pictureSupUpdate"
                                    name="pictureSup[]"
                                    class="image-validator"
                                    hidden
                                    multiple
                                    accept="image/*">
                        </div>

                        <p id="error-message-sup" style="color: red; display: none;"></p>

                        <div class="file-list" id="pictureSupUpdateList"></div>

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
