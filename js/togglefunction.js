var state='';
		// function toggle_buy() {
		//     var div = document.getElementById('panel');
		//     console.log(div.style.display=='');
		//     if (div.style.display == '' || div.style.display == 'none')
		//     {
		//            	div.style.display = 'block';
		//            	document.searchform.sellorrent.value = 'Sell';
		//         	state='buy';
		//      }
		//     else
		//     {
		//     	if(state=='buy') 
		//     	{
		//         	div.style.display = 'none';
		//         }	
		//     }    
		//  };

	 //    function toggle_rent(){
	 //    	var div = document.getElementById('panel');
	 //    	if (div.style.display == '' || div.style.display == 'none') {
		//       	   	div.style.display = 'block';
		//       	   	document.searchform.sellorrent.value = 'Rent';
		//         	state='rent';
		      
		//     }
		//     else{ 
		//     	if(state=='rent'){
		//        		div.style.display = 'none';
		//        	}		
		//     }
	 	
	 //    };
	 function toggle(state1){
	    	var div = document.getElementById('panel');
	    	if (div.style.display == '' || div.style.display == 'none') {
		      	   	div.style.display = 'block';
		      	   	document.searchform.sellorrent.value = state1;
		        	state=state1;
		      
		    }
		    else{ 
		    	if(state==state1){
		       		div.style.display = 'none';
		       	}		
		    }
	 	
	    };