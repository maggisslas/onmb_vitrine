@include('admin.layouts.js.scripts')
@include('admin.immobiliers.js.create')
@include('admin.immobiliers.js.edit')
@include('admin.immobiliers.js.delete')
@include('site.betos.js.search')

<script>

    var immobilier_table = $('#immobilier_table').DataTable();

    $(document).ready(function() {
        load_table()
    })

    function load_table(){

        var route = "{{ route('admin.immobiliers.get.data') }}"

        immobilier_table.destroy();
        immobilier_table = $('#immobilier_table').DataTable({
            // stateSave: true,
            processing: true,
            serverSide: false,
            responsive: true,
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
                // {data: 'slug', name: 'slug'},
                {data: 'description', name: 'description'},
                {data: 'caracteristiques', name: 'caracteristiques'},
                {data: 'localisation', name: 'localisation'},
                {data: 'amount', name: 'amount'},
                {data: 'category', name: 'category'},
                {data: 'by', name: 'by'},
                {data: 'action', name: 'action'},
            ],
            "rowCallback": function( row, data ) {

            },
        });
    }

    function immobilier_state(immobilier_id , id){

        var checked = $('#'+id).is(':checked')
        var route = '{{ route("admin.immobiliers.state", [":id", ":status"]) }}';
            route = route.replace(':id', immobilier_id);
            route = route.replace(':status', checked);

            state(checked , route , 'Bien immobilier activé' , 'Bien immobilier archivé')

    }

</script>


<script>

    setTimeout(() => {

        searchModalDepartmentSelect2('#addModal #department_id' , "#addModal")
        var department_id = $('#addModal #department_id').val()
        searchModalCitiesSelect2('#addModal #city_id' , "#addModal" , department_id)
        var city_id = $('#addModal #city_id').val()
        searchModalAreasSelect2('#addModal #area_id' , "#addModal" , city_id)
        searchModalCategoryImmobilierSelect2('#addModal #category_id' , "#addModal")


        searchModalDepartmentSelect2('#updateModal #department_id' , "#updateModal")
        var department_update_id = $('#updateModal #department_id').val()
        searchModalCitiesSelect2('#updateModal #city_id' , "#updateModal" , department_update_id)
        var city_update_id = $('#updateModal #city_id').val()
        searchModalAreasSelect2('#updateModal #area_id' , "#updateModal" , city_update_id)
        searchModalCategoryImmobilierSelect2('#updateModal #category_id' , "#updateModal")

    }, 1000);

    function filterCities(department){

        searchModalCitiesSelect2('#addModal #city_id' , "#addModal" , department.value)
        searchModalCitiesSelect2('#updateModal #city_id' , "#updateModal" , department.value)

    }

    function filterAreas(city){
        searchModalAreasSelect2('#addModal #area_id' , "#addModal" , city.value)
        searchModalAreasSelect2('#updateModal #area_id' , "#updateModal" , city.value)
    }

    $('#addModal #department_id , #updateModal #department_id').on('change', function() {
        $('#addModal #city_id , #updateModal #city_id').val(null).trigger('change'); // Désélectionner city_id
    });

    $('#addModal #city_id , #updateModal #city_id').on('change', function() {
        $('#addModal #area_id , #updateModal #area_id').val(null).trigger('change'); // Désélectionner area_id
    })


</script>
