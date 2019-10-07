<?php
session_start();
// if(!isset($_SESSION['user'])) {
// 	header("Location: index.php");
// 	exit;
// }

require_once 'db_connect.php';


//get all info about the current user
//$sql_user = "SELECT * FROM users WHERE userID = ".$_SESSION['user'];
//$result = $connect->query($sql_user);
//$user_details = mysqli_fetch_array($result, MYSQLI_ASSOC);

// get all categories we have in DB with status 'display'
$sql_stat = "SELECT DISTINCT inspirationID, inspo_image, categ_name, COUNT(pin_id) as number_of_pins
						FROM inspirations
						JOIN pins ON fk_inspirationID = inspirationID
						JOIN categories ON fk_categ_name = categ_name
						GROUP BY fk_inspirationID
						ORDER BY number_of_pins DESC";

$result_stat = $connect->query($sql_stat);

$connect->close();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inspiration Statistic</title>
	<link rel="stylesheet" href="inspo_css/inspo_statistic.css">
	<link href="https://fonts.googleapis.com/css?family=Martel+Sans&display=swap" rel="stylesheet">
</head>
<body>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Categories or specific IDs" title="Type in a name">

<table class="inspo-statistic-table" id="myTable">
	<tr>
		<th class="inspo-statistic-tableHead">ID</th>
		<th class="inspo-statistic-tableHead">Image</th>
		<th class="inspo-statistic-tableHead">Category</th>
		<th class="inspo-statistic-tableHead">Number of Pins</th>
	</tr>
<!-- ====================DYNAMIC RENDER=========================== -->
	<?php 

	if ($result_stat-> num_rows > 0) {
		while ($row = $result_stat ->fetch_assoc()) {
		echo 	"<tr class ='inspo-statistic-tableRow' >
					<td class ='inspo-statistic-tableData' >". $row["inspirationID"] . "</td>
					<td class ='inspo-statistic-tableData-image'><img class ='inspo-statistic-image' src='" . $row['inspo_image']. "'></td>
					<td class ='inspo-statistic-tableData'>" . $row["categ_name"] . "</td>
					<td class ='inspo-statistic-tableData'>" . $row["number_of_pins"] ."</td>
				</tr>";
		}
echo "</table>";

	}

	else {
		echo "0 result";
	}


	 ?>


<!-- ==================== END OF DYNAMIC RENDER=========================== -->
</table>




<script>
function myFunction() {
  var input, filter, table, tr, td, td1, i, txtValue, textValue1;
  input = document.getElementById("myInput");
  filter = input.value;
  table = document.getElementById("myTable");
  tr = table.getElementsByClassName("inspo-statistic-tableRow");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[2];

    is_present = 0;

    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.indexOf(filter) > -1) {
      	is_present = 1
      }
  	}

  	if (td1){
  		txtValue1 = td1.textContent || td1.innerText;
      if (txtValue1.indexOf(filter) > -1) {
      	is_present = 1
  		}
	}

    if (is_present == 1) {
        tr[i].style.display = "";
      } 

      else {
        tr[i].style.display = "none";
      }
  }


}
</script>

</body>
</html>