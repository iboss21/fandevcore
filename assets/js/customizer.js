(function($) {
    wp.customize('primary_color', function(value) {
        value.bind(function(newval) {
            $('body').css('background-color', newval);
        });
    });
    wp.customize('layout_setting', function(value) {
        value.bind(function(newval) {
            if (newval === 'boxed') {
                $('body').addClass('boxed-layout');
            } else {
                $('body').removeClass('boxed-layout');
            }
        });
    });
})(jQuery);
