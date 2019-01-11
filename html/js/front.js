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
        $(this).prev("span").toggle(500);
    });
    // glossary see more
    $(".glossary-card a").on("click", function(e){
        e.preventDefault();
        $.post(
            '/front/getGlossaryWord',
            {
                wordId: $(this).attr("data-word-id")
            },
            function(res)
            {
                var word = JSON.parse(res);
                $(".glossary-display").fadeIn();
                $(".glossary-display h2").text(word.word);
                $(".glossary-display p").text(word.meaning);
                // close
                $(".glossary-display a").on("click", function(e){
                    e.preventDefault();
                    $(".glossary-display").fadeOut();
                });
            }
        );
    });
});