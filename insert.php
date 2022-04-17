<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => XCSE
		$conn = mysqli_connect("localhost", "root", "", "XCSE");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$Q1 = $_REQUEST['Q1'];
		$Q2 = $_REQUEST['Q2'];
		$Q3 = $_REQUEST['Q3'];
		$Q4 = $_REQUEST['Q4'];
		$Q5 = $_REQUEST['Q5'];
		$Q6 = $_REQUEST['Q6'];
		$Q7 = $_REQUEST['Q7'];
		$Q8 = $_REQUEST['Q8'];
		$Q9 = $_REQUEST['Q9'];
		$Q10 = $_REQUEST['Q10'];
		$Q11 = $_REQUEST['Q11'];
		$Q12 = $_REQUEST['Q12'];
		$comments = $_REQUEST['comments'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO feedback VALUES ('','$first_name','$last_name','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$comments')";
		
		if(mysqli_query($conn, $sql)){
			echo'<div>
              <div style="float:right"><a href="http://localhost/htdocs/login.php" id="lnk100" title="form to email">Logout</a></div>
            </div>';
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n ". 
			           "$Q1\n $Q2\n $Q3\n". 
			           "$Q4\n $Q5\n $Q6\n".
					   "$Q7\n $Q8\n $Q9\n".
					   "$Q10\n $Q11\n $Q12\n". 
					   "$comments");
		} else{
			echo "ERROR: Sorry But your provided data was of incorrect format, Try Again! "
				. mysqli_error($conn);
				
			echo'<div>
              <div><a href="http://localhost/htdocs/feedback.php" id="lnk100" title="form to email">Try Again</a></div>
            </div>';
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
