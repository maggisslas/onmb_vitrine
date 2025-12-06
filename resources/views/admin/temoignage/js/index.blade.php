@include('admin.layouts.js.scripts')
@include('admin.temoignage.js.create')
@include('admin.temoignage.js.edit')
@include('admin.temoignage.js.delete')

<script>

    var temoignage_table = $('#temoignage_table').DataTable();

    $(document).ready(function() {
        load_table()
    })

    function load_table(){

        var route = "{{ route('admin.temoignages.get.data') }}"

        temoignage_table.destroy();
        temoignage_table = $('#temoignage_table').DataTable({
            // stateSave: true,
            processing: true,
            serverSide: false,
            language: {
                url: '{!! asset('admin/js/datatable/lang/french.json') !!}'
            },
            ajax: {
                'url' : route,
                error : function(err){
                    console.log(err)
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'picture', name: 'picture'},
                {data: 'name', name: 'name'},
                {data: 'comment', name: 'comment'},
                {data: 'nbr_star', name: 'nbr_star'},
                {data: 'by', name: 'by'},
                {data: 'action', name: 'action'},
            ],
            "rowCallback": function( row, data ) {

            },
        });
    }

    function temoignage_state(temoignage_id , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.temoignages.state", [":id", ":status"]) }}';
            route = route.replace(':id', temoignage_id);
            route = route.replace(':status', checked);

            state(checked , route , 'Témoignage activé' , 'Témoignage désactivé')

    }

</script>
