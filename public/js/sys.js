/**
 * Created by m@zba on 2/25/18.
 */
$(function () {
    $('.panel-title-btn').on({
        mouseenter:function (e) {
            var title = $(this).attr('title');
            if(typeof title != 'undefined')
                $(this).append('<span>'+title+'</span>').find('span').show(60)
        },
        mouseleave:function () {
            var title = $(this).attr('title');
            if(typeof title != 'undefined')
                $(this).find('span').remove();
        }
    });
});