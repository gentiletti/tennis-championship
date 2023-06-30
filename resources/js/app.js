import './bootstrap';

$(function () {
    $('.winner-image').on("click", function () {
        party.confetti(this, {
            count: party.variation.range(100, 140),
        });
    });

    var visibleImage = false;

    $(window).scroll(function () {
        var img = $('.winner-image');

        if (img.is(":visible") && !visibleImage) {
            var scrollTop = $(this).scrollTop();
            var imgOffset = img.offset().top;
            var windowHeight = $(this).height();

            if (scrollTop + windowHeight > imgOffset) {
                img.trigger("click");
                visibleImage = true;
            }
        }
    });
});