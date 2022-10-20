<html>

<head>

<title>TAVOLA PITAGORICA</title>
<link rel="stylesheet" type="text/css"href="stile/stile.css"/>

</head>

<body>

<h1 align="center" style='margin:25px; padding:25px; background-color:#000000; color:#00ff00;'>TAVOLA PITAGORICA</h1>

<table border="1" cellspacing="3" cellpadding="2" bgcolor="#000000" align="center">

<?php

$limite = 10;
$limite2 = 10;

for($riga = 1;$riga<=$limite;$riga++)
{
	echo"<tr style='color:#ffff00'>";
	for($colonna = 1;$colonna<=$limite;$colonna++)
	{
		$valore = ($riga*$colonna);
		echo"<td align= \"center\">"; echo $valore; echo"</td>";
	}
	echo"</tr>";
}

?>

</table>

<table border="1" cellspacing="3" cellpadding="2" align="center" bgcolor="#000000">

<?php

$limite = 10;
$limite2 = 10;

for($riga = 1;$riga<=$limite;$riga++)
{
	echo"<tr style='color:#00ffff'>";
	for($colonna = 1;$colonna<=$limite;$colonna++)
	{
		$valore = ($riga*$colonna) * 2;
		echo"<td align= \"center\">"; echo $valore; echo"</td>";
	}
	echo"</tr>";
}


?>


</table>

<table border="1" cellspacing="3" cellpadding="2" align="center" bgcolor="#000000">

<?php

$limite = 10;
$limite2 = 10;

for($riga = 1;$riga<=$limite;$riga++)
{
	echo"<tr style='color:#00ff00'>";
	for($colonna = 1;$colonna<=$limite;$colonna++)
	{
		$valore = ($riga*$colonna) * 3;
		echo"<td align= \"center\">"; echo $valore; echo"</td>";
	}
	echo"</tr>";
}


?>


</table>

</body>

</html>
