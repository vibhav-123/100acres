

function get_contact(contact_id,button){
	alert(contact_id+"=="+button);
	$("#"+contact_id).show(1);
	$("#"+button).css('background-color','white');
}

function cancel(contact_id){
	$("#"+contact_id).hide(1);
	$("#"+"b"+contact_id).css('background-color','#FFBF00');
}

function validatecontact(contact_id,property_search_type,search_type){
	var okay=1;
	alert(property_search_type+"=="+search_type);
	var name=$("#"+"cname"+contact_id).val();
	var email=$("#"+"cemail"+contact_id).val();
	var phone=$("#"+"cphone"+contact_id).val();
	if(name=='' || !(name.match(/^[a-zA-Z ]*$/)))
	{
		$("#"+"cname"+contact_id).css('border-color','red');
		okay=0;
	}
	else
	{
		$("#"+"cname"+contact_id).css('border-color','gray');
	}
	if(email=='' || !(email.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i)))
	{
		$("#"+"cemail"+contact_id).css('border-color','red');
		okay=0;
	}
	else
	{
		$("#"+"cemail"+contact_id).css('border-color','gray');
	}
	if(phone=='' || !(phone.match(/^[0-9]\d{9}$/g)))
	{
		$("#"+"cphone"+contact_id).css('border-color','red');
		okay=0;
	}
	else
	{
		$("#"+"cphone"+contact_id).css('border-color','gray');
	}
	
	if(okay==1){
		alert("yoyo");
		$("#"+contact_id).hide(1);
		$("#"+"info"+contact_id).show(1);
		$.post("http://www.100acres.com/index.php/welcome/getSeller",{
			pid:contact_id,
			ptype1:property_search_type,
			ptype2:search_type,
			name:name,
			email:email,
			phone:phone
		},function(data, status){
			var seller_info=data.split(" ");
			$("#"+"infoname"+contact_id).html(seller_info[0]);
			$("#"+"infoemail"+contact_id).html(seller_info[1]);
			$("#"+"infophone"+contact_id).html(seller_info[2]);
			
		});
	}
	
}

function closeinfo(contact_id){
	$("#"+"info"+contact_id).hide(1);
	$("#"+"b"+contact_id).css('background-color','#FFBF00');
}


function show_property_details(pid,sptype,stype){
	
	var search_property_type= sptype;
	
	if(sptype=="pg"){
		window.location.assign("http://www.100acres.com/index.php/welcome/showDetails_pg/"+pid);
	}else if(stype=="residential"){
		window.location.assign("http://www.100acres.com/index.php/welcome/showDetails_residential/"+pid);
	}else if(stype=="commercial"){
		window.location.assign("http://www.100acres.com/index.php/welcome/showDetails_commercial/"+pid);
	}
}