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
					<h3>Submit a cat video!</h3>
					<p>Thanks for submitting! </p>
					
					<?php
					include('dbconnect.php');
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$city = $_POST['city'];
					$state = $_POST['state'];
					$yr = $_POST['year'];
					$m = $_POST['month'];
					$d = $_POST['day'];
					$date = "$yr-$m-$d";
					echo "<p>$firstname $lastname</p>";
					echo '<p>$firstname $lastname</p>';
					echo "<p>$city</p>";
					
					$query = "INSERT INTO abductions (firstname, lastname, city, state, date) VALUES ('";
					$query = $query . $firstname . "', '" . $lastname . "', '" . $city . "', '" . $state . "', '" . $date. "')";
					echo "<p>QUERY   $query</p>";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");

					
					?>
					
					
					
					</form>
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
