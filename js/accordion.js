


/* accordion plugin */
/* dl > dt + dd 구조로 한다. */
(function ($) {
    //private members
    var defaultOptions = {
        activeClass       : 'active',
        dataValue         : 'accordion',
        closeOtherContents: false,
        openedItem        : -1,
        elTitle           : 'dt',
        elContent         : 'dd',
        hasIcon           : false,
        downIconClass     : 'fa fa-chevron-down',
        upIconClass       : 'fa fa-chevron-up'
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
            var cb_data = {option : custom_option, wrapper: this};
            $(this).on('click', custom_option.elTitle + ' > a', cb_data, attachEvent );

        });

    };



    /**
     * Initialize : 초기화
     */
    $.fn.spaccordion.init = function(option){
        var openedItem = option.openedItem,
            hasIcon = option.hasIcon;


        //열어둬야 할 항목이 있는 경우
        if(openedItem >= 0){
            var wrapper = $(this.wrapper),
                strSelector = option.elTitle + ':eq(' + openedItem +'), ' + option.elContent + ':eq(' + openedItem + ')';
            var elItem = $(wrapper).find(strSelector);

            $(elItem).addClass(option.activeClass).css({display: 'block'});
            //아이콘 옵션이 활성화 되었다면 미리 열어두는 항목에 위 아이콘을 적용한다.
            if(option.hasIcon == true && option.upIconClass){
                var targetEl = $(option.elTitle + ':eq(' + openedItem + ') > a ');

                appendIconElement(targetEl, option.upIconClass);
            }
        }

        //아이콘 추가하는 경우
        if(hasIcon == true){
            var wrapper = $(this.wrapper);
            $(wrapper).find(option.elTitle + ' > a').each(function(i, el){
                if($(this).parent(option.elTitle).hasClass('active')) return true;
                appendIconElement(this, option.downIconClass);
            });
        }
    }

    //private functions

    /**
     * 해당 항목 외의 항목들은 항상 닫아두기를 할 때
     */
    function closeOtherContents(currentAccodianContents){
        $(currentAccodianContents).siblings('dd').slideUp(200);
    }

    /**
     * 이벤트 attach
     */
    function attachEvent(e){
        e.preventDefault();
        var option = e.data.option,
            wrapper = e.data.wrapper;


        var dataVal = option.dataValue;
        var dataAccordian = $(this).data(dataVal),
            elContent = option.elContent,
            elTitle = option.elTitle,
            accordianContents = $(wrapper).find(elContent + '[data-' + dataVal + '="' + dataAccordian + '"]');

        var activeClass = option.activeClass;
        $(this).parent(elTitle).addClass(activeClass).siblings(elTitle).removeClass(activeClass);

        var this_ = $(this);
        $(accordianContents).slideToggle(200, function(){
            callbackSlideToggle(this_, option, wrapper);
        }).addClass(activeClass).siblings(elContent).removeClass(activeClass);

        if(option.closeOtherContents == true){
            closeOtherContents(accordianContents);
        }
    }

    /**
     * 슬라이드 후 아이콘 표시 callback 함수
     */
    function callbackSlideToggle(elAnchor, option, wrapper){
        if(option.hasIcon == false || (!option.downIconClass || !option.upIconClass)) return ;

        var dataVal = option.dataValue,
            elTitleTag = option.elTitle,
            elContentTag = option.elContent;

        //현재 메뉴를 제외한 형제 메뉴들은 아래 아이콘으로 일괄 변경
        $(elAnchor).parents(elTitleTag).siblings(elTitleTag).find('a i').attr('class', option.downIconClass);

        $(elAnchor).parent().siblings(elContentTag).each(function(i, e){
            var isDown = true
            if($(this).is(':hidden')) isDown = false;

            var ddData = $(this).data(dataVal);

            var elIcon = $(wrapper).find('a[data-' + dataVal + '="' + ddData + '"]').find('i');

            var arrClass = [option.downIconClass, option.upIconClass];
            //아이콘 클래스명을 배열로 정의
            $(elIcon).toggleClass(function(){
                //먼저 아이콘 관련 클래스는 모두 제거 한다.
                $(this).removeClass(arrClass.join(' '));
                //true 면 1, false 이면 0 으로 배열의 인덱스 값을 구한다.
                return arrClass[+isDown];
            })

        });

    }

    /**
     * 아이콘 추가
     */
    function appendIconElement(target, classname){
        var elIcon = $('<i>');
        $(elIcon).addClass(classname);
        $(target).append(elIcon);
    }

})(jQuery);
