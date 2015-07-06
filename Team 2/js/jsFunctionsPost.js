$down = 0;
$downBuySearch = 0;
$downRentSearch = 0;
$downPGSearch = 0;
$mode = "buy";


function showProfileOptions() {

	if ($down == 0) {
		$("#dropdown").slideDown(150);
		$down = 1;

	} else {
		$("#dropdown").slideUp(150);
		$down = 0;
	}

}


function post_rent()
{
    $("#div_Rent").slideDown(150);
    $("#div_Sell").hide(1);
    $("#div_PG").hide(1);
	
	$("#buttonPostSell").css({"color": "#FFFFFF"});
	$("#buttonPostPG").css({"box-shadow": "none" ,"border-color":"none"});
	$("#buttonPostRent").css({"background-color":"black", "opacity":"0.7"});
	$("#buttonPostRent").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
}

function cancel_post()
{
    $("#div_Rent").hide(1);
    $("#div_Sell").hide(1);
    $("#div_PG").hide(1);
}


function post_sell()
{
    $("#div_Rent").hide();
    $("#div_Sell").slideDown(149);
    $("#div_PG").hide();
    $("#buttonPostSell").css({"background-color":"black", "opacity":"0.7"});
	$("#buttonPostSell").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});   
}

function post_PG()
{
    $("#div_Rent").hide();
    $("#div_Sell").hide();
    $("#div_PG").slideDown(149);
 	
 	$("#buttonPostPG").css({"background-color":"black", "opacity":"0.7"});
	$("#buttonPostPG").css({"box-shadow": "rgba(0,0,0, 0.1) 0px 0px 8px","border-color":"#E5E5E5"});
}

