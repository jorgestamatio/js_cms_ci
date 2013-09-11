$(document).ready(function(){


$('[data-ajax-link]').click(function(e){
	e.preventDefault();

	var url = $(this).attr('href');
	var data = $(this).data('parms');
	var div = $(this).data('div');
	var insert = $(this).data('insert');

	if(!div || div ==''){
		div = '#main-container';
	}

	$.ajax({
		url: url,
		type: 'GET',
		success: function(data){
			if(insert == 'append'){
				$(div).append(data);
			}
			else{
				$(div).html(data);
			}
		}

	})
});


});