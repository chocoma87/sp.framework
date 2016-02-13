


/* tab plugin */
/* tabContents 안의 내용은 div로 싼다. */
(function ($) {

    $.fn.sptab = function (option) {

        return $(this).each(function(){

            $.fn.sptab._this = this;

            $(this).on('click', ' nav ul li a', attachEvent);
        })
    };

    var attachEvent = function(e){
        e.preventDefault();

        var strhref = $(this).attr('href'),
            detectContent = $('div' + strhref);

        $(detectContent).addClass('active');
        $(detectContent).siblings('div').removeClass('active');

        //active class nav
        $(this).closest('li').addClass('active').siblings().removeClass('active');
    }

})(jQuery);
