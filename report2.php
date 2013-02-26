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
					$category = $_POST['category'];
					$hours = $_POST['hours'];
					$minutes = $_POST['minutes'];
					$seconds = $_POST['seconds'];
					$vidlength = "$hours:$minutes:$seconds";
					$breed = $_POST['breed'];
					$tags = $_POST['tags'];
					$rating = $_POST['rating'];
					echo "<p>$title $url</p>";
					echo '<p>$title $url</p>';
					echo "<p>$category</p>";
					
					$query = "INSERT INTO videos (title, url, vidlength, breed, category, tags, rating) VALUES ('";
					$query = $query . $title . "', '" . $url . "', '" . $vidlength . "', '" . $breed. "', '" . $category . "', '" . $tags . "', '" . $rating . "')";
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
