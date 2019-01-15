$(document).ready(function(){
    
    // bulletin redactor
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

    // make public
    $("input[name='is_public']").on('click', function(){
        $.post(
            '/admin/setpublic',
            {
                qId: $(this).attr('data-id'),
                public: $(this).prop('checked')
            },
            function(response){

                var res = JSON.parse(response);

                console.log( res.is_public );

                if (res.is_public == '1') {
                    var msg = "La pregunta se ha hecho pública";
                }
                else {
                    var msg = "La pregunta se ha hecho privada";
                }
                alert(msg);
            }
        );
    });

    // team order
    $("input[name='order']").on("change", function(){
        $.post(
            '/admin/setTeamOrder',
            {
                teamId: $(this).attr("data-team-id"),
                order: $(this).val()
            },
            function(res) {
                alert("El orden ha sido actualizado.");
                window.location = "/admin/team";
            }
        );
    })
});