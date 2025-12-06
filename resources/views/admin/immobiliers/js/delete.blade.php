<script>

    function deleteImmobilier(id , name){ // For delete a category

        modalAlert('delete_form',
            'Suppression de bien',
            'Cette suppression est irréverssible. Etes vous sûr de vouloir supprimer ?',
            'btn btn-danger me-2',
            () => deleteItem(id),
            'error'
        )

    }

    function deleteItem(id){

        var route = '{{route("admin.immobiliers.destroy" , ":id")}}'
            route = route.replace(':id' , id)
            $('#delete_form').attr('action',route);

        $.ajax({
            url: route, // Récupère l'URL spécifiée dans l'attribut "action"
            type: 'POST', // Récupère la méthode spécifiée dans l'attribut "method"
            // data: formData,
            data: {
                _method: "DELETE", // Laravel comprend que c'est une requête DELETE
                _token: '{{ csrf_token() }}' // Protection CSRF obligatoire
            },
            success: function(response) {

                message_alert(response.status , response.message , 3000)
                    load_table()
                // console.log(response)

            },
            error: function(err) {
                console.log(err)
            }
        });

    }

</script>
