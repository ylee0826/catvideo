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
					
					$breed = $_POST['breed'];
					$category = $_POST['category'];
					$age = $_POST['age'];
					$activity = $_POST['activity'];
					
					echo "<p>$title $url</p>";

					
					$query = "INSERT INTO videos (title, url, vidlength, rating) VALUES ('";
					$query = $query . $title . "', '" . $url . "', '" . $vidlength . "', '" . $rating . "')";
					
					
					$result = mysqli_query($db, $query)
                         or die("Error Querying Database");
						 
					$breed_query = "INSERT INTO vid_breeds (id, breed_id) VALUES (LAST_INSERT_ID(), (SELECT breed_id FROM breeds WHERE breed_name = '" . $breed . "'));";
					$category_query = "INSERT INTO vid_categories (id, categ_id) VALUES (LAST_INSERT_ID(), (SELECT categ_id FROM categories WHERE categ_name = '" . $category . "'));";
					$age_query = "INSERT INTO vid_ages (id, age_id) VALUES (LAST_INSERT_ID(), (SELECT age_id FROM ages WHERE age_name = '" . $age . "'));";
					$activity_query = "INSERT INTO vid_activities (id, activ_id) VALUES (LAST_INSERT_ID(), (SELECT activ_id FROM activities WHERE activ_name = '" . $activity . "'));";
					
					
					$result1 = mysqli_query($db, $breed_query)
                         or die("Error Querying Database");

					
					$result2 = mysqli_query($db, $category_query)
                         or die("Error Querying Database");
						 
					
					$result3 = mysqli_query($db, $age_query)
                         or die("Error Querying Database");
						 
					
					$result4 = mysqli_query($db, $activity_query)
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
