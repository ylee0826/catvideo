<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cat Video</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.html');
?>


<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Current videos</h3>
					
<table>		
<tr><th>Title</th><th>Length</th><th>Rate</th></tr>
<?php
	include('dbconnect.php');
	$query = "SELECT firstname, lastname,date,city,state FROM abductions ORDER BY lastname";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$firstname = $row['firstname'];
  		$lastname = $row['lastname'];
		$city = $row['city'];
		$state = $row['state'];
		$date = $row['date'];

  	echo "<tr><td>$date<td>$firstname $lastname</td><td>$city, $state</td></tr>\n";
  }                 
                         
                         
                         
    mysqli_close($db);

?>
</table>


					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>
