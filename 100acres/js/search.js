function showbuy(){
    $("#pg").hide(1);
    $("#rent").hide(1);
    $("#prop_type_head").show(1);
	$("#prop_type_dropdown").show(1);
    $("#buy").slideDown('slow');
    $('#buy_button').css('background-color','#007dc1');
    $('#rent_button').css('background-color','#ededed');
    $('#pg_button').css('background-color','#ededed');
    $('#buy_button').css('color','black');
    $('#rent_button').css('color','#777777');
    $('#pg_button').css('color','#777777');
    $('#buy_button').css('text-shadow','0px 1px 0px #585858');
    $('#rent_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#pg_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#search_type').val('sell');
    $('#prop_type_dropdown').val("residential");
    $('#buy_commercial').hide('1');
	$('#buy_residential').show('1');
}

function showrent(){
    $("#pg").hide(1);
    $("#buy").hide(1);
    $("#prop_type_head").show(1);
	$("#prop_type_dropdown").show(1);
    $("#rent").slideDown('slow');
    $('#rent_button').css('background-color','#007dc1');
    $('#buy_button').css('background-color','#ededed');
    $('#pg_button').css('background-color','#ededed');
    $('#rent_button').css('color','black');
    $('#buy_button').css('color','#777777');
    $('#pg_button').css('color','#777777');
    $('#rent_button').css('text-shadow','0px 1px 0px #585858');
    $('#buy_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#pg_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#search_type').val('rent');
    $('#prop_type_dropdown').val("residential");
    $('#rent_commercial').hide('1');
	$('#rent_residential').show('1');
}

function showpg(){
	$("#prop_type_head").hide(1);
	$("#prop_type_dropdown").hide(1);
    $("#buy").hide(1);
    $("#rent").hide(1);
    $("#pg").slideDown('slow');
    $('#pg_button').css('background-color','#007dc1');
    $('#rent_button').css('background-color','#ededed');
    $('#buy_button').css('background-color','#ededed');
    $('#pg_button').css('color','black');
    $('#rent_button').css('color','#777777');
    $('#buy_button').css('color','#777777');
    $('#pg_button').css('text-shadow','0px 1px 0px #585858');
    $('#rent_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#buy_button').css('text-shadow','0px 1px 0px #ffffff');
    $('#search_type').val('pg');
}

function changeProperty(){
	if($('#search_type').val()=="sell"){
		if(($('#prop_type_dropdown').val()=="residential")){
			$('#buy_commercial').hide('1');
			$('#buy_residential').show('1');
		}
		else if(($('#prop_type_dropdown').val()=="commercial")){
			$('#buy_residential').hide('1');
			$('#buy_commercial').show('1');
		}
	}
	else if($('#search_type').val()=="rent"){
		if(($('#prop_type_dropdown').val()=="residential")){
			$('#rent_commercial').hide('1');
			$('#rent_residential').show('1');
		}
		else if(($('#prop_type_dropdown').val()=="commercial")){
			$('#rent_residential').hide('1');
			$('#rent_commercial').show('1');
		}
	}
}

function main_search_func(){
	var locality=$("#search_city").val();
	if(locality==""){
		alert("enter city first");
		return false;
	}else{
		
		return true;
	}
}
