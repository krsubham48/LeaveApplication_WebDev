<HTML>
	<HEAD>
		<TITLE>Redirecting...</TITLE>
	</HEAD>
	<BODY Background="Success_Background.jpeg" Height=100% Width=100% Topmargin=100 Leftmargin=100 Bottommargin=100>

		<H1 Align="Center"><U><B>Name of the Organisation</B></U></H1>
		<BR><BR><BR><BR><BR>
		<HR Width="800">


		<?php

		$RegNo = $_GET['regno'];
		$UserName = $_GET['username'];
		$Password = $_GET['password'];

		$Location = "Data/".$RegNo."/".$RegNo;

		$Read = file("$Location.txt");

		if((trim($UserName) == trim($Read[7])) && (trim($Password) == trim($Read[8]))){

			echo "<H3>Welcome <B>$Read[0]</B>! ";
			echo "<A Href=Application.html>Click Here to fill an Application.</A>";
			echo "<BR><BR><BR><BR><BR>";
			echo "<A Href=LogIn.html><B>Logout</B></A>";
		}

		else{
			echo "<H3><B>Wrong credentials!</B> </H3>";
			echo "<A Href=LogIn.html>Try Again!</A>";
		}


		?>

	</BODY>
</HTML>