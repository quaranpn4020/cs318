var isRunning = false;

function move() {
    if (!isRunning) {
        isRunning = true;
        var w = $(window).width();
        var h = $(window).height();
        var dW = $("#widget").width();
        var dH = $("#widget").height();
        var randomLeft = Math.floor(Math.random() * (w - dW) + 1);
        var randomTop = Math.floor(Math.random() * (h - dH) + 1);
        $("#widget").animate({
            left: randomLeft,
            top: randomTop
        }, 500);
        setTimeout(function(){isRunning = false;}, 500);
    }
    
    
}