$(document).ready(function() {
    $("#opacityrange").on('input', function() {
        var opacity = $(this).val() / 100;
        $("#editedImage").css('opacity', opacity);
    });
});