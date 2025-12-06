<script>

    // DROPZONE FOR LOAD ===============================================================================

    let fileUploaderFunctions = {
        updateFileList: null,
        // Autres fonctions si nécessaire
    };

    let filesArray1 = []; // Stocke les fichiers sélectionnés
    let filesArray2 = []; // Stocke les fichiers sélectionnés

    function initFileUploader(inputId, dropZoneId, fileListId, width=null, height=null, action_reset=[], feildIdValidation='error-message') {

        const dropZone = document.getElementById(dropZoneId);
        const fileInput = document.getElementById(inputId);
        const fileList = document.getElementById(fileListId);

        const isMultiple = fileInput.hasAttribute("multiple"); // Vérifier si multiple ou non

        // Clic pour sélectionner un fichier
        dropZone.addEventListener("click", () => fileInput.click());

        // Gérer la sélection de fichiers
        fileInput.addEventListener("change", (event) => {
            handleFiles(event.target , fileInput);
        });

        // Gérer le drag & drop
        dropZone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropZone.classList.add("dragover");
        });

        dropZone.addEventListener("dragleave", () => {
            dropZone.classList.remove("dragover");
        });

        dropZone.addEventListener("drop", (event) => {
            event.preventDefault();
            // console.log(event.dataTransfer.files)
            dropZone.classList.remove("dragover");
            // handleFiles(event.dataTransfer , dropZone);
            if (event.dataTransfer && event.dataTransfer.files.length > 0) {
                handleFiles(event.dataTransfer, dropZone);
            } else {
                handleFiles(fileInput, dropZone); // Si c'est un événement simulé
            }
        });

        function handleFiles(input, event) {
            var selectedFiles = input.files;
            const fileInput = event.querySelector("input[type='file']") ? event.querySelector("input[type='file']") : event;

            // Supprimer le message d'erreur lié à l'input
            if (fileInput) {
                const errorMessage = fileInput.nextElementSibling;
                if (errorMessage && errorMessage.classList.contains("error-message")) {
                    errorMessage.remove();
                }
            }

            if (width && height) {
                validateImageDimensions(input, width, height, feildIdValidation);
            }

            let dataTransfer = new DataTransfer();

            if (!isMultiple) {
                // 🔹 Mode "un seul fichier" : Remplace le fichier
                filesArray1 = [{ file: selectedFiles[0], id: Date.now() }];

                // ✅ Mettre à jour l'input file caché avec tous les fichiers (préchargés + nouveaux)
                filesArray1.forEach(item => dataTransfer.items.add(item.file));
            } else {
                // 🔹 Mode multiple : Ajouter les fichiers sans effacer ceux déjà préloadés
                let newFilesArray = [...filesArray2];  // Crée une copie de filesArray2 pour y ajouter les nouveaux fichiers

                // Ajouter les fichiers sélectionnés s'ils ne sont pas déjà dans la liste
                Array.from(selectedFiles).forEach(file => {
                    const uniqueID = file.name + file.size;  // Créer une clé unique pour chaque fichier
                    if (!newFilesArray.some(f => f.id === uniqueID)) {
                        newFilesArray.push({ file, id: uniqueID });  // Ajouter le fichier s'il n'existe pas déjà
                    }
                });

                filesArray2 = newFilesArray;  // Mettre à jour la liste des fichiers

                // ✅ Mettre à jour l'input file caché avec tous les fichiers (préchargés + nouveaux)
                filesArray2.forEach(item => dataTransfer.items.add(item.file));

            }






            // L'input file reçoit tous les fichiers combinés
            fileInput.files = dataTransfer.files;  // 🔥 Mise à jour de l'input

            updateFileList();  // Mise à jour de l'interface
        }

        /*
            // function handleFiles(input, event) {
            //     var selectedFiles = input.files;
            //     const fileInput = event.querySelector("input[type='file']") ? event.querySelector("input[type='file']") : event;

            //     // Supprimer le message d'erreur lié à l'input
            //     if (fileInput) {
            //         const errorMessage = fileInput.nextElementSibling;
            //         if (errorMessage && errorMessage.classList.contains("error-message")) {
            //             errorMessage.remove();
            //         }
            //     }

            //     if (width && height) {
            //         validateImageDimensions(input, width, height, feildIdValidation);
            //     }

            //     const isMultiple = fileInput.hasAttribute("multiple");

            //     if (!isMultiple) {
            //         // 🔹 Mode "un seul fichier" : Remplacer l'ancien fichier par le nouveau
            //         filesArray1 = [{ file: selectedFiles[0], id: Date.now() }];
            //     } else {
            //         // 🔹 Mode multiple : Ajouter les fichiers sans supprimer les préchargés
            //         let newFilesArray = [...filesArray1];  // Créer une copie de filesArray1 pour y ajouter les nouveaux fichiers

            //         // Ajouter les fichiers sélectionnés s'ils ne sont pas déjà dans la liste
            //         Array.from(selectedFiles).forEach(file => {
            //             const uniqueID = file.name + file.size;  // Créer une clé unique pour chaque fichier
            //             if (!newFilesArray.some(f => f.id === uniqueID)) {
            //                 newFilesArray.push({ file, id: uniqueID });  // Ajouter le fichier s'il n'existe pas déjà
            //             }
            //         });

            //         filesArray1 = newFilesArray;  // Mettre à jour la liste des fichiers
            //     }

            //     // ✅ Mettre à jour l'input file caché avec tous les fichiers (préchargés + nouveaux)
            //     let dataTransfer = new DataTransfer();

            //     // Ajouter les fichiers de filesArray1 à dataTransfer
            //     filesArray1.forEach(item => dataTransfer.items.add(item.file));

            //     // L'input file reçoit tous les fichiers combinés
            //     fileInput.files = dataTransfer.files;  // 🔥 Mise à jour de l'input

            //     updateFileList();  // Mise à jour de l'interface
            // }

            // function handleFiles(input, event) {
            //     const selectedFiles = input.files;
            //     const fileInput = event.querySelector("input[type='file']") ? event.querySelector("input[type='file']") : event;

            //     // Supprimer le message d'erreur lié à l'input
            //     if (fileInput) {
            //         const errorMessage = fileInput.nextElementSibling;
            //         if (errorMessage && errorMessage.classList.contains("error-message")) {
            //             errorMessage.remove();
            //         }
            //     }

            //     // Vérification des dimensions de l'image (si applicable)
            //     if (width && height) {
            //         validateImageDimensions(input, width, height, feildIdValidation);
            //     }

            //     const isMultiple = fileInput.hasAttribute("multiple");

            //     if (!isMultiple) {
            //         // Mode un fichier (remplacer l'ancien fichier)
            //         filesArray1 = [{ file: selectedFiles[0], id: Date.now() }];
            //     } else {
            //         // Mode multiple (ajouter sans supprimer les fichiers précédents)
            //         let newFilesArray = [...filesArray1];  // Créer une copie de filesArray1 pour ajouter les nouveaux fichiers

            //         // Ajouter les fichiers sélectionnés s'ils ne sont pas déjà dans la liste
            //         Array.from(selectedFiles).forEach(file => {
            //             const uniqueID = file.name + file.size;  // Créer une clé unique pour chaque fichier
            //             if (!newFilesArray.some(f => f.id === uniqueID)) {
            //                 newFilesArray.push({ file, id: uniqueID });
            //             }
            //         });

            //         filesArray1 = newFilesArray;  // Mettre à jour la liste des fichiers
            //     }

            //     // Mettre à jour l'input file caché avec tous les fichiers combinés
            //     let dataTransfer = new DataTransfer();
            //     filesArray1.forEach(item => dataTransfer.items.add(item.file));
            //     fileInput.files = dataTransfer.files;  // Mise à jour de l'input

            //     // Mettre à jour l'interface utilisateur
            //     updateFileList();
            // }

            // function updateFileList() {

            //     fileList.innerHTML = "";

            //     if (filesArray1.length === 1 && !isMultiple) {
            //         // Si un seul fichier et mode simple : afficher en grand
            //         const fileItem = document.createElement("div");
            //         fileItem.classList.add("file-item");
            //         fileItem.style.width = "100%";
            //         fileItem.style.height = "200px";

            //         const img = document.createElement("img");
            //         img.src = URL.createObjectURL(filesArray1[0].file);

            //         fileItem.appendChild(img);
            //         fileList.appendChild(fileItem);

            //     } else {

            //         // Affichage normal pour plusieurs fichiers
            //         filesArray1.forEach((item, index) => {
            //             const fileItem = document.createElement("div");
            //             fileItem.classList.add("file-item");
            //             fileItem.style.width = "120px";
            //             fileItem.style.height = "120px";

            //             const img = document.createElement("img");
            //             img.src = URL.createObjectURL(item.file);

            //             const removeBtn = document.createElement("button");
            //             removeBtn.classList.add("remove-btn");
            //             removeBtn.innerHTML = "✖";
            //             removeBtn.onclick = () => removeFile(index);

            //             fileItem.appendChild(img);
            //             fileItem.appendChild(removeBtn);
            //             fileList.appendChild(fileItem);
            //         });
            //     }
            // }

        */

        function updateFileList() {
            fileList.innerHTML = "";  // Vider la liste existante des fichiers

            /*
                // if (filesArray1.length === 1 && !fileInput.hasAttribute("multiple")) {
                //     // Mode un seul fichier : afficher en grand
                //     const fileItem = document.createElement("div");
                //     fileItem.classList.add("file-item");
                //     fileItem.style.width = "100%";
                //     fileItem.style.height = "200px";

                //     const img = document.createElement("img");
                //     img.src = URL.createObjectURL(filesArray1[0].file);

                //     fileItem.appendChild(img);
                //     fileList.appendChild(fileItem);
                // } else {
                //     // Mode multiple : afficher tous les fichiers
                //     filesArray1.forEach((item, index) => {
                //         const fileItem = document.createElement("div");
                //         fileItem.classList.add("file-item");
                //         fileItem.style.width = "120px";
                //         fileItem.style.height = "120px";

                //         const img = document.createElement("img");
                //         img.src = URL.createObjectURL(item.file);

                //         const removeBtn = document.createElement("button");
                //         removeBtn.classList.add("remove-btn");
                //         removeBtn.innerHTML = "✖";
                //         removeBtn.onclick = () => removeFile(index);

                //         fileItem.appendChild(img);
                //         fileItem.appendChild(removeBtn);
                //         fileList.appendChild(fileItem);
                //     });
                // }
            */

            if (filesArray1.length === 1 && !fileInput.hasAttribute("multiple")) {
                // Mode un seul fichier : afficher en grand
                const fileItem = document.createElement("div");
                fileItem.classList.add("file-item");
                fileItem.style.width = "100%";
                fileItem.style.height = "200px";

                const img = document.createElement("img");
                img.src = URL.createObjectURL(filesArray1[0].file);

                fileItem.appendChild(img);
                fileList.appendChild(fileItem);
            }

            if (filesArray2.length >= 1 && fileInput.hasAttribute("multiple")) {
                // Mode multiple : afficher tous les fichiers
                filesArray2.forEach((item, index) => {
                    const fileItem = document.createElement("div");
                    fileItem.classList.add("file-item");
                    fileItem.style.width = "120px";
                    fileItem.style.height = "120px";

                    const img = document.createElement("img");
                    img.src = URL.createObjectURL(item.file);

                    const removeBtn = document.createElement("button");
                    removeBtn.classList.add("remove-btn");
                    removeBtn.innerHTML = "✖";
                    removeBtn.onclick = () => removeFile(index);

                    fileItem.appendChild(img);
                    fileItem.appendChild(removeBtn);
                    fileList.appendChild(fileItem);
                });
            }
        }

        function removeFile(index) {
            filesArray2.splice(index, 1);
            updateFileList();
        }

        $.each(action_reset, function(index, tag) {
            $(tag).click(function() {
                // console.log('Yes yes Im here')
                filesArray1 = []
                filesArray2 = []
                updateFileList()
            });
        });

    }

    function validateImageDimensions(input, width, height, feildIdValidation='error-message') {

        const file = input.files[0];
        const errorMessage = document.getElementById(feildIdValidation);

        if (file) {
            const img = new Image();
            const objectURL = URL.createObjectURL(file);

            img.onload = function () {
                if (img.width !== width || img.height !== height) {
                    errorMessage.textContent = `Dimensions recommandées ${width}x${height} pixels.`;
                    errorMessage.style.display = "block";
                    input.value = ""; // Réinitialiser l'input
                } else {
                    errorMessage.style.display = "none";
                }
                URL.revokeObjectURL(objectURL);
            };

            img.src = objectURL;
        }

    }

    // DROPZONE PREVIEWS ===============================================================================
    let filesMap = {}; // Stocke les fichiers séparément pour chaque input

    function preloadFile(inputId, fileListId, fileUrls) {

        filesArray1 = []
        filesArray2 = []

        const fileInput = document.getElementById(inputId);
        const fileList = document.getElementById(fileListId);

        if (!fileInput || !fileList) {
            console.error("L'élément input ou la liste des fichiers est introuvable !");
            return;
        }

        // S'assurer que chaque input a son propre tableau de fichiers
        if (!filesMap[inputId]) {
            filesMap[inputId] = [];
        }

        // Vider l'input et le tableau de fichiers pour cet input spécifique
        fileInput.value = '';
        filesMap[inputId] = [];

        const isMultiple = fileInput.hasAttribute("multiple");

        if (!Array.isArray(fileUrls)) {
            fileUrls = [fileUrls]; // Convertir en tableau si un seul fichier
        }

        let promises = fileUrls.map(fileUrl => {
            return fetch(fileUrl)
                .then(response => response.blob())
                .then(blob => {
                    const fileName = fileUrl.split('/').pop();
                    return new File([blob], fileName, { type: blob.type });
                })
                .catch(error => {
                    console.error("Erreur de chargement du fichier :", error);
                    return null;
                });
        });

        Promise.all(promises).then(files => {
            files = files.filter(file => file !== null); // Retirer les erreurs

            // Vérifier les fichiers existants pour éviter les doublons
            files = files.filter(file => {
                return !filesMap[inputId].some(existingFile => existingFile.name === file.name && existingFile.type === file.type);
            });

            if (files.length > 0) {
                if (!isMultiple) {
                    filesMap[inputId] = files.slice(0, 1); // Remplace le fichier en mode simple
                } else {
                    filesMap[inputId] = [...filesMap[inputId], ...files]; // Ajoute en mode multiple
                    // console.log(filesMa)
                }

                if (isMultiple) {
                    filesArray2 = [...filesArray2, ...files.map(file => ({ file, id: file.name + file.size }))]; // Ajouter en mode multiple
                } else {
                    filesArray1 = [{ file: files[0], id: files[0].name + files[0].size }]; // Remplacer un seul fichier
                }

                updateFileListToEdit(inputId, fileListId, isMultiple);
            }
        });
    }


/*
    // function preloadFile(inputId, fileListId, fileUrls) {
    //     const fileInput = document.getElementById(inputId);
    //     const fileList = document.getElementById(fileListId);

    //     if (!fileInput || !fileList) {
    //         console.error("L'élément input ou la liste des fichiers est introuvable !");
    //         return;
    //     }

    //     // Vérifier si les fichiers existent déjà dans filesArray1 et les ajouter sans les écraser
    //     const isMultiple = fileInput.hasAttribute("multiple");
    //     if (!Array.isArray(fileUrls)) {
    //         fileUrls = [fileUrls]; // Convertir en tableau si un seul fichier
    //     }

    //     let promises = fileUrls.map(fileUrl => {
    //         return fetch(fileUrl)
    //             .then(response => response.blob())
    //             .then(blob => {
    //                 const fileName = fileUrl.split('/').pop();
    //                 return new File([blob], fileName, { type: blob.type });
    //             })
    //             .catch(error => {
    //                 console.error("Erreur de chargement du fichier :", error);
    //                 return null;
    //             });
    //     });

    //     Promise.all(promises).then(files => {
    //         files = files.filter(file => file !== null); // Retirer les erreurs

    //         // Vérifier les fichiers existants pour éviter les doublons
    //         files = files.filter(file => {
    //             return !filesArray1.some(existingFile => existingFile.file.name === file.name && existingFile.file.type === file.type);
    //         });

    //         // Ajouter les nouveaux fichiers à filesArray1 sans les supprimer
    //         if (isMultiple) {
    //             filesArray1 = [...filesArray1, ...files.map(file => ({ file, id: file.name + file.size }))]; // Ajouter en mode multiple
    //         } else {
    //             filesArray1 = [{ file: files[0], id: files[0].name + files[0].size }]; // Remplacer un seul fichier
    //         }

    //         // Appeler la fonction updateFileList via la référence globale
    //         if (fileUploaderFunctions.updateFileList) {
    //             fileUploaderFunctions.updateFileList(); // Mettre à jour la liste des fichiers
    //         }

    //     });
    // }

    // function preloadFile(inputId, fileListId, fileUrls) {
    //     const fileInput = document.getElementById(inputId);
    //     const fileList = document.getElementById(fileListId);

    //     if (!fileInput || !fileList) {
    //         console.error("L'élément input ou la liste des fichiers est introuvable !");
    //         return;
    //     }

    //     const isMultiple = fileInput.hasAttribute("multiple");

    //     if (!Array.isArray(fileUrls)) {
    //         fileUrls = [fileUrls]; // Convertir en tableau si un seul fichier
    //     }

    //     let promises = fileUrls.map(fileUrl => {
    //         return fetch(fileUrl)
    //             .then(response => response.blob())
    //             .then(blob => {
    //                 const fileName = fileUrl.split('/').pop();
    //                 return new File([blob], fileName, { type: blob.type });
    //             })
    //             .catch(error => {
    //                 console.error("Erreur de chargement du fichier :", error);
    //                 return null;
    //             });
    //     });

    //     Promise.all(promises).then(files => {
    //         files = files.filter(file => file !== null); // Retirer les erreurs

    //         // Vérifier les fichiers existants pour éviter les doublons
    //         files = files.filter(file => {
    //             return !filesArray1.some(existingFile => existingFile.file.name === file.name && existingFile.file.type === file.type);
    //         });

    //         // Ajouter les nouveaux fichiers à filesArray1 sans les supprimer
    //         if (isMultiple) {
    //             filesArray1 = [...filesArray1, ...files.map(file => ({ file, id: file.name + file.size }))]; // Ajouter en mode multiple
    //         } else {
    //             filesArray1 = [{ file: files[0], id: files[0].name + files[0].size }]; // Remplacer un seul fichier
    //         }

    //         // Appeler la fonction updateFileList
    //         if (fileUploaderFunctions.updateFileList) {
    //             fileUploaderFunctions.updateFileList(); // Mettre à jour la liste des fichiers
    //         }
    //     });
    // }

    // function preloadFile(inputId, fileListId, fileUrls) {
    //     const fileInput = document.getElementById(inputId);
    //     const fileList = document.getElementById(fileListId);

    //     if (!fileInput || !fileList) {
    //         console.error("L'élément input ou la liste des fichiers est introuvable !");
    //         return;
    //     }

    //     const isMultiple = fileInput.hasAttribute("multiple");

    //     if (!Array.isArray(fileUrls)) {
    //         fileUrls = [fileUrls]; // Convertir en tableau si un seul fichier
    //     }

    //     let promises = fileUrls.map(fileUrl => {
    //         return fetch(fileUrl)
    //             .then(response => response.blob())
    //             .then(blob => {
    //                 const fileName = fileUrl.split('/').pop();
    //                 return new File([blob], fileName, { type: blob.type });
    //             })
    //             .catch(error => {
    //                 console.error("Erreur de chargement du fichier :", error);
    //                 return null;
    //             });
    //     });

    //     Promise.all(promises).then(files => {
    //         files = files.filter(file => file !== null); // Retirer les erreurs

    //         // Vérifier les fichiers existants pour éviter les doublons
    //         files = files.filter(file => {
    //             return !Object.values(filesMap).some(existingFile => existingFile.file.name === file.name && existingFile.file.type === file.type);
    //         });

    //         // Ajouter les nouveaux fichiers à filesMap sans les supprimer
    //         files.forEach(file => {
    //             const uniqueID = file.name + file.size;
    //             if (!filesMap[uniqueID]) {
    //                 filesMap[uniqueID] = { file, id: uniqueID };
    //             }
    //         });

    //         // Appeler la fonction updateFileList
    //         if (fileUploaderFunctions.updateFileList) {
    //             fileUploaderFunctions.updateFileList(); // Mettre à jour la liste des fichiers
    //         }
    //     });
    // }
*/

    function updateFileListToEdit(inputId, fileListId, isMultiple) {
        const fileInput = document.getElementById(inputId);
        const fileList = document.getElementById(fileListId);

        if (!fileInput || !fileList) return;

        fileList.innerHTML = "";
        const dataTransfer = new DataTransfer();

        if (!filesMap[inputId]) {
            filesMap[inputId] = [];
        }

        if (filesMap[inputId].length === 1 && !isMultiple) {

            // 🔹 Mode "Un seul fichier" : Affichage en grand
            const file = filesMap[inputId][0];
            dataTransfer.items.add(file);

            const fileItem = document.createElement("div");
            fileItem.classList.add("file-item");
            fileItem.style.width = "100%";
            fileItem.style.height = "200px";

            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.style.width = "100%";
            img.style.height = "100%";
            img.style.objectFit = "cover";

            fileItem.appendChild(img);
            fileList.appendChild(fileItem);

        } else {
            // console.log('NO MULTIPLE')
            // console.log(file)
            // 🔹 Mode "Plusieurs fichiers" : Affichage en grille
            filesMap[inputId].forEach((file, index) => {
                dataTransfer.items.add(file);

                const fileItem = document.createElement("div");
                fileItem.classList.add("file-item");
                fileItem.style.width = "120px";
                fileItem.style.height = "120px";

                const img = document.createElement("img");
                img.src = URL.createObjectURL(file);
                img.style.width = "100%";
                img.style.height = "100%";
                img.style.objectFit = "cover";

                const removeBtn = document.createElement("button");
                removeBtn.classList.add("remove-btn");
                removeBtn.innerHTML = "✖";
                removeBtn.onclick = () => removeFileToEdit(index, inputId, fileListId, isMultiple);

                fileItem.appendChild(img);
                fileItem.appendChild(removeBtn);
                fileList.appendChild(fileItem);
            });
        }

        fileInput.files = dataTransfer.files;
    }

    function removeFileToEdit(index, inputId, fileListId, isMultiple) {
        filesMap[inputId].splice(index, 1);
        filesArray2.splice(index, 1);
        updateFileListToEdit(inputId, fileListId, isMultiple);


        // filesArray2.splice(index, 1);
        //     updateFileList();
    }

    // STANDARD ELEMENT =================================================================================

    $(document).on('input', '.form-control', function() {
        $(this).next('.error-message').remove();
    });

</script>
