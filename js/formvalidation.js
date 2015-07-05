function validateForm() {
 	//var name_regex= /^[A-Za-z0-9 ]{3,20}$/;
 	
 	var city_error = validate_city();
 	alert('reached here');
 	var owner_error = validate_owner();	
 	
 	var intention_error = validate_intention();
 	
 	var address_error = validate_address();
 	var bed_error = validate_bed();
 	var price_error = validate_price();
 	if(owner_error && intention_error && city_error && address_error && bed_error && price_error){
 		document.posting_form.submit();
 		return true;
 	}
	return false;
}


function validate_owner(){
	alert('Owner');
	var len=document.posting_form.owner_type.length;
	var owner = '';
	var i;
	for(i=0;i<len;i++){
		if(document.posting_form.owner_type[i].checked){
			owner=document.posting_form.owner_type[i].value;
			break;
		}
	}
	
	if(owner==''){
		alert('Please select an owner type');
		document.getElementById("owner_error").innerHTML='Please select an owner type';
		return false;	
	}
	else{
		document.getElementById("owner_error").innerHTML='';
		return true;
	}
}

function validate_intention(){
	alert('intention');
	var intention = '';
	var len=document.posting_form.sellorrent.length;
	var i;
	for(i=0;i<len;i++){
		if(document.posting_form.sellorrent[i].checked){
			intention=document.posting_form.sellorrent[i].value;
			break;
		}
	}
	if(intention==''){
		alert('Please select an option');
		document.getElementById("intention_error").innerHTML='Please select an option';
		return false;	
	}
	else{
		document.getElementById("intention_error").innerHTML='';
		return true;
	}
}

function validate_city(){
	alert('city');
	var city = '';
	var len=document.posting_form.select_city.length;
	alert(len);
	var i;
	for(i=0;i<len;i++){
		if(document.posting_form.select_city[i].selected){
			city=document.posting_form.select_city[i].value;
			break;
		}
	}
	if(city=="None"){
		document.getElementById("city_error").innerHTML='Please select a city';
		alert('cityFalse');
		return false;	
	}
	else{
		document.getElementById("city_error").innerHTML='';
		alert('cityTrue');
		return true;
	}

}

function validate_address(){
	var address=document.posting_form.address.value;
	var address_regex=/^[a-zA-Z\s\d\/]*\d[a-zA-Z\s\d\/]*$/;
	if(address_regex.test(address)){
		document.getElementById('address_error').innerHTML='';
		return true;
	}
	else{
		document.getElementById('address_error').innerHTML='Please write a valid address';
		return false;	
	}
}

function validate_bed(){
	var bed = '';
	var len=document.posting_form.select_value.length;
	var i;
	for(i=0;i<len;i++){
		if(document.posting_form.select_value[i].selected){
			bed=document.posting_form.select_value[i].value;
			break;
		}
	}
	if(bed==''){
		document.getElementById("bed_error").innerHTML='Please select no. of beds';
		return false;	
	}
	else{
		document.getElementById("bed_error").innerHTML='';
		return true;
	}

}

function validate_price(){
	var price=document.posting_form.expected_value.value;
	var price_regex=/[(0-9)+.?(0-9)*]+/;
	if(price_regex.test(price)){
		document.getElementById('price_error').innerHTML='';
		return true;
	}
	else{
		document.getElementById('price_error').innerHTML='Please enter the price';
		return false;	
	}
}