<HTML>
	<HEAD>
		<TITLE>Preview</TITLE>
	</HEAD>
	<BODY Background="Preview_Background.jpeg" Height=100% Width=100% Topmargin=100 Leftmargin=100 Bottommargin=100>

		<H1 Align="Center"><U><B>Name of the Organisation</B></U></H1>
		<BR><BR><BR>
		<HR Width="800" Align="Left">
		<BR>

		<?php

		$RegNo = $_GET['regno'];
		$Password = $_GET['password'];

		$Location = "Data/".$RegNo."/".$RegNo;

		$Read = file("$Location.txt");

		if(trim($Password) != trim($Read[8])){
			echo "<B>Incorrect Registration No. or Password! &nbsp;<A Href=Application.html>Try Again?</A>";
		}

		else{

			$FromDate = $_GET['fromdate'];
			$ToDate = $_GET['todate'];
			$Subject = $_GET['subject'];
			$Salutation = $_GET['salutation'];
			$Body = $_GET['body'];

			$RegNo_Application = $Location."_Application";
			$Data_Application = fopen("$RegNo_Application.txt" , 'w');

			fwrite($Data_Application , $FromDate.PHP_EOL);
			fwrite($Data_Application , $ToDate.PHP_EOL);
			fwrite($Data_Application , $Subject.PHP_EOL);
			fwrite($Data_Application , $Salutation);

			$RegNo_Body = $Location."_Body";
			$Data_Body = fopen("$RegNo_Body.txt" , 'w');
			fwrite($Data_Body , $Body);

			$Read1 = file("$RegNo_Application.txt");

			$Read_Data_Body = fopen("$RegNo_Body.txt" , 'r');

			echo "<FONT Size=3>$Read1[3],<BR>I, <I>$Read[0](Reg. No. : $Read[6])</I> needs 
			a leave from <I>$Read1[0]</I> to <I>$Read1[1]</I> due to the following reason :<BR><BR>";

			echo "<I>";


			$Count = 1;
			while(!feof($Read_Data_Body)){
				echo $Count.". ".fgets($Read_Data_Body)."<BR>";
				$Count++;
			}
			echo"</I>";

			echo "<BR>";

			echo "Please grant me the permission.<BR><BR>
				  <B>Thank You!</B>";

			echo "<P Align=Right><B>$Read[0]<BR><BR>
									Mob. : $Read[3]<BR>
									e-mail : $Read[1]";





		}

		?>
		<BR><BR><BR>
		<HR Width="800" Align="Left">
		<BR><BR><BR>

		<FORM Action="Application.html" Method="GET">
			<INPUT Type="submit" Name="edit" id="edit" Value="Edit" />
		</FORM>
		<FORM Action="Completed.html" Method="GET">
			<INPUT Type="submit" Name="submit" id="submit" Value="Submit" />
		</FORM>
		

	</BODY>
</HTML>