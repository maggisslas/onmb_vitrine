<script>

    textEditor("#postUpdate")

    function editActe(element , pictureUrl){

        let acte  = JSON.parse(element.getAttribute("data-acte"));
        let pictureSupUrl  = JSON.parse(element.getAttribute("data-picture-sup"));

        var route = "{{ route('admin.actes.update' , ':id') }}"
            route = route.replace(':id' , acte.id)

        preloadFile("pictureUpdate" , "pictureListUpdate" , pictureUrl)
        preloadFile("pictureSupUpdate" , "pictureSupUpdateList" , pictureSupUrl)

        $('#updateModal form').attr('action' , route)
        $('#updateModal form #title').val(acte.title)
        $('#updateModal form #description').val(acte.description)
        $('#updateModal form #category_id').val(acte.category_id).trigger('change')
        $('#updateModal form #maps').val(acte.maps)

        setEditorContent(acte.post)

    }


    $('#acte-update-form').on('submit', function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        const fileInput = document.getElementById("acte");
        // Récupération des données du formulaire
        var formData = new FormData(this);

        if (fileInput.files.length > 0) {
            // console.log("Fichier détecté :", fileInput.files[0]);
            formData.append("acte", fileInput.files[0]); // Ajoute le fichier à FormData
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
                    $('#acte-update-form')[0].reset(); // Réinitialiser le formulaire
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
