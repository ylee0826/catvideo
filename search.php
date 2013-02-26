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
					<h3>Cat Video</h3>
					<p>Search for a video you want to watch</p>
					
					<form method = "post" action = "report2.php">
					<table>
					<tr><td><input type="text" id="search" name="search" size="70"/></td>

					<td>&nbsp;</td><td><input type="submit" value="Search" /></td></tr>
					</table>
					<table>
					<tr><th>Title</th><th>URL</th><th>Length</th><th>Rating</th></tr>
					<?php
						include('dbconnect.php');
						$query = "SELECT title, url, vidlength, rating FROM videos ORDER BY title";
						$result = mysqli_query($db, $query)
							or die("Error Querying Database");
						while($row = mysqli_fetch_array($result)){
							$title = $row['title'];
							$url = $row['url'];
							$vidlength = $row['vidlength'];
							$rate = $row['rating'];
						echo "<tr><td>$title</td><td>$url</td><td>$vidlength</td><td>$rate</td></tr>\n";
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
