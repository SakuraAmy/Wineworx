<?php

	$title= "Monthly Calendar";
	$page= "monthly calendar";
  $herotitle = "Monthly Calendar";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="mockup" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  											<div class="hero-container hero-maxheight embed-responsive-item">
                          <h1>Monthly Calendar</h1>
                          '.$hero.'
                        </div>
  										</div>';
  }
	include($path.'assets/inc/header.php');

?>

<div class="container">
	<h2 class="text-center winecolor monthlycal-title">This Monthly Calendar is a preview of Wineworx activities. Dates may change as necessary. Details will be shared as they become available. For more information contact Tom or Tony.</h2>

<div class="row bordersection">
	<div class="col">
		<h2 class="winecolor">June</h2>
		<h3>Australian Wine Making Experience</h3>
	</div>
	<div class="col">
		<img height="300px" width="100%" src="assets/images/australia.svg" alt="June" align="middle"/>
	</div>
</div>

<div class="row bordersection">
	<div class="col">
		<h2 class="winecolor">September</h2>
		<h3>California Wine Making experience</h3>
	</div>
	<div class="col">
		<img height="300px" width="100%" src="assets/images/california.svg" alt="September" align="middle"/>
	</div>
</div>

<div class="row bordersection">
	<div class="col">
		<h2 class="winecolor">October</h2>
		<h3>Finger Lakes Wine Making Experience</h3>
	</div>
	<div class="col">
		<img height="300px" width="100%" src="assets/images/new-york.svg" alt="October" align="middle"/>
	</div>
</div>

<div class="row bordersection">
	<div class="col">
		<h2 class="winecolor">October</h2>
		<h3>Italian Wine Making Experience</h3>
	</div>
	<div class="col">
		<img height="300px" width="100%" src="assets/images/italy.svg" alt="October" align="middle"/>
	</div>
</div>
</div>
<?php
	include($path.'assets/inc/footer.php');
?>
