(function ($) {

    $('.trick-card-title').click(function (e) {
        $.get('/tricks/' + $(e.target).data('slug') + '/viewed', {}, function (res) {});
    });

})(jQuery)
