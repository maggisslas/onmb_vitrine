@include('admin.layouts.js.scripts')
@include('admin.categories.js.create')
@include('admin.categories.js.edit')
@include('admin.categories.js.delete')

<script>

    var category_table = $('#category_table').DataTable();
    var page = "{{ $page }}"



    $(document).ready(function() {
        load_table(page)
    })

    function load_table(page){

        var route = "{{ route('admin.categories.get.data' , ':page') }}"
            route = route.replace(':page' , page)

        category_table.destroy();
        category_table = $('#category_table').DataTable({
            // stateSave: true,
            processing: true,
            serverSide: false,
            language: {
                url: '{!! asset('admin/js/datatable/lang/french.json') !!}'
            },
            ajax: {
                'url' : route,
                // success: function(data){

                // },
                // error: function(err){
                //     console.log(err)
                // }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'picture', name: 'picture'},
                {data: 'name', name: 'name'},
                {data: 'slug', name: 'slug'},
                {data: 'description', name: 'description'},
                {data: 'by', name: 'by'},
                {data: 'action', name: 'action'},
            ],
            "rowCallback": function( row, data ) {

            },
        });
    }

    function category_state(category_id , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.categories.state", [":id", ":status"]) }}';
            route = route.replace(':id', category_id);
            route = route.replace(':status', checked);

            state(checked , route , 'Catégorie activée' , 'Catégorie désactivée')

    }

</script>
