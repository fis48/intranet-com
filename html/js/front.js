$(document).ready(function(){
    // comment type
    if ($("select[name='type']").val() == 'occur') {
            $(".subtype").show();
    };
    // toggle subtype
    $("select[name='type']").on('change', function(){
        if ($(this).val() == 'occur') {
            $(".subtype").show();
        }
        else
        {
            $(".subtype").hide();
        }
    });
});