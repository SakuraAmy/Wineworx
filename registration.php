<!--
    Andrew Grubbs
    Web and Mobile II - ISTE 240
    Date: 5/2/2018
    Instructor - James Habermas*
    Group Project
    Description: Register page and codes
-->

<?php

	$title= "Registration";
	$page= "registration";
  	$herotitle = "Registration";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="mockup" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  		<div class="hero-container hero-maxheight embed-responsive-item">
            <h1>Registration</h1>
            '.$hero.'
  </div>
  </div>';
  }
	include($path.'assets/inc/header.php');

?>
<br>
<br>
<div class="container inc-padding-container">
        <form name="OrderForm" action="wineorderprocess.php" id="wineForm" onsubmit="return validateForm()" method="POST">
            <div id="contactForm">
            <p>First Name: * <input type="text" name="firstCustomerName" placeholder="First Name" /></p>
            <p>Last Name: * <input type="text" name="lastCustomerName" placeholder="Last Name"/></p>
            <p>Email Address: * <input type="text" name="customerEmail" placeholder="Email Address"/></p>
            <p>Phone: * <input type="text" name="customerPhone" placeholder="555-555-5555"/></p>
            </div> <!-- end of contactForm -->
            <div>
            	<div>
            <p><input type="checkbox" id="wine" name="wine" onchange="jsfunct1()" /><label for="wine">   Chilean Wine (5 gal. per Share) - $195</label></p>
            <p id="numOfWine" style="display: none">
                Number of Shares &nbsp
                <select width="90%" name="numOfWine">
                    <option value='one'>1</option>
                    <option value='two'>2</option>
                    <option value='three'>3</option>
                    <option value='four'>4</option>
                    <option value='five'>5</option>
                </select>
            </p>
            	</div>
            	<div>
            <p><input type="checkbox" id="juice" name="juice" onchange="jsfunct2()" /><label for="juice">   Chilean Juice (6 gal. per Pail) - $75</label></p>
            <p id="numOfJuice" style="display: none">
            	Number of Pails &nbsp
                <select width="90%" name="numOfJuice">
                    <option value='one'>1</option>
                    <option value='two'>2</option>
                    <option value='three'>3</option>
                    <option value='four'>4</option>
                    <option value='five'>5</option>
                </select>
            </p>
            </div>
            </div> <!-- end of previous div -->
         <div class="row">
            	<div class="col-xs-6">
            		<fieldset>
                        <legend>Red Grape </legend>
                            <input type="checkbox" name="redWine[]" value="Barbera"><label>  Barbera - $30</label><br>
                            <input type="checkbox" name="redWine[]" value="Cabernet Franc"><label>   Cabernet Franc - $22</label><br>
                            <input type="checkbox" name="redWine[]" value="Cabernet Sauvignon"><label>   Cabernet Sauvignon - $20  </label><br>
                            <input type="checkbox" name="redWine[]" value="Carmenere"><label>    Carmenere - $80</label><br>
                            <input type="checkbox" name="redWine[]" value="Malbec"><label>   Malbec - $8</label><br>
                            <input type="checkbox" name="redWine[]" value="Merlot"><label>   Merlot - $17</label><br>
                            <input type="checkbox" name="redWine[]" value="Petite Sirah"><label>  Petite Sirah - $16</label><br>
                            <input type="checkbox" name="redWine[]" value="Pinot Noir"><label>    Pinot Noir - $10</label><br>
                            <input type="checkbox" name="redWine[]" value="Sangiovese"><label>   Sangiovese - $52</label><br>
                            <input type="checkbox" name="redWine[]" value="Syrah"><label>    Syrah - $50</label><br>
                            <input type="checkbox" name="redWine[]" value="Zinfandel"><label>    Zinfandel - $17</label><br>
                    </fieldset>
            	</div><!-- end of red-left -->
            	<div class="col-md-4">
            		<fieldset>
                    <legend>White Grape </legend>
                            <input type="checkbox" name="whiteWine[]" value="Chardonnay"><label>   Chardonnay - $15</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Gewurztraminer"><label>   Gewurztraminer - $48</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Moscatel Alejandria"><label> Moscatel Alejandria - $50</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Pinot Grigio"><label>  Pinot Grigio - $24</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Riesling"><label> Riesling - $32</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Sauvignon Blanc"><label>   Sauvignon Blanc - $8</label><br>
                            <input type="checkbox" name="whiteWine[]" value="Viognier"><label> Viognier - $27</label>
                    </fieldset>
            	</div><!-- end of white-right -->
            </div><!-- end of grape -->
            <div class="row">
                <div class="col-lg-12" style="margin-top: 10px;">
                    <p>Comments:<br>
                        <textarea rows="6" cols="50" placeholder="Enter here..." name="comments" id="comments"></textarea>
                    </p>
                    <p><input type="submit"  value=" Send Form"  /></p>
                </div> <!-- end of commentBox -->
            </div> <!-- end of commentBoxGroup -->
        </form>

        </div> <!-- end of container -->
<br>
<br>
<?php
	include($path.'assets/inc/footer.php');
?>
