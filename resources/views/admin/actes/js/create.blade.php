
<script>

    // CKEDITOR.replace('post');

    textEditor("#post")

    // Initialisation des différents uploaders
    var action_reset =  ['.btn_to_add']
    // initFileUploader("acte", "dropZone", "acteList" , 824 , 450 , action_reset);
    // initFileUploader("pictureSup", "dropZoneSup", "pictureSupList" , 794 , 435 , action_reset , 'error-message-sup');

    // initFileUploader("acteUpdate", "dropZoneUpdate", "acteListUpdate" , 824 , 450, action_reset);
    // initFileUploader("pictureSupUpdate", "dropZoneSupUpdate", "pictureSupUpdateList" , 794 , 435, action_reset);


    $('#acte-form').on('submit', function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        // Récupération des données du formulaire
        var formData = new FormData(this);
        // console.log(formData)

        $('#createBtnForm').attr('disabled' , 'disabled')
        $('#createBtnForm').html('<i class="fa fa-spin fa-spinner"></i> Enregistrer')

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
                    $('#addModal').modal('hide')
                    $('#acte-form')[0].reset(); // Réinitialiser le formulaire
                    $('.error-message').remove(); // Supprimer les anciens messages d'erreur
                    load_table()

                }else{
                    message_alert('error' , response.message , 3000)
                }

                $('#createBtnForm').removeAttr('disabled')
                $('#createBtnForm').html('<i class="fa fa-save"></i> Enregistrer')

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
                    console.log("Erreur inconnue :", err);
                }

                $('#createBtnForm').removeAttr('disabled')
                $('#createBtnForm').html('<i class="fa fa-save"></i> Engeristrer')

            }
        });
    });


</script>
