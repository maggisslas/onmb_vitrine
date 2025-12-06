@include('admin.layouts.js.scripts')

<script>

    // JS FOR SECTION : NOS OFFRES ==========================================================================================
    repeater_bloc(['#offer_content_page'])

    var i, picture

    setTimeout(() => {
        @foreach ($laverie_offer->laverie_offer_details as $index => $laverie_offer_details)

            i = '{{ $index }}'
            initFileUploader(`picture_offer_${i}`, `dropZoneOffer_${i}`, `pictureOfferList_${i}`, 374, 483);

            @if ($laverie_offer_details->getFirstMediaUrl('Picture'))
            
                picture = "{{ $laverie_offer_details->getFirstMediaUrl('Picture') }}"
                preloadFile(`picture_offer_${i}` , `pictureOfferList_${i}` , picture)

            @endif

        @endforeach

    }, 100)



    function completed_offer_contenu() {
        // const repeaterContainer = document.querySelector("#repeater-container");
        // const index = repeaterContainer.querySelectorAll('.repeater-item').length - 1; // dernier item ajouté

        // Apply textEditor after 100ms
        setTimeout(() => {

            var index = $("#offer_content_page").repeaterVal().offer_content_list.length - 1

            const repeaterItems = document.querySelectorAll('#offer_content_page .repeater-item');
            const lastItem = repeaterItems[repeaterItems.length - 1];

            // Mise à jour des IDs dans le dernier élément clôné
            const dropZone = lastItem.querySelector('#dropZoneOffer_0');
            const input = lastItem.querySelector('#picture_offer_0');
            const list = lastItem.querySelector('#pictureOfferList_0');

            // Adapte ces IDs dynamiquement si tu utilises un template avec des placeholders
            const dropZoneId = `dropZoneOffer_${index}`;
            const inputId = `picture_offer_${index}`;
            const listId = `pictureOfferList_${index}`;

            if (dropZone) dropZone.id = dropZoneId;
            if (input) input.id = inputId;
            if (list) list.id = listId;

            // Appelle ton initialiseur
            initFileUploader(inputId, dropZoneId, listId, 374, 483);

        }, 100);
    }

    function load_offer_data(){

    }

</script>
