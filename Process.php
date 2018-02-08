<HTML>
	<HEAD>
		<TITLE>Process</TITLE>
	</HEAD>
	<BODY Background="Process_Background.jpeg" Height=100% Width=100% Topmargin=100 Leftmargin=100 Bottommargin=100>

		<H1 Align="Center"><U><B>Name of the Organisation</B></U></H1>
		<BR><BR><BR>
		<HR Width="800">

		<?php

		$Name = $_GET['name'];
		$PEmail = $_GET['email'];
		$SEmail = $_GET['altemail'];
		$Mobile = $_GET['mobile'];
		$DateOfBirth = $_GET['dateofbirth'];
		$Address = $_GET['address'];

		$RegNo = $_GET['regno'];
		$UserName = $_GET['username'];
		$Password = $_GET['password'];
		$ConfirmPassword = $_GET['confirmpassword'];

		if(trim($Password) != trim($ConfirmPassword)){
			echo "Password and Confirm Password do not match. <A Href=NewUserRegistration.html/#password>Try again?</A>";
		}

		else{

		$Location1 = "Data/".$RegNo;

		if(is_dir($Location1)){
			echo "User Already Exist! <A Href=NewUserRegistration/#regno>Try again.</A>";
		}

		else{

			mkdir($Location1);

		$Location2 = $Location1."/".$RegNo;

		

		$EnteredData = fopen("$Location2.txt" , 'w');

		fwrite($EnteredData , $Name.PHP_EOL);
		fwrite($EnteredData , $PEmail.PHP_EOL);
		fwrite($EnteredData , $SEmail.PHP_EOL);
		fwrite($EnteredData , $Mobile.PHP_EOL);
		fwrite($EnteredData , $DateOfBirth.PHP_EOL);
		fwrite($EnteredData , $Address.PHP_EOL);
		fwrite($EnteredData , $RegNo.PHP_EOL);
		fwrite($EnteredData , $UserName.PHP_EOL);
		fwrite($EnteredData , $Password.PHP_EOL);
		fwrite($EnteredData , $ConfirmPassword);

		echo "<H3>Registration <B>SUCCESSFUL</B>! </H3><A Href=LogIn.html>Click here to Login.</A>";
		
		}

		}

		?>
		

	</BODY>
</HTML>