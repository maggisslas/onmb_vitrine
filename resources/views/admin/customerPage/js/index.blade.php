@include('admin.layouts.js.scripts')

<script>


    // JS FOR SECTION : DECOUVREZ BETOS SERVICE ===========================================================================
    textEditor("#description")
    repeater_bloc(['#content_page'])

    // var action_reset =  ['.btn_to_add']
    initFileUploader("picture", "dropZone", "pictureList" , 374 , 483);
    var pictureUrl = '{{ $pictureUrl }}'
    preloadFile("picture" , "pictureList" , pictureUrl)
    // initFileUploader("pictureSup", "dropZoneSup", "pictureSupList" , 794 , 435 , action_reset , 'error-message-sup');

    // Init variable
    var description = ""
    var position_repeater = 0
    var id_description = ""

    // First textEditor
    $( document ).ready(function() {
        // textEditor("#detail_description_FR")
        // textEditor("#detail_description_EN")
        var position = []
        $(".description").each(function( index ) {
            position.push($(this).attr('name').split("[")[1].split("]")[0])
        });
        position = Array.from(new Set(position));
        position.forEach(element => {
            if (element != 0) {
                completed_contenu(element)
            }
        });

    });

    // Function for apply textEditor in a repeater
    function completed_contenu(position_textarea = -1) {

        // Apply textEditor after 100ms
        setTimeout(() => {

            if (position_textarea === -1) {
                position_textarea = $("#content_page").repeaterVal().content_list ?
                                    $("#content_page").repeaterVal().content_list.length - 1 : 0
            }
            console.log(position_textarea)

            // select textarea
            description = 'textarea[name="content_list['+position_textarea+'][description]"]'
            // detail_description_EN = 'textarea[name="content['+position_textarea+'][detail_description_EN]"]'

            // format id to apply new position
            id_description = "description_"+position_repeater
            // id_detail_description_EN = "detail_description_EN_"+position_repeater

            // attribut id format
            $(description).attr("id" , id_description)
            // $(detail_description_EN).attr("id" , id_detail_description_EN)
            // Apply the textEditor
            textEditor("#"+id_description)
            // textEditor("#"+id_detail_description_EN)
            // Get next position
            position_repeater = position_repeater + 1
            
        }, 100);

    }







</script>
