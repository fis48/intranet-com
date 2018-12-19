$(document).ready(function(){

    $R('#bull-body', {
        imageUpload: '/admin/addnews',
        callbacks: {
            image: {
                uploaded: function(image, response){
                    $('#image').val(response.file.url);
                }
            }
        },
        buttons: ["format", "bold", "italic", "lists", "image"]
    });

});