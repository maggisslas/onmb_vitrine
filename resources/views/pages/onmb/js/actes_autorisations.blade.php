<script>

    $(document).ready(function() {
        load_actes()
    })

    function load_actes(){

        category_id = $('#category_acte_autorisation').val()
        keyword = $('#search_acte_autorisation').val()

        var route ='{{ route("ordre.actes_autorisations.search" , [":category_id"] ) }}'
            route = route.replace(':category_id' , category_id)
            route = route+'?name='+keyword

        $.ajax({
            'url' : route ,
            'success': function(data){

                $("#content_acte").html('')

                
                $('#nbr_element').text(data.actes.length + ' éléments(s)')

                if (data.actes.length == 0) {
                    
                    $("#content_acte").append(`Aucun acte trouvé.`)

                }else{

                    
                    data.actes.forEach(acte => {
                    
                        $("#content_acte").append(`

                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="service-card">
                                    <div class="box-shape">
                                        <img src="assets/img/bg/service_card_bg.png" alt="Service">
                                    </div>
                                    <div class="box-icon">
                                        <img src="assets/img/icon/pdf.svg" alt="Icon pdf" style="width: 40px">
                                    </div>
                                    <h3 class="box-title py-2">
                                        <a href="javascript:void(0)" style="font-size: 16px">
                                            `+ acte.title +`
                                        </a>
                                    </h3>

                                    <a href="`+ acte.url +`"
                                        class="th-btn btn-sm btn-p"
                                        style="font-size: 11px"
                                        target="_blank">
                                        <i class="fa fa-download"></i> Télécharger
                                    </a>
                                    
                                </div>
                            </div>

                        `)
                    });

                }


            },
            'error': function(err){
                console.log(err)
            }
        })


    }

</script>

