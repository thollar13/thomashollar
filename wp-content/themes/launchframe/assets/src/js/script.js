(function($, window){


	var wb = {
		background_video : {
		  test : function () {
		    return $('[data-bgvideo-mpfour]').length;
		  },
		  run : function () {
		    var wid = $(window).width();
		    if ( wid > 900) {
		      $('.full-height').css({
		        'height' : '100vh',
		        'min-height' : '400px'
		      });
		      $('[data-bgvideo-mpfour]').each(function(i,e) {
		        var mp4_url = $(e).attr('data-bgvideo-mpfour');
		        var webm_url = $(e).attr('data-bgvideo-webm');
		        $(e).videoBG({
		            mp4:mp4_url,
		            webm:mp4_url,
		            poster:'',
		            scale:true,
		            zIndex:0
		        });
		      });
		    } else {
		      // $('.full-image').css('background-image', 'url(http://soworldwide.org/wp-content/themes/launchframe-3/assets/img/placeholder-img.jpg)');
		    }
		  }
		}
	};

	for (var key in wb){
		if (wb[key].test()){
			wb[key].run();
		}
	}

}(jQuery, window));