
function getnextitems(){
	var offset=parseFloat(document.getElementById("offset").value);
	//var offset=document.getElementById("offset").value.valueOf();
	var limit=parseFloat(document.getElementById("limit").value);
	//var limit=document.getElementById("offset").value.valueOf();
	var arr=document.URL.split('?');
	var newurl=arr[0]+'/'+'getitems'+'/'+offset+'/'+limit+'?'+arr[1];
	//var url=window.location.href;

	document.getElementById("rough").innerHTML=newurl;
	$.ajax({url:newurl,success:handledata});
}

function handledata(result){
	if(result==""){
		document.getElementById('button').innerHTML="No more results to display";
		return;
	}
	document.getElementById('searchresultslist').innerHTML=document.getElementById('searchresultslist').innerHTML+result;
	var total=parseFloat(document.getElementById("offset").value)+parseFloat(document.getElementById("limit").value);
	document.getElementById("offset").value=total;
	console.log(total);
}