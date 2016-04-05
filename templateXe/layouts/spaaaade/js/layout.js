


//반응형 웹 모듈
var responsive = (function($){

	"use strict";

	//https://www.jonathanfielding.com/managing-responsive-design-breakpointstates-in-javascript
	var stateManager = (function () {
		var state = null;

		var setState = function () {
			if ($('body').width() < 980) {
				if (state !== "mobile") {
					state = "mobile";
					displayMobile();
				}
			}
			else {
				if (state !== "desktop") {
					state = "desktop";

					displayDesktop();
				}
			}
		};

		var resizePage = function () {
			setState();

			if (state === "mobile") {
				resizeMobile();
			}
			else {
				resizeDesktop();
			}
		};

		var displayMobile = function () {
			//When mobile state is shown this fires


		};

		var displayDesktop = function () {
			//When desktop state is shown this fires
		};

		var resizeMobile = function () {
			//When mobile state is resized this fires
		};

		var resizeDesktop = function () {
			//When desktop state is resized this fires
		};

		return {
			init: function () {
				setState();
				$(window).on('resize', resizePage);
			},
			getState: function () {
				return state;
			}
		};

	} ());


	return stateManager

}(jQuery));











 
