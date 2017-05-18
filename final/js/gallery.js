$(document).ready(function() {
    
    var popup = $("#popup");
    var bg = $("#fadeoutBG");
    var images = $(".container img");
    
    images.click(function() {
        var url = 'url(' + this.src + ')';
        popup.css('background-image', url);
        popup.css('display', 'block');
        bg.css('display', 'block');
    });
    
    $("#popup, #fadeoutBG").click(function() {
        popup.css('display', 'none');
        bg.css('display', 'none');
    });
       
});

