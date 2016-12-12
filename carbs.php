<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Carbs</title>
        <link rel="stylesheet" href="Diabetes.css">

        <?php
            function printTable($result){  
                echo "<br></br>";
// print out results from sql in a nice html table
	echo ("<TABLE align=center border=5>");
    echo ("<TR>");
    echo("<TH>Name</TH><TH>Serving Size</TH><TH>Carbs</TH><TH>Type</TH>");
	while($row=mysql_fetch_row($result)){
		echo("<TR>");
		for($j=0;$j<mysql_num_fields($result);$j++){
			echo("<TD>".$row[$j]."</TD>");
		}
		echo("</TR>");
	}
  echo "</TABLE>";
  echo"<br></br>";
} 
        ?>
    </head>

    <body>
        <br></br>
<?php
//username, password, database, and host for SQL
$user = "xxxxxxx";
$pass = "xxxxxxx";
$d = "xxxxxxx";
$host = "xxxxxxx";

//echo $host ."\n";
//echo "Attempting    ";
$db = mysql_connect($host,$user,$pass) or die("unable"  . mysql_error($db));
//echo "Connected ";
mysql_select_db($d,$db) or die ("unable"    . mysql_error($db));

$type1 = $_POST["type1"];
$type2 = $_POST["type2"];
$type3 = $_POST["type3"];
//echo "$type1";

$sql1 = "SELECT Name, ServingSize, Carbs, Type FROM Diabetes WHERE Name = '$type1'";
$result1 = mysql_query($sql1);
$sql2 = "SELECT Name, ServingSize, Carbs, Type FROM Diabetes WHERE Name = '$type2'";
$result2 = mysql_query($sql2);
$sql3 = "SELECT Name, ServingSize, Carbs, Type FROM Diabetes WHERE Name = '$type3'";
$result3 = mysql_query($sql3);

$sqlx = "SELECT Carbs FROM Diabetes WHERE Name = '$type1'";
$resultx = mysql_query($sqlx);
$sqly = "SELECT Carbs FROM Diabetes WHERE Name = '$type2'";
$resulty = mysql_query($sqly);
$sqlz = "SELECT Carbs FROM Diabetes WHERE Name = '$type3'";
$resultz = mysql_query($sqlz);


printTable($result1);
printTable($result2);
printTable($result3);

//printTable($resultx);
//printTable($resulty);
//printTable($resultz);

function pleaseWork($res,$res2,$res3){
//echo ("<TABLE border=5>");
	while($row=mysql_fetch_row($res)){
		//echo("<TR>");
		for($j=0;$j<mysql_num_fields($res);$j++){
			//echo("<TD>".$row[$j]."</TD>");
            $total = $row[$j];
		}
		//echo("</TR>");
	}
    while($row=mysql_fetch_row($res2)){
		//echo("<TR>");
		for($j=0;$j<mysql_num_fields($res2);$j++){
			//echo("<TD>".$row[$j]."</TD>");
            $total2 = $row[$j];
		}
		//echo("</TR>");
    }
    while($row=mysql_fetch_row($res3)){
		//echo("<TR>");
		for($j=0;$j<mysql_num_fields($res3);$j++){
			//echo("<TD>".$row[$j]."</TD>");
            $total3 = $row[$j];
		}
		//echo("</TR>");
    }
  //echo "</TABLE>";
  //echo $total;
  //echo $total2;
  $totalRes = $total + $total2 + $total3;
  echo "Your total number of Carbs is:  $totalRes";
}

pleaseWork($resultx,$resulty,$resultz);

//$carbsTotal = $resultx + $resulty + $resultz;


?>
        <br></br>
        <ul id="bb"></ul>
        <h3>Carbs intake amount has been calculated; please see your insulin pump to input/track relevant information.</h3>
        <h3>Thank you!</h3>
        <ul id="bb"></ul>
    </body>



</html>
