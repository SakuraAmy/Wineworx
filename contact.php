<!--
    Amina Mahmood
    Web and Mobile II - ISTE 240
    Date: 5/2/2018
    Instructor - James Habermas*
    Group Project
    Description: Process of getting information, display information and upload in database
-->

<?php

	$title= "Contact";
	$page= "contact";
  $herotitle = "Contact Us";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="mockup" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  											<div class="hero-container hero-maxheight embed-responsive-item">
                          <h1>Contact Us</h1>
                          '.$hero.'
                        </div>
  					</div>';
  }
	include($path.'assets/inc/header.php');

?>
<div class="container inc-margin-container">
		<br>
		<br>
		<h4>Tom@wineworx.net</h4>
		<h4>585-719-6563</h4>
		<br>
		<h4>Tony@wineworx.net</h4>
		<h4>585-749-9150</h4>
		<br>
		<h4>wineworx</h4>
		<h4>120 Mushroom Blvd. Suite 102</h4>
		<h4>Rochester, NY 14623</h4>
		<br>
		<figure>
				<img id="icon" src="./assets/images/facebook_icon.png" alt="Facebook_Icon" width="50" height="50" />
				<figcaption><a href="https://www.facebook.com/wineworx" target="_blank" />Like us on Facebook</figcaption>
		</figure>
</div>
<?php
	include($path.'assets/inc/footer.php');
?>
