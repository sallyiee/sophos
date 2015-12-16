var url = window.location.href;  
console.log(url);

if (url.toLowerCase().indexOf("success") >= 0){
	$('#success').removeClass('hide');
} else if (url.toLowerCase().indexOf("error") >= 0){
	$('#error').removeClass('hide');
}