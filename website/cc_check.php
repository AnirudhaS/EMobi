<?php
	
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$password=""; // Mysql password 
		$db_name="emobi"; // Database name 
		$tbl_name_cc="credit_card"; // Table name 
		$number=$_POST["cc_no"];
		$date=$_POST["date"];
		$name=$_POST["name"];
		$code=$_POST["code"];
		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		$sql1="SELECT * FROM $tbl_name_cc where name='$name' and card_no='$number' and date='$date' and code='$code'";
		$result1=mysql_query($sql1);
		
		$count1=mysql_num_rows($result1);
		
		if ($count1 == 1)
		{
			header("location:purchase.php");
		}
		else 
			header("location:wrng_cc.html");
?>
