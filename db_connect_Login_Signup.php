<?php
$action = $_POST["action"];

include_once("db_connect.php");

function login(){
$email = $_POST["email"];
$passwordSU = $_POST["password"];
$p = md5($passwordSU);
global $conn;
    $conn    = $conn;

$sql = "SELECT id, email, password FROM users WHERE email='$email' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_username = $row[1];
        $db_pass_str = $row[2];
		if($p != $db_pass_str){
			echo "login_failed";
            exit();
		} else {
			// CREATE THEIR SESSIONS AND COOKIES
			session_start();
			$_SESSION['userid'] = $db_id;
			$_SESSION['username'] = $db_username;
			$_SESSION['password'] = $db_pass_str;
			setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
    		setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
			// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
			$sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($conn, $sql);
			echo $db_username;
		    exit();
		}
	}


function signup(){
$email = $_POST["email"];
$passwordSU = $_POST["password"];
$usernameSU = $_POST["username"];
global $conn;
$conn    = $conn;
$error_msg = "";
 
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }

    if (empty($error_msg)) {
 
      
        $passwordSU = md5($passwordSU);
 
        // Insert the new user into the database 
    $sql = "INSERT INTO `members`(`username`, `email`, `password`) VALUES ('$usernameSU', '$email', '$passwordSU')";
    
    if ($conn->query($sql) === TRUE) {
        //p("New record created successfully--- ".$x);
        echo "Here you would send a email confirmation, reload, login.";
        
	exit;
    } else {
        $error_msg .= 'End Error';

    }
        
    }
    echo $error_msg;
}

}


if ($action == "login") {
    login();
    # code...
} elseif ($action == "signup") {
    signup();
    # code...
} else {
    p(var_dump(debug_backtrace()));
}
?>