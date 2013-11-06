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




//////////////// filedrop
	var dropzone = $('#dropzone'),
			message = $('.message', dropzone),
			upload_url = $('input[name="upload_url"]').val();
		
		dropzone.filedrop({
			// The name of the $_FILES entry:
			maxfiles: 5,
	    maxfilesize: 20,
			url: upload_url,
			paramname: 'userfile',          // POST parameter name used on serverside to reference file, can also be a function taking the filename and returning the paramname
    	withCredentials: false,          // make a cross-origin request with cookies
    	data: {
      	  csrf_test_name: $('input[name="csrf_test_name"]').val(),
      	  // post_id: $('input[name="post_id"]').val(),          // send POST variables
    	},

			uploadFinished:function(i,file,response){
				if(response.status === 'success'){
					console.log(response.status);
					console.log(response.msg);
					$.data(file).addClass('done');
				}else{
					console.log(response.status);
					console.log(response.msg.error);
				}
				
				// location.reload();
				// response is the JSON object that post_file.php returns
			},

	    	error: function(err, file) {
				switch(err) {
					case 'BrowserNotSupported':
						showMessage('Your browser does not support HTML5 file uploads!');
						break;
					case 'TooManyFiles':
						alert('Too many files! Please select 5 at most!');
						break;
					case 'FileTooLarge':
						alert(file.name+' is too large! Please upload files up to 2mb (configurable).');
						break;
					default:
						break;
				}
			},

			// Called before each upload is started
			beforeEach: function(file){
				if(!file.type.match(/^image\//)){
					alert('Only images are allowed!');

					// Returning false will cause the
					// file to be rejected
					return false;
				}
			},
			uploadStarted:function(i, file, len){
				createImage(file);
			},

			progressUpdated: function(i, file, progress) {
				$.data(file).find('.progress').width(progress);
			}

		});

		var template ='<div class="preview">'+
										'<span class="imageHolder">'+
										'<img />'+
										'<span class="uploaded glyphicon glyphicon-ok"></span>'+
										'</span>'+
										'<div class="progressHolder">'+
											'<div class="progress"></div>'+
										'</div>'+
									'</div>'; 


		function createImage(file){
			var preview = $(template), 
					image = $('img', preview);

			var reader = new FileReader();

			image.width = 100;
			image.height = 100;

			reader.onload = function(e){
				// e.target.result holds the DataURL which
				// can be used as a source of the image:
				image.attr('src',e.target.result);

			};

			// Reading the file as a DataURL. When finished,
			// this will trigger the onload function above:
			reader.readAsDataURL(file);

			message.hide();
			preview.appendTo(dropzone);

			// Associating a preview container
			// with the file, using jQuery's $.data():

			$.data(file,preview);
		}

		function showMessage(msg){
			message.html(msg);
		}


//////////////// filedrop




});
