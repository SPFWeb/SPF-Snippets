$(function () {
        $("#SizeQuestion").click(function () {
            if ($(this).is(":checked")) {
                $("#SizeInfo").show();
                
            } else {
                $("#SizeInfo").hide();
              
            }
        });
    });
