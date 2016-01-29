(function($) {
    $('#radio1, #radio2').on('change', function() {
        $('.js-togglable-form').toggleClass('sr-only');
    });
})(jQuery);