$('#login_form').submit(function(){
	url=$(this).attr('action');
	email=$('#email').val();
	password=$('#password').val();
	$.post(url,{'email':email,'password':password},function(fb){
		if(fb.match('1'))
		{
			window.location.href=BASE_URL+'index.php/admin';
		}
		else if(fb.match(2))
		{
			window.location.href=BASE_URL+'index.php/student_account';
		}
		else 
		{
			alert('Username and password not Match')
		}
	});
	return false;
});