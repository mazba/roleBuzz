/**
 * Created by m@zba on 2/25/18.
 */
$(function () {
    // top action menu
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
    //active menu
    var allLink = $('.page-sidebar-menu li a');
    var path_name = window.location.pathname;
    path_name = path_name.toLowerCase();
    var foundLink = false;
    if(path_name.lastIndexOf('/')+1 == path_name.length){
        path_name = path_name.substring(0, path_name.length - 1);
    }
    allLink.each(function(){
        var thisUrl = $(this).attr('href').toLowerCase();
        var thisUrl = $(this).data('url');
        if(path_name == thisUrl){
            checkParentSubMenu(this);
            foundLink = true;
        }
    });
    if(foundLink == false)
    {
        var allParm =  path_name = path_name.split('/');
        var controllerMethod = '/'+allParm[1]+'/'+allParm[2];
        allLink.each(function(){
            var thisUrl = $(this).attr('href').toLowerCase();
            if(controllerMethod == thisUrl){
                checkParentSubMenu(this);
                foundLink = true;
            }
        });

    }
});
/*
* Read More for long text
* */
function showText(e){
    $(e).html($(e).find('span').html());
}
function checkParentSubMenu(ele)
{
    $(ele).closest('li').addClass('active');
    var obj = $(ele).closest('.sub-menu');
    if(obj.length > 0)
    {
        obj.closest('li').addClass('active');
        ele = obj.closest('li').closest('li');
        checkParentSubMenu(ele);
    }
    return 0;
}
