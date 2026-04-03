<script>

    textEditor("#postUpdate")

    function editArticle(element , pictureUrl){

        let article  = JSON.parse(element.getAttribute("data-article"));
        let pictureSupUrl  = JSON.parse(element.getAttribute("data-picture-sup"));

        var route = "{{ route('admin.articles.update' , ':id') }}"
            route = route.replace(':id' , article.id)

        preloadFile("pictureUpdate" , "pictureListUpdate" , pictureUrl)
        preloadFile("pictureSupUpdate" , "pictureSupUpdateList" , pictureSupUrl)

        $('#updateModal form').attr('action' , route)
        $('#updateModal form #title').val(article.title)
        $('#updateModal form #description').val(article.description)
        // $('#updateModal form #caracteristiques').val(article.caracteristiques)
        // $('#updateModal form #localisation').val(article.localisation)
        $('#updateModal form #category_id').val(article.category_id).trigger('change')
        $('#updateModal form #maps').val(article.maps)

        setEditorContent(article.post)

        // Affichage des PDFs existants
        $('#current_pdfs_container').empty();

        let pdfs = [];
        try {
            // A adapter selon le nom exact de ton attribut dans la BD (ex: pdfs, pdf_files, documents)
            pdfs = (typeof article.pdfs === 'string') ? JSON.parse(article.pdfs) : (article.pdfs || []);
        } catch(e) { console.error('Erreur parsing PDFs', e); }

        if (pdfs && pdfs.length > 0) {
            let pdfHtml = '<p class="mb-2"><strong>PDF(s) actuellement joint(s) :</strong></p><ul class="list-unstyled">';

            pdfs.forEach(function(pdfFilePath) {
                // Ajuster le chemin selon la structure (par ex: /storage/...)
                let fileUrl = pdfFilePath.includes('storage') ? pdfFilePath : '/storage/' + pdfFilePath;
                // let fileUrl = pdfFilePath;

                pdfHtml += '<li class="mb-2">';
                pdfHtml += '  <a href="' + fileUrl + '" target="_blank" class="btn btn-sm btn-outline-danger">';
                pdfHtml += '    <i class="fa fa-file-pdf"></i> Voir le document';
                pdfHtml += '  </a>';
                pdfHtml += '</li>';
            });

            pdfHtml += '</ul>';
            $('#current_pdfs_container').html(pdfHtml);
        } else {
            $('#current_pdfs_container').html('<span class="text-muted"><i class="fa fa-info-circle"></i> Aucun PDF rattaché à cet article.</span>');
        }

    }


    $('#article-update-form').on('submit', function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        const fileInput = document.getElementById("picture");
        // Récupération des données du formulaire
        var formData = new FormData(this);
        if (formData.get('post')) {
            formData.set(
                'post',
                btoa(unescape(encodeURIComponent(formData.get('post'))))
            );
        }

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
                    $('#article-update-form')[0].reset(); // Réinitialiser le formulaire
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
