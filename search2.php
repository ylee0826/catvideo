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
					<h3>Search Result: </h3>
					
					<?php
					include('dbconnect.php');
					$search = $_POST['title'];
	
					$breed = $_POST['breed'];
					$category = $_POST['category'];
					$age = $_POST['age'];
					$activity = $_POST['activity'];
					echo "<p>$search</p>";
					
					if(($breed=="---")&&($category=="---")&&($age=="---")&&($activity=="---")){
						$query = "SELECT title, url, rating FROM videos WHERE title LIKE '%".$search. "%'";
					}else{
						/*if only breed is choosen*/
						if(($category=="---")&&($age=="---")&&($activity=="---")){
							$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN ";
							$query = $query." breeds b JOIN vid_breeds vb WHERE v.id=vb.id AND b.breed_id=vb.breed_id AND b.breed_name='".$breed."'";
						}
						/*if only category is choosen*/
						if(($breed=="---")&&($age=="---")&&($activity=="---")){
							$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN ";
							$query = $query." categories c JOIN vid_categories vc WHERE v.id=vc.id AND c.categ_id=vc.categ_id AND c.categ_name='".$category."'";
						}
						/*if only age is choosen*/
						if(($breed=="---")&&($category=="---")&&($activity=="---")){
							$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN ";
							$query = $query." ages a JOIN vid_ages va WHERE v.id=va.id AND a.age_id=va.age_id AND a.age_name='".$age."'";
						}
						/*if only activity is choosen*/
						if(($breed=="---")&&($category=="---")&&($age=="---")){
							$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN ";
							$query = $query." activities act JOIN vid_activities vact WHERE v.id=vact.id AND act.activ_id=vact.activ_id AND act.activ_name='".$activity."'";
						}
						
					}
					$result = mysqli_query($db, $query)
							or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)){
						$title = $row['title'];
						$url = $row['url'];
						$rate = $row['rating'];
						echo "<tr><td>$title</td><td>
						<iframe width=\"560\" height=\"315\" src=".$url." frameborder=\"0\" allowfullscreen></iframe>
						
						</td><td>$rate</td></tr>\n";	
					}

					mysqli_close($db);
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
