<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Or Signup</title>
	    <link href="includes/jquery-ui.css" rel="stylesheet">
    <script src="includes/jquery-min.js"></script>
    <script src="includes/jquery-ui.js"></script>
    <script type="text/javascript">             
  
	</script>
	<style type="text/css">
		
html,body{width:100%;height:100%;margin:0;font-family:Helvetica,Arial,sans-serif;overflow:hidden}.ghost{position:absolute;left:-100%}.framed{position:absolute;top:50%;left:50%;width:15rem;margin-left:-7.5rem}.logo{margin-top:-9em;cursor:default}.form{margin-top:-4.5em;transition:1s ease-in-out}.input{-moz-box-sizing:border-box;box-sizing:border-box;font-size:1.125rem;line-height:3rem;width:100%;height:3rem;color:#444;background-color:rgba(255,255,255,.9);border:0;border-top:1px solid rgba(255,255,255,0.7);padding:0 1rem;font-family:'Open Sans',sans-serif}.input:focus{outline:none}.input--top{border-radius:.5rem .5rem 0 0;border-top:0}.input--submit{background-color:rgba(92,168,214,0.9);color:#fff;font-weight:700;cursor:pointer;border-top:0;border-radius:0 0 .5rem .5rem;margin-bottom:1rem}.text{color:#fff;text-shadow:0 1px 1px rgba(0,0,0,0.8);text-decoration:none}.text--small{opacity:.85;font-size:.75rem;cursor:pointer}.text--small:hover{opacity:1}.text--omega{width:200%;margin:0 0 1rem -50%;font-size:1.5rem;line-height:1.125;font-weight:400}.text--centered{display:block;text-align:center}.text--border-right{border-right:1px solid rgba(255,255,255,0.5);margin-right:.75rem;padding-right:.75rem}.legal{position:absolute;bottom:1.125rem;left:1.125rem}.photo-cred{position:absolute;right:1.125rem;bottom:1.125rem}.fullscreen-bg{position:fixed;z-index:-1;top:0;right:0;bottom:0;left:0;background-color:black;background-size:cover}#toggle--login:checked ~ .form--signup{left:200%;visibility:hidden}#toggle--signup:checked ~ .form--login{left:-100%;visibility:hidden}@media (height:300px){.legal,.photo-cred{display:none}}

	</style>
</head>
<body>
  <input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
  <input type="radio" id="toggle--signup" name="toggle" class="ghost" />


<b id="error" style="color: white;"></b>

  <form class="form form--login framed">
    <input type="email" placeholder="Email" class="input input--top" id="loginEmail" />
    <input type="password" placeholder="Password" class="input" id="loginPassword"/>
    <input type="" value="Log in" class="input input--submit" />
    
    <label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label>
  </form>
  
  <form class="form form--signup framed">
    <h2 class="text text--centered text--omega">Join the other <b>152.6 million</b> blogs and</br>share all that you love.</h2>

    <input type="email" placeholder="Email" class="input input--top" id="signupEmail" />
    <input type="password" placeholder="Password" class="input" id="signupPassword" />
    <input type="text" placeholder="Username" class="input" id="signupUsername" />
    <input type="" value="Sign up" class="input input--submit" />
    
    <label for="toggle--login" class="text text--small text--centered">Not new? <b>Log in</b></label>
  </form>

  <div class="legal">
    <a class="text text--small text--border-right" href="javascript:;">Terms</a>
    <a class="text text--small text--border-right" href="javascript:;">Privacy</a>
    <a class="text text--small" href="javascript:;">Password help</a>
  </div>

  <div class="photo-cred">

  </div>

  <div class="fullscreen-bg"></div>

  <script type="text/javascript">
  	function _(x){
	return document.getElementById(x).value;;
}
function emptyElement(x){
	_(x).innerHTML = "";
}

function login(){
	var loginEmail = _("loginEmail"); var loginPassword = _("loginPassword"); 

	var data = {
		action: 'login', 
		email: loginEmail, 
		password: loginPassword
	};

    $.post('db_connect_Login_Signup.php', data, function(output) {

  	window.location.href = "http://localhost/user.php?u="+output;
    });
}
function signup(){
	//Create a security system that blocks by ip address
	var signupEmail = _("signupEmail"); var signupPassword = _("signupPassword"); 
	var signupUsername = _("signupUsername");


	var data = {
		action: 'signup', 
		email: signupEmail, 
		password: signupPassword, 
		username: signupUsername
	};
	
    $.post('db_connect_Login_Signup.php', data, function(output) {
        // do something here with the returnedData
        
        
        $("b#error").text(output);
    });
}

$(function() {
    $("input.input.input--submit").click(function() {

    if ($(this).attr('value') == "Log in") {
    	login();
    }else{
    	signup();
    }

    });
    
});


  </script>
</body>
</html>