var closeInSeconds;
jQuery(document).ready(function() {

    $doch = jQuery(window).height();
    $docw = jQuery(window).width();

    if ($doch != screen.height | $docw != screen.width) {
        closeInSeconds = 10
        swall();
    }

});
jQuery(window).resize(function() {
    $dochu = jQuery(window).height();
    $docwu = jQuery(window).width();

    if ($dochu != screen.height | $docwu != screen.width) {
        closeInSeconds = 10;
        swall();
    }
});

function Redirect() {
    window.location = "logout", setTimeout('0');

}

function launchIntoFullscreen(element) {

    if (element.requestFullscreen) {
        element.requestFullscreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();
    } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen();
    }
}

function swall() {
    var
        displayText = "You will be logged out in: #1 second(s).",
        timer;
    swal({
        title: 'Stay in fullscreen',
        text: displayText.replace(/#1/, closeInSeconds),
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#ff0000',
        confirmButtonText: 'Go fullscreen!',
        cancelButtonText: 'Leave this page!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-warning',
        closeOnConfirm: 'true',
        timer: closeInSeconds*1000,
        buttonsStyling: false
    }, function(isConfirm) {
        if (isConfirm !=null && isConfirm != false) {
            closeInSeconds = Number.MAX_VALUE/1000;

            launchIntoFullscreen(document.documentElement);


        } else if (jQuery(window).height != screen.height && jQuery(window).width != screen.width) {
            Redirect();

        }
    })
    timer = setInterval(function() {


            closeInSeconds-=1;

            if (closeInSeconds < 0) {

                clearInterval(timer);
                closeInSeconds = 0;
            }

            $('.sweet-alert > p').text(displayText.replace(/#1/, closeInSeconds));

        }, 1000)
}







