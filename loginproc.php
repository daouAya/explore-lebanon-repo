
<?php
	$flag=false;
	if (isset($_POST['uname'])&&isset($_POST['upass']))
	{
        	require("dbconn.php");
		$uname = $_POST['uname'];
		$upass = md5(strip_tags($_POST['upass']));

	        $sql = "SELECT * FROM login where username = '$uname' and password = '$upass' " or die ('Unable to run query:'.mysqli_error($con));

		$result = mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result) ;
		if (mysqli_num_rows($result)>0)
		{
                	@session_start();
						$username =  $row['username'];
                        $password =  $row['password'];
						echo"You are a validated user, logged in successfully.";
		        $_SESSION['username']=$username;
                        $_SESSION['password']=$password;
                        $flag=true;
                       require("index.php");
		}
		else
                {
?>
			<script language='JavaScript'>alert('Invalid/Wrong Username or Password!');</script>
<?php
		}
                @mysqli_close($con);
	}
        if(!$flag){
			echo('access denied!');
		}
        
?>
