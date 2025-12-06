@include('admin.layouts.js.scripts')
@include('admin.articles.js.create')
@include('admin.articles.js.edit')
@include('admin.articles.js.delete')

<script>

    var article_table = $('#article_table').DataTable();

    $(document).ready(function() {
        load_table()
    })

    function load_table(){

        var route = "{{ route('admin.articles.get.data') }}"

        article_table.destroy();
        article_table = $('#article_table').DataTable({
            // stateSave: true,
            processing: true,
            serverSide: false,
            language: {
                url: '{!! asset('admin/js/datatable/lang/french.json') !!}'
            },
            ajax: {
                'url' : route ,
                // error: function(err){
                //     console.log(err)
                // }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'picture', name: 'picture'},
                {data: 'title', name: 'title'},
                {data: 'slug', name: 'slug'},
                {data: 'description', name: 'description'},
                // {data: 'caracteristiques', name: 'caracteristiques'},
                // {data: 'localisation', name: 'localisation'},
                {data: 'category', name: 'category'},
                {data: 'by', name: 'by'},
                {data: 'action', name: 'action'},
            ],
            "rowCallback": function( row, data ) {

            },
        });
    }

    function article_state(article_id , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.articles.state", [":id", ":status"]) }}';
            route = route.replace(':id', article_id);
            route = route.replace(':status', checked);

            state(checked , route , 'Article activé' , 'Article archivé')

    }

</script>
