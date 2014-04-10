document.getElementById('gallery').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};


$.fn.justNumber = function () {
  this.keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       return false;
    }
  });
}

$(function () {

	$('a[href*="#"]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
		    || location.hostname == this.hostname) {

		  var target = $('#' + this.hash.substr(1));
		  // target = target.length ? target : $('[name=' + this.hash.slice(1).substr(3) +']');
		  if (target.length) {
		    $('html,body').animate({
		      scrollTop: target.offset().top - 20
		    }, 1000);
		  }
		}
	});

	$('body').scrollspy({ target: '.navbar' })
})

$(window).load(function() {
  /**
   * Verifica se tem alguma HASH quando abre o site
   */
  var url_page = window.location.href;
  var hashs = url_page.split('#');
  if(hashs.length > 1)
  {
      var rest = hashs[1];
      var target = $('#' + rest);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top  - 20
        }, 1000);
        //return false;
        // _gaq.push(['_trackEvent', rest, 'loaded'])
      }
  }

});