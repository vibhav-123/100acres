function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
    }

    
   function changetextbox()
    {
    if (document.getElementById("crore").value === "99+") {
    	document.getElementById('textboxid').value=parseInt("0");	

        document.getElementById("textboxid").disabled='';
        document.getElementById('lacs').value=0;
        document.getElementById("lacs").disabled=true;
        document.getElementById("thousands").disabled=true;
    }
     else 
    {
    	 if(document.getElementById("lacs").disabled)
    	 {document.getElementById('textboxid').value=0;}

         document.getElementById("textboxid").disabled='true';
         document.getElementById("lacs").disabled=false;
         document.getElementById("thousands").disabled=false;
    }
    }

  function getSelectedValue(theValue){

    if(!document.getElementById('textboxid').value)
    document.getElementById('textboxid').value=theValue*10000000;
    else
    {
    lacsdigit=Math.floor(parseInt(document.getElementById('textboxid').value)/100000)%100;
    thousanddigit=Math.floor(parseInt(document.getElementById('textboxid').value)/1000)%100;
    
    document.getElementById('textboxid').value=(theValue*10000000)+(lacsdigit*100000)+(thousanddigit*1000); 
    }
  }
  function getSelectedValuelacs(theValue){
    //document.getElementById('pasteTheValue').innerHTML=theValue;    
    if(!document.getElementById('textboxid').value)
    document.getElementById('textboxid').value=theValue*100000;
    else
    {
    croredigit=Math.floor(parseInt(document.getElementById('textboxid').value)/10000000)%100;
    thousanddigit=Math.floor(parseInt(document.getElementById('textboxid').value)/1000)%100;
    document.getElementById('textboxid').value=(croredigit*10000000)+(theValue*100000)+(thousanddigit*1000); 
    }
  }
  function getSelectedValuethousands(theValue){
    //document.getElementById('pasteTheValue').innerHTML=theValue;
    if(!document.getElementById('textboxid').value)
    document.getElementById('textboxid').value=theValue*1000;
    else
    {
     croredigit=Math.floor(parseInt(document.getElementById('textboxid').value)/10000000)%100;
    lacsdigit=Math.floor(parseInt(document.getElementById('textboxid').value)/100000)%100;
    document.getElementById('textboxid').value=(croredigit*10000000)+(lacsdigit*100000)+(theValue*1000); 
    }
    
  }