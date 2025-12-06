<script>
    function user_state(user , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.users.state", [":id", ":status"]) }}';
            route = route.replace(':id', user.id);
            route = route.replace(':status', checked);

            state(checked , route , 'Utilisateur activé' , 'Utilisateur désactivé')
    }
</script>
