function editProfile(){
	$('#password').hide('1');
	$('#age').hide('1');
	$('#mobile').hide('1');
	$('#address').hide('1');
	$('#edit').prop("disabled",true);
	$('#enterPassword').show('1');
	$('#enterAge').show('1');
	$('#enterMobile').show('1');
	$('#enterAddress').show('1');
	$('#save').show('1');
	$('#save').prop("disabled",false);
	$('#newPassword').val($('#pass_val').val());
	$('#newAge').val($('#age_val').val());
	$('#newMobile').val($('#mob_val').val());
	$('#newAddress').val($('#add_val').val());

}

function saveProfile(){
	var okay=1;
	if(($('#newMobile').val())==''){
		$('#mob_error').html("*Can't be left empty");
		okay=0;
	}
	else if(!(($('#newMobile').val()).match(/^[1-9]\d{9}$/g))){
		$('#mob_error').html("*Invalid number");
		okay=0;
	}
	else{
		$('#mob_error').html("");
	}
	if(!(($('#newAge').val()).match(/^\d{1,2}$/))){
		$('#age_error').html("*Invalid age");
		okay=0;
	}
	else{
		$('#age_error').html("");
	}
	if(($('#newPassword').val())==''){
		$('#pass_error').html("*Can't be left empty");
		okay=0;
	}
	else{
		$('#pass_error').html("");
	}
	if(okay==1){
		$('#enterPassword').hide('1');
		$('#enterAge').hide('1');
		$('#enterMobile').hide('1');
		$('#enterAddress').hide('1');
		$('#password').show('1');
		$('#age').show('1');
		$('#mobile').show('1');
		$('#address').show('1');
		$('#pass_val').val($('#newPassword').val());
		$('#age_val').val($('#newAge').val());
		$('#mob_val').val($('#newMobile').val());
		$('#add_val').val($('#newAddress').val());
		$('#edit').prop("disabled",false);
		$('#save').prop("disabled",true);
		$.post("http://www.100acres.com/index.php/welcome/editProfile",{
			password:$('#newPassword').val(),
			age:$('#newAge').val(),
			mobile:$('#newMobile').val(),
			address:$('#newAddress').val()
		},function(data, status){
			alert("Pofile Updated");
	});
	}		
}