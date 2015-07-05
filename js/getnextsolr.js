function getnextsolritems(){
	var start=parseFloat(document.getElementById("start").value);
	var arr=document.URL.split('?');
	var newurl=arr[0]+'/'+start+'?'+arr[1];
	console.log(newurl);
	$.ajax({url:newurl,success:handledata});

}

function handledata(result){
	if(result==""){
		document.getElementById('button').innerHTML="No more results to display";
		return;
	}
	document.getElementById('searchresultslist').innerHTML+=result;
	var total=parseFloat(document.getElementById("start").value)+4;
	document.getElementById("start").value=total;
	console.log(total);
}
function getnewurl(){
	var sortby=document.getElementById('sortby');
	sortby=sortby.options[sortby.selectedIndex].value;
}