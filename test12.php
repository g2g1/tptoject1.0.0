<!DOCTYPE html>
<html>
<head>
	<title>GameGG</title>
	<link href="test12style.css" rel='stylesheet' type='text/css'>
</head>
<body>
	<div align="center" id="box"><form method="post">
		<p>username:</p><input type="text" name="user" placeholder="enter sentence"/>
	
		<br/>
		<input type = "submit" name="submit1" value="Sign Up" />
		
</div>
	</form>

	<div align="center" id="box"><form method="post">
		<p>username:</p><input type="text" name="user1" placeholder="enter script"/>
	
		<br/>
		<input type = "submit" name="submit2" value="Sign Up"/>
		
</div>
	</form>
	
  
</body>
</html>

<?php
$dbuser="root";
$dbpass="gg.pass1.phpassass1n.";
$dbhostname="localhost";
$dbname="login";

$conn = mysqli_connect($dbhostname, $dbuser, $dbpass, $dbname) or die("couldn't connect");
if(isset($_POST['submit1'])){ $user = mysqli_real_escape_string($conn, $_POST['user']); }
if(isset($_POST['submit2'])){ $user1 = mysqli_real_escape_string($conn, $_POST['user1']); }


	function translateToScripted($user){
	$senth = "123456789!@#$%^&*()-+=`~/?";
	$alph = "abcdefghijklmnopqrstuvwxyz";
	$senth1 = str_split($senth);
	$alph1 = str_split($alph);
	$arr = array_combine($alph1, $senth1);
	$sentsplit = str_split($user);
	$length = count($sentsplit);
	$newsent = [];
	for($i = 0; $i < $length; $i++){

		$newsent[$i] = $arr[$sentsplit[$i]];	     
		echo $newsent[$i];

	      }
	   }
	      if(isset($_POST['submit1'])){
translateToScripted($user);	 }
function translateToReal($user1){
	$senth = "123456789!@#$%^&*()-+=`~/?";
	$alph = "abcdefghijklmnopqrstuvwxyz";
	$senth1 = str_split($senth);
	$alph1 = str_split($alph);
	$arr = array_combine($senth1, $alph1);
	$scriptsplit = str_split($user1);
	$length = count($scriptsplit);
	$newscript = [];
	for($i = 0; $i < $length; $i++){
		$newscript[$i] = $arr[$scriptsplit[$i]];
		
		   echo $newscript[$i]; 	
							}
								}     
		if(isset($_POST['submit2'])){						
translateToReal($user1);								
			}					
?>




























