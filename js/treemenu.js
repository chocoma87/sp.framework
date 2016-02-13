/**
 * Created by DevelopKim [kim@spaaaade.com] on 15. 6. 22..
 */


/**
 * Tree Menu plugin
 */
(function($){

    var defaultOptions = {
        downIconClass: 'fa fa-chevron-down',
        upIconClass  : 'fa fa-chevron-up',
        slideDuration: 200,
        hasIcon: false
    };

    $.fn.sptreemenu = function(option){

        return this.each(function(){
            var custom_option = $.extend({}, defaultOptions, option);
            $.fn.sptreemenu.wrapper = this;
            $.fn.sptreemenu.init(custom_option, this);

            var cb_data = {option: custom_option, wrapper: this};
            $(this).on('click', '> li > a', cb_data, attachEvent);
        })
    };

    $.fn.sptreemenu.init = function (option, wrapper) {
        //아이콘 설정이 있을 때에만 실행
        if(option.hasIcon == true && (option.downIconClass && option.upIconClass)){
            //모든 메뉴의 아이콘을 아래로 초기화
            $(wrapper).find(' > li > a').each(function(i, el){
                var elIcon = $('<i>');
                $(elIcon).addClass(option.downIconClass);
                $(this).append(elIcon);
            });
        }
    }

    function attachEvent(e){

        //서브메뉴가 있을 때만 실행
        if($(this).siblings('ul').length === 0){
            return;
        }

        e.preventDefault();

        var option = e.data.option;

        $(this).parents('li').siblings('li').find('ul').slideUp(option.slideDuration);

        $(this).siblings('ul').slideToggle(option.slideDuration);

        //active 클래스 추가
        $(this).closest('li').siblings('li').find('> a').removeClass('active');
        $(this).toggleClass('active');


        /* 버튼 모양 바꾸기 */
        //아이콘 설정이 없다면 중지
        if(option.hasIcon == false || (!option.downIconClass || !option.upIconClass)) return ;

        //현재 메뉴를 제외한 형제 메뉴들은 아래 아이콘으로 일괄 변경
        $(this).parents('li').siblings('li').find('a i').attr('class', option.downIconClass);
        var elIcon = $(this).find('i');

        var arrClass = [option.downIconClass, option.upIconClass],
            //아이콘 클래스명을 배열로 정의
            isDown = $(elIcon).hasClass(option.downIconClass);
            //아래 아이콘 클래스를 가지고 있는지 여부 boolean

        $(elIcon).toggleClass(function(){
            //먼저 아이콘 관련 클래스는 모두 제거 한다.
            $(this).removeClass(arrClass.join(' '));
            //true 면 1, false 이면 0 으로 배열의 인덱스 값을 구한다.
            return arrClass[+isDown];
        })
    }
})(jQuery);








/**
 * Hover Menu plugin
 */
(function($){

    $.fn.hovermenu = function(){

        return this.each(function(){
            $(this).find('> li').hover(
                function(){
                    $(this).addClass('active');
                },
                function(){
                    $(this).removeClass('active');
                }
            )

            $(this).find('> li > a').on('focusin', function() {
                $(this).closest('li').addClass('active');
                console.log('in');
            })

            $(this).find('ul > li:last-child a').on('focusout', function() {
                $(this).closest('li').parents('li').removeClass('active');
                console.log();
            })
        })

    };

})(jQuery);
