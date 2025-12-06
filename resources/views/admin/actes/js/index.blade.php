@include('admin.layouts.js.scripts')
@include('admin.actes.js.create')
@include('admin.actes.js.edit')
@include('admin.actes.js.delete')

<script>

    var acte_table = $('#acte_table').DataTable();

    $(document).ready(function() {
        load_table()
    })

    function load_table(){

        var route = "{{ route('admin.actes.get.data') }}"

        acte_table.destroy();
        acte_table = $('#acte_table').DataTable({
            // stateSave: true,
            processing: true,
            serverSide: false,
            language: {
                url: '{!! asset('admin/js/datatable/lang/french.json') !!}'
            },
            ajax: {
                'url' : route ,
                error: function(err){
                    console.log(err)
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                // {data: 'url', name: 'acte'},
                {data: 'description', name: 'description'},
                {data: 'category', name: 'category'},
                {data: 'by', name: 'by'},
                {data: 'action', name: 'action'},
            ],
            "rowCallback": function( row, data ) {

            },
        });
    }

    function acte_state(acte_id , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.actes.state", [":id", ":status"]) }}';
            route = route.replace(':id', acte_id);
            route = route.replace(':status', checked);

            state(checked , route , 'Acte activé' , 'Acte archivé')

    }

</script>
