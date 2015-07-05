function removeProp(pid,prop_type)
{
		
		$.post("http://www.100acres.com/index.php/welcome/deletePosting",{pid:pid,ptype:prop_type},function(data, status){
			
		});	
		window.location.assign("http://www.100acres.com/index.php/welcome/gotoPostings");
}