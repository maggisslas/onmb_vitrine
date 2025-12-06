function message_alert(type,message,time=0 , progress=true , positionClass='toast-top-right'){

    if (type === 'success') {
        toastr['success'](message , 'Succès',  {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            timeOut: time ,
            positionClass: positionClass,
            // showDuration: duration,
            hideMethod: 'slideUp'
        });
    }else if(type === 'error'){
        toastr['error'](message , 'Erreur',  {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            timeOut: time ,
            positionClass: positionClass,
            // showDuration: duration,
            hideMethod: 'slideUp'
        });
    }else if(type === 'warning'){
        toastr['warning'](message , 'Avertissement',  {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            timeOut: time ,
            positionClass: positionClass,
            // showDuration: duration,
            hideMethod: 'slideUp'
        });
    }else{
        toastr['info'](message , 'Information',  {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            timeOut: time ,
            positionClass: positionClass,
            // showDuration: duration,
            hideMethod: 'slideUp'
        });
    }

    // if (type === 'success') {
    //     $.notify({
    //         icon: "nc-icon nc-bell-55",
    //         message: "Welcome to <b>Paper Dashboard 2</b> - a beautiful freebie for every web developer."

    //     },{
    //         type: 'success',
    //         timer: 300,
    //         placement: {
    //             from: from,
    //             align: align
    //         },
    //         allow_dismiss: true,
    //         delay: 2000,
    //         showProgressbar: true,
    //     });
    // }else if(type === 'info'){
    //     $.notify({
    //         icon: "nc-icon nc-bell-55",
    //         message: "Welcome to <b>Paper Dashboard 2</b> - a beautiful freebie for every web developer."

    //     },{
    //         type: 'primary',
    //         timer: 300,
    //         // placement: {
    //         //     from: from,
    //         //     align: align
    //         // },
    //         allow_dismiss: true,
    //         delay: 2000,
    //         showProgressbar: true,
    //     });
    // }

}

function dataTable(tag) {

    $(tag).DataTable({
        "responsive": true,
        "autoWidth": true,
        "language" : {
            "url" : './../plugins/dataTable.french.lang'
        },
    });
}

function select(tag , placeholder) {
    $("#"+tag).select2({
        language : "fr" ,
        placeholder : placeholder
   })
}

function selectWithAjax(tag , placeholder, route) {
    emptySelect(tag)
    $("#"+tag).select2({
        language : "fr" ,
        placeholder : placeholder,
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
                result = [];

                if(data.type === 'name') {
                    data.name.forEach((data) => {
                        result.push({id: data.id, text: data.name})
                    });
                }else if (data.type === 'price') {
                    var currency = data.currency
                    console.log(currency)
                    data.prices.forEach((data) => {
                        result.push({id: data, text: moneyFormat(data , currency)})
                    });
                }

                return {
                    results: result
                };
            }
        }
    })
}

function emptySelect(tag) {
    $("#"+tag).empty();
}

function textEditor(tag) {
    ClassicEditor
        .create( document.querySelector(tag) , {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            }
        } )
        .then(editor => {
            // Sauvegarder l'éditeur dans une variable globale ou le retourner pour l'utiliser ailleurs
            window.editorInstance = editor;
        })
        .catch( error => {
            // console.error( error );
    } );
}

// Utilisation pour modifier le contenu
function setEditorContent(content) {
    if (window.editorInstance) {
        window.editorInstance.setData(content);
    } else {
        console.error("L'éditeur n'est pas encore initialisé.");
    }
}

function refreshPage(time){
    window.setTimeout(function () {
        $("body").load(window.location.href);
    }, time);
}

function moneyFormat(value , currency){
    if (currency === 'EUR') {
        return new Intl.NumberFormat('de-DE', { style: 'currency', currency: currency , currencyDisplay: "code" }).format(value)
    }
    if (currency === 'XOF' || currency === 'XAF') {
        return new Intl.NumberFormat('fr-FR', { style: 'currency', currency: currency , currencyDisplay: "code" }).format(value)
    }
    if (currency === 'USD') {
        return new Intl.NumberFormat('en-US', { style: 'currency', currency: currency , currencyDisplay: "code" }).format(value)
    }
}

function repeater_bloc(elements , msg_confirm=true){
    elements.forEach(tag => {
        $(tag+', .repeater-default').repeater({
            show: function () {
              $(this).slideDown();
              // Feather Icons
              if (feather) {
                feather.replace({ width: 14, height: 14 });
              }
            },
            hide: function (deleteElement) {
                if (msg_confirm) {
                    if (confirm('Êtes-vous sûr de vouloir supprimer cet élément?')) {
                        $(this).slideUp(deleteElement);
                    }
                }else{
                    $(this).slideUp(deleteElement);
                }
            }
          });
    });
}

function removePicture(tag_file_id , tag_img_id , edit=false){

    $('#'+tag_file_id).val('')
    if (edit) {
        $('#remove_picture').val('YES')
    }

    $('#'+tag_img_id).attr('src' , 'img/default-picture.jpg')
    // console.log($('#'+tag_file_id).val())
}

function intlTelInputCustomer(phone_tag , error_tag, validation_tag) {
    const input = document.querySelector(phone_tag);
    const errorMsg = document.querySelector(error_tag);
    const validMsg = document.querySelector(validation_tag);

    // here, the index maps to the error code returned from getValidationError - see readme
    const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    const iti = window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        preferredCountries: ['bj'],
    });

    const reset = () => {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // on blur: validate
    input.addEventListener('blur', () => {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
                // res = "validate"
            } else {
                input.classList.add("error");
                const errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
}

function modalAlert(id, title , text , confirmButton , callback , icon="info" , confirmButtonText="Continuer" , cancelButtonText="Annuler"){

    Swal.fire({
        title: title,
        html: text,
        icon: icon,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: confirmButtonText,
        cancelButtonText: cancelButtonText,
        customClass: {
            confirmButton: confirmButton,
            cancelButton: 'btn btn-light'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // submitForm(id)
            callback()
        } else if (result.isDenied) {
        }
    });

}

function submitForm(formId) {
    $("#" + formId).submit()
}

function state(checked , route , message_active , massage_unactive){
    $.ajax({
        type: "GET",
        url: route,
        success: function(data) {
            console.log(data)
            var timeRefresh = 1000
                if (checked) {
                    message_alert('success' , message_active , timeRefresh);
                    // refreshPage(timeRefresh)
                }else{
                    message_alert('info' , massage_unactive , timeRefresh);
                    // refreshPage(timeRefresh)
                }
        },
        error: function(err){
            console.log(err)
        }
    });
}

function showOrHidePassword(tag_btn , tag_password) {
    const togglePassword = document.querySelector(tag_btn);
    const password = document.querySelector(tag_password);
// console.log(password)
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
}

function resetSelect(tag) {
    // if (element.value == 'reset' ) {
        $(tag).val(null).trigger('change');
    // }
}




// document.getElementById('imageInput').addEventListener('change', function(event) {

// });

// function previewPicture(input, containerId) {
//     let files = input.files; // Récupérer tous les fichiers sélectionnés
//     let previewContainer = document.getElementById(containerId);

//     previewContainer.innerHTML = ''; // Vider le conteneur avant d'afficher les nouvelles images

//     if (files.length > 0) {
//         Array.from(files).forEach(file => {
//             if (file.type.startsWith('image/')) { // Vérifier si c'est bien une image
//                 let reader = new FileReader();

//                 reader.onload = function(e) {
//                     let img = document.createElement('img');
//                     img.src = e.target.result;
//                     img.style.maxWidth = '100px';
//                     img.style.height = 'auto';
//                     img.style.borderRadius = '5px';
//                     img.style.boxShadow = '0 0 5px rgba(0, 0, 0, 0.2)';
//                     img.style.margin = '5px';

//                     previewContainer.appendChild(img); // Ajouter l'image dans le conteneur
//                 };

//                 reader.readAsDataURL(file);
//             }
//         });
//     }
// }


function previewPicture(input, containerId) {
    let files = input.files; // Récupérer tous les fichiers sélectionnés
    let previewContainer = document.getElementById(containerId);

    previewContainer.innerHTML = ''; // Vider le conteneur avant d'afficher les nouvelles images

    if (files.length > 0) {
        if (input.multiple) {
            // Si l'input est multiple, on affiche toutes les images avec un bouton de suppression
            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith('image/')) { // Vérifier si c'est bien une image
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        let imgContainer = document.createElement('div');
                        imgContainer.style.display = 'inline-block';
                        imgContainer.style.position = 'relative';
                        imgContainer.style.margin = '5px';

                        let img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '100px';
                        img.style.height = 'auto';
                        img.style.borderRadius = '5px';
                        img.style.boxShadow = '0 0 5px rgba(0, 0, 0, 0.2)';
                        img.style.margin = '5px';

                        let removeButton = document.createElement('button');
                        removeButton.innerHTML = 'X';
                        removeButton.style.position = 'absolute';
                        removeButton.style.top = '0';
                        removeButton.style.right = '0';
                        removeButton.style.backgroundColor = 'rgba(255, 0, 0, 0.5)';
                        removeButton.style.color = '#fff';
                        removeButton.style.border = 'none';
                        removeButton.style.borderRadius = '50%';
                        removeButton.style.cursor = 'pointer';
                        removeButton.style.padding = '5px';

                        removeButton.onclick = function() {
                            imgContainer.remove(); // Retirer l'image du conteneur
                        };

                        imgContainer.appendChild(img);
                        imgContainer.appendChild(removeButton);

                        previewContainer.appendChild(imgContainer); // Ajouter l'image dans le conteneur
                    };

                    reader.readAsDataURL(file);
                }
            });
        } else {
            // Si l'input n'est pas multiple, on affiche une seule image qui prend plus de place
            let file = files[0];
            if (file.type.startsWith('image/')) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    let img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100%'; // Image plus grande
                    img.style.height = 'auto';
                    img.style.borderRadius = '5px';
                    img.style.marginTop = '15px';

                    previewContainer.appendChild(img); // Ajouter l'image dans le conteneur
                };

                reader.readAsDataURL(file);
            }
        }
    }
}


