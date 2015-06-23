/**
 * Created by DevelopKim [kim@spaaaade.com] on 15. 6. 22..
 */



$(document).ready(function(){


    // :focus border 없애기
    $('a').on('click', function () {
        this.blur();
    })


        /* tab menu */
    /* tabContents 안의 내용은 div로 싼다. */
/*    $.fn.sptab = function (option) {

        var defaultOptions = {
            parentClass: '.tabWrapper',
            tabContents: '.tabContents',
            activeClass: 'active',
            dataValue: 'tab'
        };
        var opt = $.extend({}, defaultOptions, option);

        $(this).on('click', function(e){
            e.preventDefault();

            var recentTab = $(this).data(opt.dataValue),
                tabContents = $(this).parents(opt.parentClass).find( opt.tabContents + '[data-' + opt.dataValue + '="' + recentTab + '"]');

            $(this).parents(opt.parentClass).find(opt.tabContents).removeClass(opt.activeClass);
            tabContents.addClass(opt.activeClass);
        })
    };

    $('.tabContents .tabContentsTitle a').sptab({

    });*/


    (function ($) {

        $.fn.sptab = function (option) {
            var opt = $.extend({}, $.fn.sptab.defaultOptions, option);
            $.fn.sptab.defaultOptions = opt;

            $.fn.sptab._this = this;

            $.fn.sptab.attachEvent(this, opt);
        };

        $.fn.sptab.defaultOptions = {
            parentClass: '.tabWrapper',
            tabContents: '.tabContents',
            activeClass: 'active',
            dataValue: 'tab'
        };

        $.fn.sptab.attachEvent = function(wrapper, option){

            wrapper.find('.tabContentsTitle a').on('click', function(e){
                e.preventDefault();

                var recentTab = $(this).data(option.dataValue),
                    tabContents = $(this).parents(option.parentClass).find( option.tabContents + '[data-' + option.dataValue + '="' + recentTab + '"]');

                $(this).parents(option.parentClass).find(option.tabContents).removeClass(option.activeClass);
                tabContents.addClass(option.activeClass);

            })
        }

    })(jQuery);

    $('.tabWrapper').sptab({

    });




    /* accordion menu */
    /* dl > dt + dd 구조로 한다. */
    (function ($) {
        $.fn.spaccordion = function (option) {

            return this.each(function(){
                var opt = $.extend({}, $.fn.spaccordion.defaultOptions, option);
                $.fn.spaccordion.defaultOptions = opt;

                $.fn.spaccordion._this = this;

                $.fn.spaccordion.init();

                $.fn.spaccordion.attachEvent(this, opt);
            });

        };


        $.fn.spaccordion.defaultOptions = {
            parentClass       : '.accordion',
            accorionClass     : '.accordionContents',
            activeClass       : 'active',
            dataValue         : 'accordion',
            closeOtherContents: false,
            openedItem : -1
        };


        $.fn.spaccordion.init = function(){
            var openedItem = this.defaultOptions.openedItem;

            if(openedItem >= 0){
                var wrapper = $($.fn.spaccordion._this),
                    strSelector = 'dt:eq(' + openedItem +'), dd:eq(' + openedItem + ')';
                var elItem = $(wrapper).find(strSelector);
                
                $(elItem).addClass($.fn.spaccordion.defaultOptions.activeClass).css({display: 'block'});
            }
        }

        /**
         * 각 타이틀 태그에 이벤트를 추가한다.
         */
        $.fn.spaccordion.attachEvent = function(wrapper, option){
            var elTitle = $(wrapper).find('dt > a');

            $(elTitle).on('click', function (e) {
                console.log($.fn.spaccordion._this);
                e.preventDefault();
                var dataVal = option.dataValue;
                var dataAccordian = $(this).data(dataVal),
                    elWrapper = $(this).parents('dl'),
                    accordianContents = $(elWrapper).find('dd[data-' + dataVal + '="' + dataAccordian + '"]');

                var activeClass = option.activeClass;
                $(this).parent('dt').addClass(activeClass).siblings('dt').removeClass(activeClass);
                
                $(accordianContents).slideToggle(200).addClass(activeClass).siblings('dd').removeClass(activeClass);

                if(option.closeOtherContents == true){
                    $.fn.spaccordion.closeOtherContents(accordianContents);
                }

            })

        };
        
        $.fn.spaccordion.closeOtherContents = function(recentAccordian){
            $(recentAccordian).siblings('dd').slideUp(200);
        };

    })(jQuery);


    $('#open').spaccordion({
        closeOtherContents: true,
        openedItem: 1
    });

    $('dl.accordion.close').spaccordion({
        closeOtherContents: false,
        openedItem: 0
    });


})
