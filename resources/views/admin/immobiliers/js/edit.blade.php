<script>

    // ClassicEditor.create(document.querySelector('#postUpdate'))

    textEditor("#postUpdate")

    // function editImmobilier(immobilier_id , name , description , pictureUrl){
    function editImmobilier(element , pictureUrl){

        let immobilier  = JSON.parse(element.getAttribute("data-immobilier"));
        let pictureSupUrl  = JSON.parse(element.getAttribute("data-picture-sup"));
        console.log(immobilier.area.city.department.id)
        var route = "{{ route('admin.immobiliers.update' , ':id') }}"
            route = route.replace(':id' , immobilier.id)

        preloadFile("pictureUpdate" , "pictureListUpdate" , pictureUrl)
        preloadFile("pictureSupUpdate" , "pictureSupUpdateList" , pictureSupUrl)

        $('#updateModal form').attr('action' , route)
        $('#updateModal form #title').val(immobilier.title)
        $('#updateModal form #description').val(immobilier.description)
        $('#updateModal form #caracteristiques').val(immobilier.caracteristiques)
        $('#updateModal form #department_id').val(immobilier.area.city.department.id).trigger('change')
        $('#updateModal form #city_id').val(immobilier.area.city.id).trigger('change')
        $('#updateModal form #area_id').val(immobilier.area.id).trigger('change')
        $('#updateModal form #localisation').val(immobilier.localisation)
        $('#updateModal form #amount').val(immobilier.amount)
        $('#updateModal form #category_id').val(immobilier.category_id).trigger('change')
        $('#updateModal form #maps').val(immobilier.maps)

        setEditorContent(immobilier.post)


    }


    $('#immobilier-update-form').on('submit', function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        const fileInput = document.getElementById("picture");
        // Récupération des données du formulaire
        var formData = new FormData(this);

        if (fileInput.files.length > 0) {
            // console.log("Fichier détecté :", fileInput.files[0]);
            formData.append("picture", fileInput.files[0]); // Ajoute le fichier à FormData
        } else {
            // console.log("Aucun fichier détecté !");
        }

        // console.log(formData)

        $('#updateBtnForm').attr('disabled' , 'disabled')
        $('#updateBtnForm').html('<i class="fa fa-spin fa-spinner"></i> Modifier')

        // Envoi de la requête Ajax
        $.ajax({
            url: $(this).attr('action'), // Récupère l'URL spécifiée dans l'attribut "action"
            type: $(this).attr('method'), // Récupère la méthode spécifiée dans l'attribut "method"
            data: formData,
            processData: false,  // **Ne pas traiter les données (important pour FormData)**
            contentType: false,  // **Ne pas définir le type de contenu (important pour FormData)**
            success: function(response) {

                // console.log(response)

                if (response.success) {

                    message_alert('success' , response.message , 3000)
                    $('#updateModal').modal('hide')
                    $('#immobilier-update-form')[0].reset(); // Réinitialiser le formulaire
                    $('.error-message').remove(); // Supprimer les anciens messages d'erreur
                    load_table()

                }else{
                    message_alert('error' , response.message , 3000)
                }

                $('#updateBtnForm').removeAttr('disabled')
                $('#updateBtnForm').html('<i class="fa fa-edit"></i> Modifier')

            },
            error: function(err) {

                if (err.status === 422) { // Laravel retourne 422 pour les erreurs de validation
                    var errors = err.responseJSON.errors;

                    // Afficher les erreurs sous chaque champ
                    for (var field in errors) {
                        var errorMessage = errors[field][0]; // Récupérer le premier message d'erreur

                        // Ajouter un message sous l'input concerné
                        var input = $('[name="' + field + '"]');
                            input.next('.error-message').remove();
                            input.after('<span class="error-message text-danger">' + errorMessage + '</span>');
                    }
                } else {
                    // console.log("Erreur inconnue :", err);
                }

                $('#updateBtnForm').removeAttr('disabled')
                $('#updateBtnForm').html('<i class="fa fa-edit"></i> Modifier')

            }
        });
    });


</script>
