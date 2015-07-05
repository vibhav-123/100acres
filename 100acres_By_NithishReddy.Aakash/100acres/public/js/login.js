function myFunction() 
{ 
	var x=document.getElementById('uname').value;
        if (x == '')
        {
             document.getElementById('uname1').style.display = 'block';
        }
        else
        {
             document.getElementById('uname1').style.display = 'none';
        }
}
    
    function ValidateEmail()  
    {   
    
        var x1=document.getElementById('eid').value;
        if (x1 == '')
        {
             document.getElementById('email2').style.display = 'block';
        }
        else
        {
             document.getElementById('email2').style.display = 'none';
        
        
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
            var x2=document.getElementById('eid');
            
            if (!filter.test(x2.value))
            {
            
                document.getElementById('email1').style.display = 'block';
            }  
            else  
            {
                document.getElementById('email1').style.display = 'none';
            }       
        }
    } 

    
    function Validatepsw() 
    { 
        var x=document.getElementById('psw').value
        
        if (x == '')
        {
             document.getElementById('psw1').style.display = 'block';
        }
        else
        {
             document.getElementById('psw1').style.display = 'none';
        }
    }
    
    function Validatecpsw() 
    { 
        var x=document.getElementById('cpsw').value
        
        if (x == '')
        {
             document.getElementById('cpsw1').style.display = 'block';
        }
        else
        {
             document.getElementById('cpsw1').style.display = 'none';
             var x1=document.getElementById('psw').value
             
             if(x1==x)
             {
                
             }
             else
             {document.getElementById('cpsw1').style.display = 'block';}
        }
    }
    
    function Validatemob() 
    { 
        var x=document.getElementById('mno').value
        
        if (x == '')
        {
             document.getElementById('mno1').style.display = 'block';
        }
        else
        {
            var phoneno = /^\d{10}$/;  
            if(phoneno.test(x)==false)  
            {   
                document.getElementById('mno1').style.display = 'block';
            } 
            else
            {
                document.getElementById('mno1').style.display = 'none';
            }
             
            
        }
    }

