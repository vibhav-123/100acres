function get_contact(a){$("#"+a).show(1);$("#b").css("background-color","white")}function cancel(a){$("#"+a).hide(1);$("#b").css("background-color","#FFBF00")}function validatecontact(f,d){var e=1;var c=$("#cname"+f).val();var b=$("#cemail"+f).val();var a=$("#cphone"+f).val();if(c==""||!(c.match(/^[a-zA-Z ]*$/))){$("#cname"+f).css("border-color","red");e=0}else{$("#cname"+f).css("border-color","gray")}if(b==""||!(b.match(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i))){$("#cemail"+f).css("border-color","red");e=0}else{$("#cemail"+f).css("border-color","gray")}if(a==""||!(a.match(/^[0-9]\d{9}$/g))){$("#cphone"+f).css("border-color","red");e=0}else{$("#cphone"+f).css("border-color","gray")}if(e==1){var g;if(d=="pg"){g="pg"}else{g="rent"}$("#"+f).hide(1);$("#info"+f).show(1);$.post("http://www.100acres.com/index.php/welcome/getSeller",{pid:f,ptype1:d,ptype2:g,name:c,email:b,phone:a},function(j,h){var i=j.split(";");$("#infoname"+f).html(i[0]);$("#infoemail"+f).html(i[1]);$("#infophone"+f).html(i[2])})}}function closeinfo(a){$("#info"+a).hide(1);$("#b").css("background-color","#FFBF00")};