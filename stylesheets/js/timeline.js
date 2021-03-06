$(document).ready(function () {
    $(".timeline").hide();
});

$("#more").on("click", function () {
    $("#blockinfo").fadeOut(500);
    $(".timeline").fadeIn(500);
});

$(() => {
    let stickyTop = 0,
        scrollTarget = false;

    let timeline = $('.timeline__nav'),
        items = $('li', timeline),
        milestones = $('.timeline__event>div'),
        offsetTop = parseInt(timeline.css('top'));

    const TIMELINE_VALUES = {
        start: 300,
        step: 50
    };


    $(window).resize(function () {
        timeline.removeClass('fixed');

        stickyTop = timeline.offset().top - offsetTop;

        $(window).trigger('scroll');
    }).trigger('resize');

    $(window).scroll(function () {
        if ($(window).scrollTop() > stickyTop) {
            timeline.addClass('fixed');
        } else {
            timeline.removeClass('fixed');
        }
    }).trigger('scroll');

    items.find('span').click(function () {
        let li = $(this).parent(),
            index = li.index(),
            milestone = milestones.eq(index);

        if (!li.hasClass('timeline__nav--selected') && milestone.length) {
            scrollTarget = index;

            let scrollTargetTop = milestone.offset().top - 80;

            $('html, body').animate({
                scrollTop: scrollTargetTop
            }, {
                duration: 400,
                complete: function complete() {
                    scrollTarget = false;
                }
            });
        }
    });

    $(window).scroll(function () {
        let viewLine = $(window).scrollTop() + $(window).height() / 3,
            active = -1;

        if (scrollTarget === false) {
            milestones.each(function () {
                if ($(this).offset().top - viewLine > 0) {
                    return false;
                }

                active++;
            });
        } else {
            active = scrollTarget;
        }

        timeline.css('top', -1 * active * TIMELINE_VALUES.step + TIMELINE_VALUES.start + 'px');

        items.filter('.timeline__nav--selected').removeClass('timeline__nav--selected');

        items.eq(active != -1 ? active : 0).addClass('timeline__nav--selected');
    }).trigger('scroll');
});