function validateForm() {
 	alert("Hello");
 	var name_regex= /^[A-Za-z0-9 ]{3,20}$/;
 	if( !(document.posting_form.address.value == ''))
     {
        alert( "Please enter a valid name" );
        document.posting_form.address.focus();
        return false;
     }
    
}
