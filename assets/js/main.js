$(document).ready(function(){


$('#editor').wysihtml5();

if(Modernizr.touch){
	$('[data-ajax-link]').fastClick(dataAjaxLink);
	$('[data-require-confirm]').fastClick(dataRequireConfirm);
}else{
	$('[data-ajax-link]').click(dataAjaxLink);
	$('[data-require-confirm]').click(dataRequireConfirm);
}



function dataAjaxLink(){
	event.preventDefault();

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
}

function dataRequireConfirm(){ 
	var text = $(this).data('confirm-text');
    if(confirm(text)){
		// Proceed with the default action
    }
	else {
		event.preventDefault();
	}
}




});