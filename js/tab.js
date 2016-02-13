


/* tab plugin */
/* tabContents 안의 내용은 div로 싼다. */
(function ($) {

    var defaultOptions = {
        initActiveIndex: 0,
        activeClass: 'active'
    };

    $.fn.sptab = function (option) {

        return $(this).each(function(){
            var custom_option = $.extend({}, defaultOptions, option);

            $.fn.sptab._this = this;

            init(custom_option, this);
            var cb_data = {option: custom_option, wrapper: this};
            $(this).on('click', ' nav ul li a', cb_data, attachEvent);
        })
    };

    var init = function(option, wrapper){
        initActiveItems(option.initActiveIndex, option.activeClass, wrapper);

        var str_classes = $(wrapper).attr('class').split(' ').join('.');
        $(wrapper).find('.' + str_classes + ' > div:not(\'.active\')').css({
            display: 'none'
        });

    }

    var initActiveItems = function(index, classname, wrapper){
        //nav init active li element
        var elActiveNav = $(wrapper).find(' nav ul li > a:eq(' + index + ')'),
            strhref = $(elActiveNav).attr('href'),
            detectContent = $('div' + strhref);
        $(elActiveNav).addClass(classname).parent('li').siblings().children('a').removeClass('active');

        $(detectContent).addClass(classname).show();
        $(detectContent).siblings('div').removeClass(classname).hide();
    }

    var attachEvent = function(e){
        e.preventDefault();
        var option  = e.data.option,
            activeClassName = option.activeClass,
            strhref = $(this).attr('href'),
            detectContent = $('div' + strhref);

        $(detectContent).addClass(activeClassName).show();
        $(detectContent).siblings('div').removeClass(activeClassName).hide();

        //active class nav

        $(this).addClass(activeClassName).parent('li').siblings().children('a').removeClass(activeClassName);
    }

})(jQuery);
