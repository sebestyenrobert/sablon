// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function() {

    // Popup for Login/Regstration
    $(document).on('click touchstart', '.popup-open', function(e) {
        e.preventDefault();
        var popupId = $(this).attr('href');

        console.log(popupId);

        $.ajax({
            type: 'GET',
            url: popupId,
            dataType: 'html',
            beforeSend: function() {
                $('.popup .popup-inner').empty();
            },
            success: function(html){

                $('.popup .popup-inner').append(html);
                $('body').addClass('inpopup');
                
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
        
    });

    // Close popup
    $(document).mouseup(function(e) {
        e.preventDefault();
        var sliderContainer = $('.popup-inner');
        var popupClose = $('.popup-close');

        if (!sliderContainer.is(e.target) && sliderContainer.has(e.target).length === 0 || popupClose.is(e.target)) {
            $('body').removeClass('inpopup');
        }
    });
});
    