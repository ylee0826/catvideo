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
					<h3>Search Result:</h3>
					<table>
					<tr><th>Title</th><th>URL</th><th>Rating</th></tr>

					<?php
					include('dbconnect.php');
					/*$searchTag = $_POST['tags'];*/
					$searchBreed = $_POST['breed'];
					
					/*echo "<p>$searchTag</p>";*/
					echo "<p>$searchBreed</p>";
					
					/*if($searchTag =="blank"){
					$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN breeds b JOIN vid_breeds vb WHERE v.id=vb.id AND b.breed_id=vb.breed_id AND b.breed_name='".$searchBreed."'";
					}else{
					$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN tags t JOIN vid_tags vt WHERE v.id=vt.id AND t.tag_id=vt.tag_id AND t.tag_name='".$searchTag."'";

					}
					*/
					if($searchBreed=="blank"){
						echo "<p>breed section blank</p>";
					$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN breeds b JOIN vid_breeds vb WHERE v.id=vb.id AND b.breed_id=vb.breed_id AND b.breed_name='".$searchBreed."'";

					}else{
					$query = "SELECT DISTINCT v.title, v.url, v.rating FROM videos v JOIN breeds b JOIN vid_breeds vb WHERE v.id=vb.id AND b.breed_id=vb.breed_id AND b.breed_name='".$searchBreed."'";
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
					</table>
					
					
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