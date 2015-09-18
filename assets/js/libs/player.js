// Popout Player
$("#audio-player .player-popout").on("click", function() {
    window.open("/clients/justin-timberlake/etc/player.html", "", "status=0,toolbar=0,location=0,menubar=0,directories=0,resizable=0,scrollbars=0,height=455,width=500");
});

// Embeded Player
function SCPlayer(){
    var widgetIframe = document.getElementById("sc-widget"),
        widget       = SC.Widget(widgetIframe),
        audioPlayer  = $("#audio-player"),
        playerOutput = $("#player-output"),
        play         = audioPlayer.find(".icon-play"),
        pause        = audioPlayer.find(".icon-pause"),
        prev         = audioPlayer.find(".icon-previous"),
        next         = audioPlayer.find(".icon-next");

    widget.bind(SC.Widget.Events.READY, function() {

        // Get Track Info
        function getTrackName(){
            widget.getCurrentSound(function(sound) {
                playerOutput.html(sound.title);
            });
        }

        // Play
        play.on("click", function(){
            widget.play();  
        });
        // Pause
        pause.on("click", function(){
            widget.pause();  
            play.show();
            pause.hide();
            playerOutput.html("");
        });
        // Previous
        prev.on("click", function(){
            widget.prev();
        });
        // Next
        next.on("click", function(){
            widget.next();
        });

        // On Play
        widget.bind(SC.Widget.Events.PLAY, function() {
            getTrackName();
            play.hide();
            pause.show();
        });
    });
};