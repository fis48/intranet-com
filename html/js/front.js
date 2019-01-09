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
    // who see more
    $(".who-card a").on('click', function(e){
        e.preventDefault();
        // $(".who-card p span").toggle(500);
        $(this).prev("span").toggle(500);
    });
});