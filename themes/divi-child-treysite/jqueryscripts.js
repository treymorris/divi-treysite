
jQuery(document).ready(function(){
jQuery(window).scroll(function() {
var scroll = jQuery(window).scrollTop();
if (scroll >= 100) {
jQuery(".twd-header").addClass("twd-fixed-header");
}
else{
jQuery(".twd-header").removeClass("twd-fixed-header");
}
});
});
