<html>
<head>
  <script>

  </script>
</head>
<body>
  <input type="button" value="Login With Facebook" onclick="myfunction()"></input>
</body>
</html>

function loadXMLDoc(url)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","/frontend_dev.php/index",false);
xmlhttp.send();
document.getElementById("err_name").innerHTML=xmlhttp.responseText;
}