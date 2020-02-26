
<?php
    $path = './';
    require $path.'../../../dbInfo.inc';

    if ($mysqli) {
        //IF we are adding a new user
        if( !empty($_POST['customerName']) && !empty($_POST['customerEmail']) && !empty($_POST['customerPhone']) && !empty($_POST['customerPurchase']) && !empty($_POST['customerMailAddress'])){
          $stmt=$mysqli->prepare("insert into giftForm (fullname, email, phone, purchase, mailAddress) values (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss",$_POST['customerName'], $_POST['customerEmail'], $_POST['customerPhone'], $_POST['customerPurchase'], $_POST['customerMailAddress']);
          $stmt->execute();
          $stmt->close();
        }
        //get contents of table and send back...
        $res=$mysqli->query('select fullname, email, phone, purchase, mailAddress FROM giftForm');
        if($res){
          while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
              $records[] = $rowHolder;
            }
        }
    }
?>

<?php

	$title= "Thank you for your order";
	$page= "giftcertication";
  	$herotitle = "Thank you";
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

<?php
    $name = $_POST['customerName'];
	$email = $_POST['customerEmail'];
    $phone = $_POST['customerPhone'];
    $purchase = $_POST['customerPurchase'];
    $mailAddress = $_POST['customerMailAddress'];

   $priceWine = 0;
    if(isset($_POST['condition']))
    {

	        if(isset($_POST['chileanWinePrice']))
	        {
    			$priceWine =  $priceWine + 195;
            }
            if(isset($_POST['californiaWinePrice']))
            {
    	       $priceWine =  $priceWine + 195;
            }
            if(isset($_POST['italianWinePrice']))
            {
	            $priceWine =  $priceWine + 200;
            }
            if(isset($_POST['fingerWinePrice']))
            {
			   $priceWine =  $priceWine + 275;
			}
			if(isset($_POST['australianWinePrice']))
			{
			   $priceWine =  $priceWine + 225;
			}
			if(isset($_POST['certificateWinePrice']))
			{
			   $priceWine =  $priceWine + 50;
			}
			if(isset($_POST['certificate2WinePrice']))
			{
			   $priceWine =  $priceWine + 100;
			}
		   setlocale(LC_MONETARY, 'en_US');

	}
?>

<div class="container inc-margin-container">
	<?php
        foreach($records as $this_row) {
        	if ($this_row['fullname'] == $_POST['customerName']) {
        	echo '<br>'.$this_row['fullname'];
        	echo '<br>'.$this_row['email'];
        	echo '<br>'.$this_row['phone'];
        	echo '<br>'.$this_row['mailAddress'];
        	break;
        	}
    }
    ?>
	<br>
	<br>Your Wine Order
	<br>
	<br>Total Cost of your order is: <?php echo money_format("%(#6n", $priceWine) ?>
	<br>Thank you for the order. Have a nice day
	<br>
	<br>
</div>
<?php ?>

<?php
	include($path.'assets/inc/footer.php');
?>
