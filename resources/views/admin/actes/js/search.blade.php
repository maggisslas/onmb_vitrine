<script>

    function searchCategoriesSelect2(id){

        var route = "{{ route('admin.categories.search.select2') }}"

        if ($(id).data("select2")) {
            $(id).select2("destroy")
        }

        // Get categories by ajax
        $(id).select2({
            allowClear: true,
            language:'fr' ,
            placeholder: "Choisir la catégorie",
            dropdownParent: $(id).parent(),
            ajax: {
                url: function (params) {
                    return route + "?search=" + params.term ;
                },
                success:function(data){
                    // console.log(data)
                },
                error:function(err){
                    console.log(err)
                },
                dataType: 'json',
                delay: 250,
                minimumInputLength: 2,
                processResults: function (data) {
                    // console.log(data)
                    result = [];
                    data.forEach((category , index) => {

                        result.push({
                            id: category.id,
                            text: category.name
                        })

                    });
                    return {
                        results: result
                    };
                }
            }
        });
    }

</script>
