$(document).ready(function(){

	if (/Mobi/.test(navigator.userAgent)) {
		// mobile!
		
		$(location).attr('href', 'mobile')
	}
});