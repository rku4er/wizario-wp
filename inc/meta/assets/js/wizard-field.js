(function($){
    $(document).ready(function () {
        $("#wizard_field").hide();
        var select = $("#page_template").val();
        if( select == "page-template-full-size.php" ){
            $("#wizard_field").show();
        } else {
            $("#wizard_field").hide();
        }

        $("#page_template").change(function () {
            var str = "";
            $("#page_template option:selected").each(function () {
                str = $(this).val();
                if( str == "page-template-full-size.php" ){
                    $("#wizard_field").show();
                } else {
                    $("#wizard_field").hide();
                }
            });

        }).change();

    })
})(jQuery)
