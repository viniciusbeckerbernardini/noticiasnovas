tinymce.init(
    {
        selector:'textarea#tinymce',
        plugins: ["image","paste"],
        images_upload_handler: function (blobInfo, success, failure) {
            console.log("oi");
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'image.php');

            xhr.onload = function() {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            console.log(formData);
            xhr.send(formData);
        },

        paste_data_images: true
    });
