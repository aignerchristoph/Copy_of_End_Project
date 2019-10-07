<!DOCTYPE html>
<html>
<head>
	<title>Pin Page</title>

<script src="https://kit.fontawesome.com/2ed46701bd.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<script>


//turns lightbulb on and off
$(document).on("click",".off", function(){
	$(this).toggleClass("lightbulbIconOn");
});


//adds active to categories on top
$(document).on("click", ".inactive", function(){
    $(this).toggleClass('inspo-pinpage-categories-active');
});


//shows pin button on hover
$(document).ready(function(){
  $(".inspoimg").mouseenter(function(){
    $(".fa-lightbulb").show();
  });
  $(".inspoimg").mouseleave(function(){
    $(".fa-lightbulb").hide();
  });
});


</script>

</head>
<body>


<div class="inspo-pinpage-buttons">
	<button type="" class="inspo-pinpage-categories inactive">Show all</button>
	<button type="" class="inspo-pinpage-categories inactive">Bathroom</button>
	<button type="" class="inspo-pinpage-categories inactive">Bedroom</button>
	<button type="" class="inspo-pinpage-categories inactive">Garden</button>
	<button type="" class="inspo-pinpage-categories inactive">Hallway</button>
	<button type="" class="inspo-pinpage-categories inactive">Kitchen</button>
	<button type="" class="inspo-pinpage-categories inactive">Living room</button>
</div>




<?php 
//function for adding random class to each iteration

$randomClass = rand(1, 3);

?>

<div class="inspo-pinpage-maincontainer">

	<div class="inspo-pinpage-container-one">
		<div class="inspo-pinpage-column-one 
		<?php
$randomClass = rand(1, 3);
		 if ($randomClass==1) {
		echo 'height-one"';
	}
	else if ($randomClass==2) {
		echo 'height-two"';
	}
	else {
		echo 'height-three"';
	} ?>

	>
	<img class="inspoimg" src="inspo_img/inspoimg1.jpg" alt="inspo">
		<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-one 	


		<?php 
$randomClass = rand(1, 3);
		if ($randomClass==1) {
		echo 'height-one"';
	}
	else if ($randomClass==2) {
		echo 'height-two"';
	}
	else {
		echo 'height-three"';
	} ?>">
			<img class="inspoimg" src="inspo_img/inspoimg2.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-one

<?php 
$randomClass = rand(1, 3);
		if ($randomClass==1) {
		echo 'height-one"';
	}
	else if ($randomClass==2) {
		echo 'height-two"';
	}
	else {
		echo 'height-three"';
	} ?>">
			<img class="inspoimg" src="inspo_img/inspoimg3.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-one">
			<img class="inspoimg" src="inspo_img/inspoimg4.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-one height-three">
			<img class="inspoimg" src="inspo_img/inspoimg4.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
	</div>

	<div class="inspo-pinpage-container-two">
		<div class="inspo-pinpage-column-two 
<?php 
$randomClass = rand(1, 3);
		if ($randomClass==1) {
		echo 'height-one"';
	}
	else if ($randomClass==2) {
		echo 'height-two"';
	}
	else {
		echo 'height-three"';
	} ?>"

		>
			<img class="inspoimg" src="inspo_img/inspoimg7.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-two 
<?php 
$randomClass = rand(1, 3);
		if ($randomClass==1) {
		echo 'height-one"';
	}
	else if ($randomClass==2) {
		echo 'height-two"';
	}
	else {
		echo 'height-three"';
	} ?>"

		>
			<img class="inspoimg" src="inspo_img/inspoimg9.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-two">
			<img class="inspoimg" src="inspo_img/inspoimg3.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-two">
			<img class="inspoimg" src="inspo_img/inspoimg4.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-two height-two">
			<img class="inspoimg" src="inspo_img/inspoimg7.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
	</div>
	
	<div class="inspo-pinpage-container-three">
		<div class="inspo-pinpage-column-three">
			<img class="inspoimg" src="inspo_img/inspoimg4.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-three height-two">
			<img class="inspoimg" src="inspo_img/inspoimg3.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-three">
			<img class="inspoimg" src="inspo_img/inspoimg2.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-three">
			<img class="inspoimg" src="inspo_img/inspoimg1.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
		<div class="inspo-pinpage-column-two height-two">
			<img class="inspoimg" src="inspo_img/inspoimg7.jpg" alt="inspo">
			<i class="far fa-lightbulb off"></i>
		</div>
	</div>

</div>


</body>

</html>