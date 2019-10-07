<?php
session_start();
// if(!isset($_SESSION['user'])) {
// 	header("Location: index.php");
// 	exit;
// }

require_once 'db_connect.php';

//get all info about the current user tested, working
$sql_user = "SELECT * FROM users WHERE userID = ".$_SESSION['user'];
$result = $connect->query($sql_user);
$user_details = mysqli_fetch_array($result, MYSQLI_ASSOC);

// get all categories we have in DB with status 'display'
$sql_categ = "SELECT * FROM categories WHERE categ_status = 'display'";
$result_categ = $connect->query($sql_categ);

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="inspo_css/inspo_landing.css">
	<title>Inspiration Landing</title>
</head>
<body>

<!-- HERE SHOULD BE PAGE HEADER (supplied by Team1 / Kathi) -->

<!-- HERE SHOULD BE PAGE NAVIGATION (supplied by Team1 / Kathi) -->

	<div class="inspo-landing-mainContainer">
		
		<div id="inspo-landing-headerDiv">
			<h1>Categories</h1>
			<button class ="inspo-landing-button" onclick="toggleFunction()">Add Category</button>
		</div>

		<div id="inspo-landing-createForm">
			<?php include "inspo_landing_createForm.php" ?>
		</div>

		<div class="inspo-landing-flexContainer">
<!-- ====================DYNAMIC RENDER=========================== -->
			<?php
			if($result_categ->num_rows > 0) {
				while($row = $result_categ->fetch_assoc()) {
					echo
					"<div class='".$row['categ_css_class']."'>
						<a href='".$row['categ_link']."'>
							<img class ='inspo-landing-image' alt='' src='".$row['categ_image']."'/>
						</a>
						<div class='inspo-landing-itemName'>".$row['categ_title']."</div>
					</div>";
				} 
			} else {
				echo "No categories found";
			}	
			?>
		</div>
	</div>


<!-- ============== JAVA SCRIPT ============== -->

	<script>
		function toggleFunction() {
		  var x = document.getElementById("inspo-landing-createForm");
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}
	</script>
	
<!-- HERE SHOULD BE PAGE FOOTER (supplied by Team3 / Jess)-->

</body>
</html>

<?php 
// if ($user_details['userpriv']=='admin') {
// 	echo "additional content";
// }	
?>