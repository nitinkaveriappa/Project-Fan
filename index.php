<!-- Login Page -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fanorona|login</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/home.css" rel="stylesheet" type="text/css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
window.onload = function() {
				errCheck()	};

function errCheck()
{
	var url = document.URL;
	unescape(url);
	if(url.search('\\?type=err')>0)
	{
		document.getElementById('errmsg').removeAttribute('hidden');
	}
	else
	{
		document.getElementById('errmsg').setAttribute('hidden','on');
	}
	
}

</script>
</head>

<body>
 
<div class="container" align="center">


<div class="header" align="center">
	<div class="Title" align="center">
      	<span class="MainTitle">FANORONA</span><br />
    	<span class="SubTitle">SWE 681 Project</span>	
    </div>
</div>

<div class="contents" align="center">
	<div class="contentData" >
        <span id="errmsg" style="color:#F03"> INVALID USER NAME OR PASSWORD</span><br/><br/>
	
    	<form action="login.php" method="POST" name="loginForm">
    		<input class="formDetail" type="text" name = "userName"  placeholder="E-mail ID" size="36px" vspace="40px" autofocus required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,4}"><br/><br/>
			<input class="formDetail" type="password" name = "userPassword" placeholder="Password" size="36px" required><br/><br/><br/>
    		<button class="formBttn" type="submit" name="loginBttn">LOGIN</button><br/><br/>
            <div class="g-recaptcha" data-sitekey="6LdahgcUAAAAAAm5QqZCBVaaIvZIhL5ehTSPXsd2"></div>
    	</form>
    
    	<div class="formOptions"><a href="register.php">Register</a> | <a href="FrgtPwd.php">Forgot Password</a></div>
    </div>  
</div>

</div>

</body>
</html>