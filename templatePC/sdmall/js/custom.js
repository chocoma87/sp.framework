



$(document).ready(function() {

    //롤링 베너
    var notice_ht = $(".rollingBanner-list li").height();

	$(".rollingBanner-list").height($(".rollingBanner-list li").height()*$(".rollingBanner-list li").size())
	$(".rollingBanner-list li:last").prependTo(".rollingBanner-list");
	$(".rollingBanner-list").css({
		"top":-notice_ht
	});

	$('.rollingBanner-control a').click(function(e){
		var banner$ = $(".rollingBanner-list");
		if(banner$.is(':animated')){
			return false;
		}

		if($(this).hasClass('down')){
			banner$.stop().animate({
				top : parseInt($(".rollingBanner-list").css("top"))-notice_ht+"px"
			},500,function(){
				$(".rollingBanner-list li:first").appendTo(".rollingBanner-list");
				$(".rollingBanner-list").css("top",-notice_ht)
			})
		}else{
			banner$.stop().animate({
				top : parseInt($(".rollingBanner-list").css("top"))+notice_ht+"px"
			},500,function(){
				$(".rollingBanner-list li:last").prependTo(".rollingBanner-list");
				$(".rollingBanner-list").css("top",-notice_ht)
			});
		}
	});

	var timer = window.setInterval(noticeDownClick ,5000);

	$(".importantNotice").bind("mouseenter",function(){
		window.clearInterval(timer)
	}).bind("mouseleave",function(){
		timer = window.setInterval(noticeDownClick,5000);
	});

	function noticeDownClick(){
		$(".rollingBanner-control .down").trigger("click");
	}






	//인풋 텍스트 플레이스홀더
	$('.placeHolder').on('keydown', function(){
		$(this).css('background-image', 'none');
	})


	//자주묻는 질문 텝메뉴
	$('.spTab').sptab();


	//자주묻는 질문 아코디언
	$('.csTable a').on('click', function(e){
		e.preventDefault();

		$(this).closest('tr').next('tr.answer').toggle();
	})


    //아이템 수량 변경
    $('.itemCount-increase').on('click',function(e){
        e.preventDefault();

        var $qty = $(this).closest('.itemCount').find('input.inputText'),
            currentVal = parseInt($qty.val());

        if($(this).hasClass('plus')){
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        }
        else {
            if (!isNaN(currentVal) && currentVal > 0) {
                $qty.val(currentVal - 1);
            }
        }
    });
});
