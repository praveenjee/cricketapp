$(document).ready(function () {
	window._token = $('meta[name="csrf-token"]').attr('content');
	
});

$(document).on("click", ".close", function(){
	$(this).parent().empty().remove();
});