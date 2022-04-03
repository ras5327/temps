<html> 
<head> 
<title>Tiempo Alio</title>  
</head> 

<body>

<h1 align="center">Tiempo Alió</h1>

<?php 
$dilluns= "13º";
$dimarts = "16º";
$dimecres = "19º";
$dijous = "22º";
$divendres = "23º";
$dissapte = "23º";
$diumenge = "21º";

echo
"<center>
      <table border='1' width='700'
      height='100' >
        <tr>
            <th bgcolor='#e6e1c2'>Dilluns</th>
            <th bgcolor='#e6e1c2'>Dimarts</th>
            <th bgcolor='#e6e1c2'>Dimecres</th>
            <th bgcolor='#e6e1c2'>Dijous</th>
            <th bgcolor='#e6e1c2'>Divendres</th>
			<th bgcolor='#e6e1c2'>Dissapte</th>
			<th bgcolor='#e6e1c2'>Diumenge</th>

        </tr>

	<tr>
	<td>$dilluns</td> <td>$dimarts</td> <td>$dimecres</td> <td>$dijous</td> <td>$divendres</td> <td>$dissapte</td> <td>$diumenge</td>
	</tr>
";
?>
</body>

</html>
