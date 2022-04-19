<?php

$user = 'root';
$password = ''; 
  
$database = 'loginpage'; 
  
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}



function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$sql="SELECT * FROM adminlogin";
    $result = $mysqli->query($sql);
    $mysqli->close();
	$i=0;
	
	while($row=$result->fetch_assoc())
        {
     $userid = $row['adminname'];
     $pwd = $row['password'];
	 if(($userid == $adminname) && 
            ($pwd == $password)) {
                header("Location: feedback.php");
				$i=$i+1;
        }
	}
		
	if($i==0) {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			echo'<div>
              <div style="text-align: center; font-size:200%;"><a href="http://localhost/htdocs/login.php" id="lnk100" title="form to email">Try Again</a></div>
            </div>';
		}
	
}

?>
