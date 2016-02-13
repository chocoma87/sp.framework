


$(document).on('ready', function(){

    //a 클릭 시 :focus 스타일 적용되는 현상 막기 위해서,
    //focus 상태로 머무는 현상 없앤다.
    $('a').on('click', function(){
        this.blur();
    })




    var toggleShowBtn = $('a[data-show]'),
        toggleCloseBtn = $('a[data-hide]');

    //엘레먼트 show
    toggleShowBtn.on('click', function(){
        showEl(event, $(this));
    })

    //버튼 클릭 시 엘리먼트 보여준다.
    var showEl = function (e, current) {

        var obj = current.data('show'),
            objEl = $('div.' + obj);

        objEl.show();

        if(objEl.hasClass('full')){
            $('.modal').show();
        }

    };


    //엘레먼트 close
    toggleCloseBtn.on('click', function(){
        hideEl(event, $(this));
    })

    //버튼 클릭 시 엘리먼트 숨긴다.
    var hideEl = function (e, current) {
        e.preventDefault();

        var obj = current.data('hide'),
            objEl = $('div.' + obj);

        objEl.hide();

        if(objEl.hasClass('full')){
            $('.modal').hide();
        }
    }





    //플레이스 홀더 ie8
    $('.placeHolder').on('keydown', function(){
        $(this).css('backgroundPosition', '-100%');
    })
    //폼테그에 값이 없을 때, 백그라운드 이미지 다시 보여준다
    $('.placeHolder').on('focusout', function(){
        if(!$(this).val()) {
            $(this).css('backgroundPosition', '10px center');
        }
    })

})
