/**
 * Created by DevelopKim [kim@spaaaade.com] on 15. 6. 22..
 */



$(document).ready(function(){


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

   /* $.fn.sptab = function (option) {

        var defaultOptions = {
            parentClass: '.tabWrapper',
            tabContents: '.tabContents',
            activeClass: 'active',
            dataValue: 'tab'
        };

        var opt = $.extend({}, defaultOptions, option);

        $(this).find('.tabContentsTitle a').on('click', function(e){
            e.preventDefault();

            var recentTab = $(this).data(opt.dataValue),
                tabContents = $(this).parents(opt.parentClass).find( opt.tabContents + '[data-' + opt.dataValue + '="' + recentTab + '"]');

            $(this).parents(opt.parentClass).find(opt.tabContents).removeClass(opt.activeClass);
            tabContents.addClass(opt.activeClass);

        })
    };

    $('.tabWrapper').sptab({

    });
*/

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




    /* accordion plugin */
    /* dl > dt + dd 구조로 한다. */
    (function ($) {
        //private members
        var defaultOptions = {
            parentClass       : '.accordion',
            accorionClass     : '.accordionContents',
            activeClass       : 'active',
            dataValue         : 'accordion',
            closeOtherContents: false,
            openedItem        : -1
        }

        //public functions 

        /**
         * Constructor : 생성자
         */
        $.fn.spaccordion = function (option) {

            return this.each(function(){

                var custom_option = $.extend({}, defaultOptions, option);
                $.fn.spaccordion.wrapper = this;

                $.fn.spaccordion.init(custom_option);

                //attach event
                var cb_data = { option : custom_option, wrapper: this};
                $(this).on('click', 'dt > a', cb_data, attachEvent );

            });

        };


        /**
         * Initialize : 초기화
         */
        $.fn.spaccordion.init = function(option){
            var openedItem = option.openedItem;

            //열어둬야 할 항목이 있는 경우
            if(openedItem >= 0){
                var wrapper = $(this.wrapper),
                    strSelector = 'dt:eq(' + openedItem +'), dd:eq(' + openedItem + ')';
                var elItem = $(wrapper).find(strSelector);
                
                $(elItem).addClass(option.activeClass).css({display: 'block'});
            }
        }

        //private functions 

        /**
         * 해당 항목 외의 항목들은 항상 닫아두기를 할 때
         */
        function closeOtherContents(currentAccodianContents){
            $(currentAccodianContents).siblings('dd').slideUp(200);
        }

        function attachEvent(e){
            e.preventDefault();
            var option = e.data.option,
                wrapper = e.data.wrapper;

            var dataVal = option.dataValue;
            var dataAccordian = $(this).data(dataVal),
                accordianContents = $(wrapper).find('dd[data-' + dataVal + '="' + dataAccordian + '"]');

            var activeClass = option.activeClass;
            $(this).parent('dt').addClass(activeClass).siblings('dt').removeClass(activeClass);

            $(accordianContents).slideToggle(200).addClass(activeClass).siblings('dd').removeClass(activeClass);

            if(option.closeOtherContents == true){
                closeOtherContents(accordianContents);
            }

        }
    })(jQuery);


    /**
     * example accordion plugin
     */
    $('#open').spaccordion({
        closeOtherContents: false,
        openedItem: 1
    });

    $('dl.accordion.close').spaccordion({
        closeOtherContents: true,
        openedItem: 0
    });


})
