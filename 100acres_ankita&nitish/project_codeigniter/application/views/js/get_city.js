$(document).ready(function()
		{
            $("#city").autocomplete({source: 'http://www.100acres.com/index.php/welcome/fetch_city',minLength: 1,autoFocus: true});
		});