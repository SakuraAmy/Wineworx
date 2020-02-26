<?php

	$title= "How It Worx";
	$page= "how it worx";
  $herotitle = "How It Worx";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-cutting.png" alt="grape cutting" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  											<div class="hero-container hero-maxheight embed-responsive-item">
                          <h1>How It Worx</h1>
                          '.$hero.'
                        </div>
  										</div>';
  }
	include($path.'assets/inc/header.php');

?>

<style>
    h3 {
        color: rgb(168,32,56) !important;
        font-weight: bold !important;
    }
    p,ol {
        font-size: 1.5em !important;
    }
</style>
<div class="container adjust-container-width">
<div class="row">
    <div class="col">
        <br/>
        <h3>Shares</h3>
        <p>We provide you with the flexibility to choose from this year's available grapes or fresh juices to determine the kind of experience and wine you plan to make. Your purchase will be defined in terms of "share", with one share being equivalent to 5 gallons, or 25-26 bottles of wine. </p>
        <br/>

        <h3><span style="font-style:italic;">Wineworx</span> Provides</h3>
        <p>We will provide grapes to be picked at the vineyard or fresh Juices in pails and instruct and guide you in all stages of the process and provide the equipment, chemicals, and supplies you will need. Your wine will be aged in our "cellar" until bottling time.</p>
        <br/>

        <h3>You Provide</h3>
        <p>You will be involved in every stage of the process, from picking grapes (NYS grapes) or inoculating and fermenting your fresh juice  (California, Chilean, Italian, other) to bottling your finished wine. Your commitment to the full process will be essential to mastering the art of wine making.</p>
        <br/>
    </div>
    <!-- slide show pictures -->
    <div class="col">
<br/>
    <div class="col slideshow-container">
        <div class="mySlides slideshow-fade">
            <div class="numbertext">1 / 13</div>
            <img alt="Wineworx" title="Wineworx" src="assets/images/howitworx/picture0.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">2 / 13</div>
            <img alt="Graphs" title="Graphs" src="assets/images/howitworx/picture1.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">3 / 13</div>
            <img alt="Picked Graphs" title="Picked Graphs" src="assets/images/howitworx/picture2.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">4 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture3.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">5 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture4.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">6 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture5.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">7 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture6.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">8 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture7.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">9 / 13</div>
            <img alt="Cutting Graphs" title="Cutting Graphs" src="assets/images/howitworx/picture8.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">10 / 13</div>
            <img alt="Holding Graphs" title="Holding Graphs" src="assets/images/howitworx/picture9.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">11 / 13</div>
            <img alt="Field of Graphs Growing" title="Field of Graphs Growing" src="assets/images/howitworx/picture10.jpg" style="width:100%">
        </div>
        <div class="mySlides slideshow-fade">
            <div class="numbertext">12 / 13</div>
            <img alt="A Group Picture" title="A Group Picture" src="assets/images/howitworx/picture11.jpg" style="width:100%">
        </div>

        <div class="mySlides slideshow-fade">
            <div class="numbertext">13 / 13</div>
            <img alt="Field of Graphs Growing" title="Field of Graphs Growing" src="assets/images/howitworx/picture12.jpg" style="width:100%">
        </div>

        <br>

        <div style="text-align: center">
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
            <span class="slideshow-dot"></span>
        </div>

        <script>
            // slideshow javascript
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("slideshow-dot");
                    for (i = 0; i < slides.length; i++) {
                       slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" slideshow-active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " slideshow-active";
                    setTimeout(showSlides, 5000); // Change image every 5 seconds
                }
        </script>
    </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3>Items Not Included in Your Share Payments</h3>
        <ol>
            <li>Wine Bottles</li>
            <li>Corks and finishing covers</li>
            <li>
                Labels
                <br/>
                At the appropriate time we will provide you with easy information on how to obtain these items from wineworx (if available) or from other vendors.
            </li>
            <li>
                Food and beverage*
                <br/>
                Grape picking, crushing and pressing are activities that will take place at the vineyard and will probably run over lunch. You are responsible to bring lunch, snacks and beverages to satisfy your needs.
            </li>
            <li>
                Transportation*
                <br/>
                The location of the vineyard is in Rushville, NY, which is about 10 miles south of Canandaigua. You are responsible for your own transportation to and from the vineyard . A map will be provided to help you find the place.
            </li>
        </ol>
        <p>* For Finger Lakes experiences, grape picking only.</p>
    </div>
    <div class="col">
        <img height="80%" width="100%" alt="Wine Icon" title="Wine Icon" src="<?php $path ?>assets/images/howitworx/np_wine_166661_A82038.svg">
    </div>
</div>
</div>
<link href="<?php echo $path;?>assets/css/slideshow.css" rel="stylesheet">
<?php
	include($path.'assets/inc/footer.php');
?>
