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
					$title = $_POST['title'];
					$url = $_POST['url'];
					$hours = $_POST['hours'];
					$minutes = $_POST['minutes'];
					$seconds = $_POST['seconds'];
					$vidlength = "$hours:$minutes:$seconds";
					$rating = $_POST['rating'];
					
					echo "<p>$title $url</p>";
					echo '<p>$title $url</p>';
					
					$query = "INSERT INTO videos (title, url, vidlength, rating) VALUES ('";
					$query = $query . $title . "', '" . $url . "', '" . $vidlength . "', '" . $rating . "')";
					
					echo "<p>QUERY   $query</p>";
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");

					
					
					
					$id_query = "SELECT id FROM videos WHERE title = '" . $title . "'";
					$id = mysqli_query($db, $id_query)
						or die("Error Querying Database for ID");
					echo "<p> ID $id</p>";
					
					$breeds_query = "INSERT INTO vid_breeds (id, breed_id) VALUES ('";
					if ($_POST['Unspecified'] == 'checked')
						$breed_number = 1;
						$breeds_query = $breeds_query . $id . "',  '" . $breed_number . "' ),";
					if ($_POST['Persian'] == 'checked')
						$breed_number = 2;
						$breeds_query = $breeds_query . $id . "',  '" . $breed_number . "'),";
					if ($_POST['Exotic shorthair'] == 'checked')
						$breed_number = 3;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['British shorthair'] == 'checked')
						$breed_number = 4;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Siamese'] == 'checked')
						$breed_number = 5;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Ragdoll'] == 'checked')
						$breed_number = 6;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Bengal'] == 'checked')
						$breed_number = 7;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Tabby'] == 'checked')
						$breed_number = 8;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Scottish fold'] == 'checked')
						$breed_number = 9;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "'),";
					if ($_POST['Hairless'] == 'checked')
						$breed_number = 10;
						$breeds_query = $breeds_query . $id . "', '" . $breed_number . "')";
						
					echo "<p> $breeds_query </p>";
					
					
					
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
