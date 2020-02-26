<?php

	$title= "Home page";
	$page= "home";
  $herotitle = "";
	$path='./';
	function herobannersetup(){
    $hero='<video class="embed-responsive-item" autoplay loop>
								<source src="assets/images/wineworx_homehero.mp4" type="video/mp4">
					 </video>';
    echo '<div align="center" class="embed-responsive embed-responsive-16by9 p-0 m-0">'.$hero.'</div>';
  }
	include($path.'assets/inc/header.php');

?>
<div class="container inc-margin-container">
<br>
    <h1 class="center winecolor"> 2018 Chilean Wine Making</h1>

</div>
<br>
<div class="container-fluid px-0">
    <div class="row">
        <div class="col">
    <figure>
            <img src="./assets/images/Home Page/chilean_wine_making.jpg" alt="Chilean Wine Making" width="100%">
            <figcaption>
                    Chilean Wine Making
            </figcaption>
    </figure>
            </div>

        <div class="col">
    <figure>
            <img src="./assets/images/Home Page/cabernet_Franc.jpg" alt="Cabernet Franc" width="100%">
            <figcaption>
                    Cabernet Franc
            </figcaption>
    </figure>
        </div>
                <div class="col">
    <figure>
            <img src="./assets/images/Home Page/grape_picking.jpg" alt="Grape Picking" width="100%">
            <figcaption>
                    Grape Picking
            </figcaption>
    </figure>
        </div>



        </div>


<div id="firstBox1">
    <div id="firstBox2"><p class="pcenter"><a href="howitwork.php">Do you want to see how it works?</a></p>
    </div>
    </div>
<br><br>

<div id="secondBox1">
    <div id="secondBox2"><p class="pcenter"><a href="stages.php">Click here to see the differnet stages of the wine making</a></p>
    </div>
        </div>

<br><br>
<div class="container">
		<div class="container-item"><h3 class="winecolor center">Gift Certificates in many denominations--  These are very popular and readily available for any occasions</h3></div>



</div>
<br><br>

<div id="bigBox">
    <p>REGISTER<br>Are you interested in the Wine Making? Click on the button to register!</p>
    <div id="button"><p class="pcenter"><a href="registration.php">REGISTER</a></p>
    </div>
</div>
</div>
<br><br>
<?php
	include($path.'assets/inc/footer.php');
?>
