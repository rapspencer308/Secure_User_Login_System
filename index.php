<!DOCTYPE html>
<html>
<head>
    <title>Create A Test DataBase OR Go to Login/Signup page.</title>
    <link href="includes/jquery-ui.css" rel="stylesheet">
    <script src="includes/jquery-min.js"></script>
    <script src="includes/jquery-ui.js"></script>
    <script type="text/javascript">             
  
	</script>
<style type="text/css">	
.db{
	font-size: 16px;
	color:red;
	font-weight:bold;
}
p{
	font-size: 10px;
	color:black;
	font-weight: normal;

}

</style>

</head>
<body>
    <h1>Create A Test DataBase and Table OR Go to Login/Signup page.</h1>
    <h3><b>Before You Start anything:</b><br>
    Make sure you have wamp server ON(or an other php server enviroment)<br>
    <br></h3>
    
    <a href="createDB.php"><button class="createDB">Create Test DataBase and UsersTable(Only need 1)</button></a>
    <a href="login-signup.php"><button class="link">Login/Sign up user</button></a> <br>
    <span class="status"></span> 
    <br>

    <script>
    /*$(function() {
    $("button.createDB").click(function() {

    var data = {action: 'createDB'};

    $.post('createDB.php', data, function(output) {
        // do something here with the returnedData
        //alert(output);
        $("span.status").text("  ");
        $("span.status").append(output);
        //$("h1#Name").text("Hi Bitch Ass");
    });

    });
    
});*/
    </script>
</body>
</html>