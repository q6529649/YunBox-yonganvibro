//scroll js
jQuery().waypoint && jQuery("body").imagesLoaded(function () {
         jQuery(".animate_afc, .animate_afl, .animate_afr, .animate_aft, .animate_afb, .animate_wfc, .animate_hfc, .animate_rfc, .animate_rfl, .animate_rfr").waypoint(function () {
             if (!jQuery(this).hasClass("animate_start")) {
                var e = jQuery(this);
                 setTimeout(function () {
                     e.addClass("animate_start")
                 }, 20)
             }
        }, {
             offset: "85%",
             triggerOnce: !0
         })
     });
	// photobos js
	jQuery('.kadima_photo_gallery').photobox('.photobox_a');
	// or with a fancier selector and some settings, and a callback:
	jQuery('.kadima_photo_gallery').photobox('.photobox_a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...');
	}
	//
	var $nav=jQuery('.prolist');
	$nav.children('li').mouseenter(function(){
		jQuery(this).addClass("cur").siblings().removeClass("cur");
	})
	$nav.children('li').eq(0).mouseenter();

    jQuery('.toggle-search').click(function(){
         jQuery('.toggle-search').toggleClass('active');
         jQuery('.search-expand').fadeToggle(250);
         setTimeout(function(){
             jQuery('.search-expand input').focus();
         }, 300);
     });
