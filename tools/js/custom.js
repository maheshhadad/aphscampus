$('#add_category').submit(function(){
	category=$('#category').val();
	
	url=$(this).attr('action');
	$.post(url,{'name':category},function(fb){
		if(fb.match('1'))
		{
			alert('Category Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false;
});

$('#update_sub_cat').submit(function(){
	name=$('#name').val();
	url=$(this).attr('action');
	$.post(url,{'name':name},function(fb){
		if(fb.match('1'))
		{
			alert('Category Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+"index.php/school/category";
			},2000);
		}
		else 
		{
			alert('Category Not Updated')
		}
	});
	return false;
});


$('#add_class_form').submit(function(){
	name=$('#name').val();
	cat=$('#cat').val();
	url=$(this).attr('action');
	$.post(url,{'name':name,'cat':cat},function(fb){
		if(fb.match('1'))
		{
			alert('Class Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false;
});


$('#update_class').submit(function(){
	name=$('#name').val();
	cat=$('#cat').val();
	url=$(this).attr('action');
	$.post(url,{'name':name,'cat':cat},function(fb){
		if(fb.match('1'))
		{
			alert('Class Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/school/classes';
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false;
});



$('#add_course_form').submit(function(){
	name=$('#name').val();
	duration=$('#course_duration').val();
	fees=$('#course_fees').val();
	started=$('#course_started').val();
	url=$(this).attr('action');
	$.post(url,{'name':name,'duration':duration,'fees':fees,'stared':started},function(fb){
		if(fb.match('1'))
		{
			alert('Course Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false;
});


$('#update_course').submit(function(){
	name=$('#name').val();
	duration=$('#course_duration').val();
	fees=$('#course_fees').val();
	started=$('#course_started').val();
	url=$(this).attr('action');
	$.post(url,{'name':name,'duration':duration,'fees':fees,'stared':started},function(fb){
		if(fb.match('1'))
		{
			alert('Course Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/school/course'
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false;
});

$('#add_student_form').submit(function(){
	data={'name':$('#sname').val(), 
		'fname':$('#fname').val(),
		'category':$('#category').val(),
		'class':$('#class').val(),
		'dob':$('#dob').val(),
		'join_date':$('#join_date').val(),
		'email':$('#email_user').val(),
};
url=$(this).attr('action');
$.post(url,data,function(fb){
	if(fb.match('1'))
	{
		alert('Student Successfully Registered');
		setTimeout(function(){
			location.reload();
		},2000);
	}
	else 
	{
		alert('Student Not Registered')
	}

});
console.log(data);
	return false;
});

$('#edit_student_form').submit(function(){
	url=$(this).attr('action');
	data={'name':$('#sname').val(), 
		'fname':$('#fname').val(),
		'category':$('#category').val(),
		'class':$('#class').val(),
		'dob':$('#dob').val(),
		'join_date':$('#join_date').val(),
		'email':$('#email_user').val(),
};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Student Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+"index.php/student/student_registration";
			});
		}
		else 
		{
			alert('Student Not Updated');
		}
	})
	return false;
});

$('#add_Staff_form').submit(function(){
	url=$(this).attr('action');
	data={
		'name':$('#name').val(),
		'fname':$('#fname').val(),
		'email':$('#email').val(),
		'mobile_no':$('#mobile_no').val(),
		'dob':$('#dob').val(),
		'join_date':$('#join_date').val(),
		'exp':$('#exp').val(),
		'payment':$('#payment').val(),
		'staff_other_information':$('#staff_other_information').val(),
	};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Staff Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert('Staff Not Added');
		}
	});
	return false;
});
$('#edit_Staff_form').submit(function(){
	url=$(this).attr('action');
	data={
		'name':$('#name').val(),
		'fname':$('#fname').val(),
		'email':$('#email').val(),
		'mobile_no':$('#mobile_no').val(),
		'dob':$('#dob').val(),
		'join_date':$('#join_date').val(),
		'exp':$('#exp').val(),
		'payment':$('#payment').val(),
		'staff_other_information':$('#staff_other_information').val(),
	};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Staff Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/staff/manage_staff';
			},2000)
		}
		else 
		{
			alert('Staff not Updated')
		}
	})
	return false;
});
$('#add_Attendance_form').submit(function(){
	var url=$(this).attr('action');
	var status=$('#status').val();
	var date=$('#date').val();
	var remarks=$('#remarks').val();
	var data={'status':status,'date':date,'remarks':remarks};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Attendance Successfully Added');
			setTimeout(function(){
				location.reload();
			},1000);
		}
		else 
		{
			alert('Attendance Not Added');
		}
	})
	return false;
});
$('#edit_Attendance_form').submit(function(){
	url=$(this).attr('action');
	var status=$('#status').val();
	var date=$('#date').val();
	var remarks=$('#remarks').val();
	var student_id=$('#student_id').val();
	var data={'status':status,'date':date,'remarks':remarks};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Attendance Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/attendance/add_attendance/'+student_id;
			},1000);
		}
		else 
		{
			alert('Attendance Not Updated');
		}
	})
	return false;
});
$(document).on('change','#exam_category',function(){
	data=$(this).val();
	$.post(BASE_URL+'index.php/exam/find_class',{'cat':data},function(fb){
		$('#class').html(fb);
	})
});
$('#add_exam_form').submit(function(){
	url=$(this).attr('action');
	title=$('#title').val();
	start_date=$('#start_date').val();
	exam_category=$('#exam_category').val();
	class1=$('#class').val();
	data={'title':title,'start_date':start_date,'category':exam_category,'class':class1};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Exam Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert('Exam Not Added');
		}
	})
	return false;
});
$('#update_exam_form').submit(function(){
	url=$(this).attr('action');
	title=$('#title').val();
	start_date=$('#start_date').val();
	exam_category=$('#exam_category').val();
	class1=$('#class').val();
	data={'title':title,'start_date':start_date,'category':exam_category,'class':class1};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Exam Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/exam/add_exam';
			},2000);
		}
		else 
		{
			alert('Exam Not Updated');
		}
	})
	return false;
});
$('#add_time_table_form').submit(function(){
	url=$(this).attr('action');
	$.ajax({
		type:'POST',
		url:url,
		data:new FormData($(this)[0]),
		contentType:false,
		processData:false,
		success:function(fb){
			if(fb.match('1'))
			{
				alert('Time Table Successfully Upload');

				setTimeout(function(){
					location.reload();
				},2000);
			}
			else if(fb.match('2'))
				alert('Only JPG And PNG PDF File Are Allowed')
			else 
				alert('Time Table Not Upload');	
		}
	});
	return false;
});
$('#edit_time_table_form').submit(function(){
	url=$(this).attr('action');
	$.ajax({
		type:'POST',
		url:url,
		data:new FormData($(this)[0]),
		contentType:false,
		processData:false,
		success:function(fb){
			console.log(fb)
			if(fb=='1')
			{
				alert('Time Table Successfully Upload');

				setTimeout(function(){
					window.location.href=BASE_URL+'index.php/exam/add_time_table';
				},2000);
			}
			else if(fb.match('2'))
				alert('Only JPG And PNG PDF File Are Allowed')
			else 
				alert('Time Table Not Upload');
		}
	});
	return false;
});
$(document).on('change','#select_student',function(){
	id=$('#select_student').val();
	class1=$('#st_'+id).attr('data-val');
	$.post(BASE_URL+'index.php/result/find_exams',{'class':class1},function(fb){
		$('#exam').html(fb);
	})
});
$('#add_result_form').submit(function(){
	url=$(this).attr('action');
	data={'student_id':$('#select_student').val(),
		  'exam_name':$('#exam').val(),
		  'result':$('#result').val(),

	};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Result Successfully Added');
			setTimeout(function(){
				location.reload();
			},200);
		}
		else 
		{
			alert('Result Not Added')
		}
	})
	return false;
});
$('#edit_result_form').submit(function(){
	url=$(this).attr('action');
	data={'student_id':$('#select_student').val(),
		  'exam_name':$('#exam').val(),
		  'result':$('#result').val(),

	};
	$.post(url,data,function(fb){
		if(fb.match('1'))
		{
			alert('Result Successfully Updated');
			setTimeout(function(){
				window.location.href=BASE_URL+'index.php/result';
			},200);
		}
		else 
		{
			alert('Result Not Updated')
		}
	})
	return false;
});
$(document).on('change','.change_status',function(){
	tbl=$(this).attr('data-table');
	id=$(this).attr('data-id');
	data=$("input[name='status_"+id+"']:checked").val();

	if(data!=1)
		data=0;
	
	$.post(BASE_URL+'index.php/admin/change_status/'+tbl+'/'+id,{'status':data},function(fb){
		if(fb.match('1'))
		{
			alert('Status Successfully Changed');
		}
		else 
		{
			alert('Status Not Changed')
		}
	})
});