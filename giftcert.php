 <!--
    Amina Mahmood
    Web and Mobile II - ISTE 240
    Date: 5/2/2018
    Instructor - James Habermas*
    Group Project
    Description: Gift Certification page and code
-->

<?php

	$title= "Gift Certifications";
	$page= "gift certification";
  $herotitle = "Gift Certifications";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="mockup" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  											<div class="hero-container hero-maxheight embed-responsive-item">
                          <h1>Gift Certification</h1>
                          '.$hero.'
                        </div>
  										</div>';
  }
	include($path.'assets/inc/header.php');

?>
<br>
<br>
<div class="container inc-margin-container">
<h1>Here is how it worx</h1>
        <p>Dollar Value Certificates</p>
        <p>One share will make 25-26 bottles of finished wine. Over a period of 12 months we will arrange at your convenience 2-3 short meetings to work with you at the Wineworx cellar to complete all the wine making steps. The final step will be bottling your finished wine.</p>
        <p>Available in $50 and $100 deniminations and can beapplied towards any of the wine making experiences listed above.</p>
        <p>Finger Lakes Wine Making Experience - begin by picking grapes at a Finger Lakes vineyard, crush and press, ferment, clarify and finish with bottling your wine 12 months later.</p>
        <br>
        
        <form name="OrderGift" action="GiftCertificationProcess.php" onsubmit="return validateCert();" method="POST">
            <fieldset>
                <p>Your name: * <input type="text" name="customerName" /></p>
                <p>Email Address: * <input type="text" name="customerEmail" placeholder="123@gmail.com" /></p>
                <p>Phone *<input type="text" name="customerPhone" placeholder="555-555-5555" /></p>
                <p>Purchased for: * <input type="text" name="customerPurchase" /></p>
                <p>Mailing Address: * <input type="text" name="customerMailAddress" placeholder="" /></p>
                <br>
                <br>
                <input type="checkbox" name="chileanWinePrice" value="wine" id="chileanWinePrice" /><label for="wine">   Chilean Wine Making 2018 -   $195</label><br/>
                <input type="checkbox" name="californiaWinePrice" value="wine" id="californiaWinePrice" /><label for="wine">   California Wine Making 2018 - $195</label><br/>
                <input type="checkbox" name="italianWinePrice" value="wine" id="italianWinePrice" /><label for="wine">   Italian Wine Making 2018 -  $200</label><br/>
                <input type="checkbox" name="fingerWinePrice" value="wine" id="fingerWinePrice" /><label for="wine">   Finger Lakes Wine Making 2018 - $275</label><br/>
                <input type="checkbox" name="australianWinePrice" value="wine" id="australianWinePrice" /><label for="wine">   Australian Shiraz Wine Making 2018 - $225</label><br/>
                <input type="checkbox" name="certificateWinePrice" value="wine" id="certificateWinePrice" /><label for="wine">   $50.00 - Certificate</label><br/>
                <input type="checkbox" name="certificate2WinePrice" value="wine" id="certificate2WinePrice" /><label for="wine">   $100.00 - Certificate</label><br/>
                <input type="checkbox" name="condition" value="wine" id="agreement" required/><label for="wine">    I read the terms and condiitons associated with this registration and I agree to them</label><br/><br/>
                <input type="submit"  value=" Send Form"  />
            </fieldset>
            <p>To finalize your purchase and be assured of a place, your payment must first be received by us. <br>
            Please send payment to: <br>
            <span>Wineworx <br>
            1026 Castle Bridge Crossing <br>
                Webster, NY 14580</span></p>
            <p>Terms and Conditions: This offer is good for the 2018 season.</p>
        </form>
        </div> 
       
        <br>
        <br>
<?php
	include($path.'assets/inc/footer.php');
?>
