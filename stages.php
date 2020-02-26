<?php

	$title= "Stages of Wine Making";
	$page= "stages of wine making";
  $herotitle = "Stages of Wine Making";
  $path='./';
  function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="grape pressing" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  											<div class="hero-container hero-maxheight embed-responsive-item">
                          <h1>Stages of Wine Making</h1>
                          '.$hero.'
                        </div>
  										</div>';
  }
	include($path.'assets/inc/header.php');

?>
<!--Make sure the image and  -->
<div class="container" style="padding: 15px; margin: 0px auto;">
    <div class="row rowImg">
        <div class="col colImg fading">
<h2 class="red">Grape Picking</h2>
<p class="para">You will roam the vineyard and pick enough grapes to ultimately make your 2013 wine vintage</p>
        </div>
        <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/picking.jpg" alt="picking grapes">
        </div>
    </div>
    <div class="row rowImg">
        <div class="col colImg fading">
            <img class="img-fluid" src="assets/images/StageOfWineMaking/winecrushing.jpg"  alt="crushing">
        </div>
        <div class="col colImg fading">
            <h2 class="red">Crushing</h2>
<p class="para">Once you pick what you need and then you will participate in crushing and de-stemming the grapes into a mash.</p>
        </div>
    </div>
<div class="row rowImg">
        <div class="col colImg fading">
<h2 class="red">Pressing(whites)</h2>
<p class="para">You will be pressing this mash into  clean juice while add the yeast and other necessary ingredients.</p>
        </div>
        <div class="col colImg fading">
            <img class="img-fluid" src="assets/images/StageOfWineMaking/whitepressing.jpg" alt="pressing white grapes">
        </div>
</div>
<div class="row rowImg">
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/fermentationWhite.jpg" alt="fermentation white grapes">
    </div>
    <div class="col colImg fading">
    <h2 class="red">Fermentation(whites)</h2>
        <p class="para">At this point in the wine making process the must will need time (several weeks) to complete the conversion from grape juice to wine. This will occur under our watchful eyes in our company wine cellar.</p>
    </div>
    </div>
<div class="row rowImg">
    <div class="col colImg fading">
    <h2 class="red">Fermentation(red)</h2>
        <p class="para">At this point in the wine making process the mash will need time (several weeks) to complete the full conversion to wine. This will occur under watchful eyes in our wine cellar.</p>
    </div>
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/fermentationRed.jpg" alt="fermentation red grapes">
    </div>
    </div>
<div class="row rowImg">
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/pressing.png" alt="pressing red grapes">
    </div>
    <div class="col colImg fading">
        <h2 class="red">Pressing(red)</h2>
        <p class="para">After the initial fermentation (primary) of about one week, you will then press this mash into must which will then continue to ferment (secondary fermentation) for several weeks.</p>
    </div>
    </div>
<div class="row rowImg">
    <div class="col colImg fading">
    <h2 class="red">Fining</h2>
        <p class="para">On two occasions over the following several months you will return to our wine cellar to transfer your wine to a clean vessel (rack) and check the progress of your wine.</p>
    </div>
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/winefining.jpg" alt="wine fining">
    </div>
    </div>
<div class="row rowImg">
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/winebottling.jpg" alt="wine bottling">
    </div>
    <div class="col colImg fading">
        <h2 class="red">Bottling</h2>
        <p class="para">This final stage includes transferring your wine from vessels to indivdual bottles (.750 L.), capping your bottles, and affixing your personalized labels.</p>
    </div>
    </div>
<div class="row rowImg">
    <div class="col colImg fading">
    <h2 class="red">Enjoy Your wine</h2>
        <p class="para">Whether you enjoy it alone or share with family and friends, you will have bragging rights... You are now a home wine maker!</p>
    </div>
    <div class="col colImg fading">
        <img class="img-fluid" src="assets/images/StageOfWineMaking/enjoywine.jpg" alt="group enjoying wine">
    </div>
    </div>
</div>
<?php
	include($path.'assets/inc/footer.php');
?>
