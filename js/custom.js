

// FUNCTIONS TO SHORTEN GET ELEMENT BY ID
function _(x){
	return document.getElementById(x);
}
// FUNCTION TO EMPTY ELEMENTS
function emptyElement(x){
	_(x).innerHTML = "";
}
// AJAX MODULE
function ajaxObj(meth,url){
	var x = new XMLHttpRequest();
	x.open(meth, url, true);
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}

function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
		return true;
	}
}

function register(){
	var f = _("firstname").value;
	var l = _("lastname").value;
	var e = _("email").value;
	var p = _("password").value;
	var c = _("confirm").value;
	var g = _("gender").value;
	var a = _("about").value;
	
	if(f == ''){
		_("firstname_span").innerHTML = "<b style='color:red;'>FIRST NAME REQUIRED...</b>";
		return false;
	}else if(l == ''){
		_("lastname_span").innerHTML = "<b style='color:red;'>LAST NAME REQUIRED...</b>";
		return false;
	}else if(e == ''){
		_("email_span").innerHTML = "<b style='color:red;'>EMAIL FIELD REQUIRED...</b>";
		return false;
	}else if(p == ''){
		_("password_span").innerHTML = "<b style='color:red;'>PASSWORD REQUIRED...</b>";
		return false;
	}else if(c == ''){
		_("confirm_span").innerHTML = "<b style='color:red;'>CONFIRM PASSWORD REQUIRED...</b>";
		return false;
	}else if(p !== c){
		_("confirm_span").innerHTML = "<b style='color:red;'>PASSWORD AND CONFIRM PASSWORD DONT MATCH...</b>";
		return false;
	}else if(g == ''){
		_("gender_span").innerHTML = "<b style='color:red;'>GENDER FIELD REQUIRED...</b>";
		return false;
	}else if(a == ''){
		_("about_span").innerHTML = "<b style='color:red;'>ABOUT ME FIELD REQUIRED...</b>";
		return false;
	}
	
	if(f !== '' || l !== '' || e !== '' || p !== '' || c !== '' || g != '' || a != ''){
		var ajax = ajaxObj("POST", "php_files/important-blocks.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax) == true){
				var Array = ajax.responseText.split("|");
				if(Array[0] == "success"){
					_('firstname').value = '';
					_('lastname').value = '';
					_('email').value = '';
					_('password').value = '';
					_("confirm").value = '';
					_("about").value = '';
					_("gender").value = '';
					_("feedback").innerHTML = Array[1];
					
				} else {
					_("feedback").innerHTML = ajax.responseText;
				}
			}
		}
	ajax.send("first="+f+"&last="+l+"&email="+e+"&password="+p+"&gender="+g+"&about="+a);
	
	}else{
		_("feedback").innerHTML = "FILL ALL FORM FIELD";
	}
}
