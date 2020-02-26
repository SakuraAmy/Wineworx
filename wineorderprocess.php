<!--
    Andrew Grubbs
    Web and Mobile II - ISTE 240
    Date: 5/2/2018
    Instructor - James Habermas*
    Group Project
    Description: Process of getting information, display information and upload in database
-->

<?php
    $path = './';
    require $path.'../../../dbInfo.inc';

    if ($mysqli) {
        //IF we are adding a new user
        if( !empty($_POST['firstCustomerName']) && !empty($_POST['lastCustomerName']) && !empty($_POST['customerEmail']) && !empty($_POST['customerPhone'])){
          $stmt=$mysqli->prepare("insert into wineRegister (firstname, lastname, email, phone, comments) values (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss",$_POST['firstCustomerName'], $_POST['lastCustomerName'], $_POST['customerEmail'], $_POST['customerPhone'], $_POST['comments']);
          $stmt->execute();
          $stmt->close();
        }
        //get contents of table and send back...
        $res=$mysqli->query('select firstname, lastname, email, phone FROM wineRegister');
        if($res){
          while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
              $records[] = $rowHolder;
            }
        }
    }
?>



<?php

	$title= "Thank you";
	$page= "registration";
  	$herotitle = "Thank you";
	$path='./';
	function herobannersetup(){
    $hero='<img src="./assets/images/grape-pressing.png" alt="mockup" />';
    echo '<div align="center" class="container-fluid p-0 m-0">
  		<div class="hero-container hero-maxheight embed-responsive-item">
            <h1>Thank you</h1>
            '.$hero.'
  </div>
  </div>';
  }
	include($path.'assets/inc/header.php');

?>
<?php
//Get the users Information

$custFName = $_POST['firstCustomerName'];
$custLName = $_POST['lastCustomerName'];
$custEmail = $_POST['customerEmail'];
$custPhone = $_POST['customerPhone'];

$priceChilean = 0;
$numOfWine = 0;
if (isset($_POST['numOfWine'])) {
    $priceChilean = 195;
    $numOfWineString = $_POST['numOfWine'];
    switch($numOfWineString) {
        case "one":
            $numOfWine = 1;
            break;
        case "two":
            $numOfWine = 2;
            break;
        case "three":
            $numOfWine = 3;
            break;
        case "four":
            $numOfWine = 4;
            break;
        case "five":
            $numOfWine = 5;
            break;
    }
}

$priceJuice = 0;
$numOfJuice = 0;
if (isset($_POST['numOfJuice'])) {
    $priceJuice = 75;
    $numOfJuiceString = $_POST['numOfJuice'];
    switch($numOfJuiceString) {
        case "one":
            $numOfJuice = 1;
            break;
        case "two":
            $numOfJuice = 2;
            break;
        case "three":
            $numOfJuice = 3;
            break;
        case "four":
            $numOfJuice = 4;
            break;
        case "five":
            $numOfJuice = 4;  
            break;
}

$priceRedWine = 0;
if (isset($_POST['redWine'])) {
    $redWine = $_POST['redWine'];
    foreach ($redWine as $listRedWine) {
        switch ($listRedWine) {
            case "Barbera":
                $priceRedWine = $priceRedWine + 30;
                break;
            case "Cabernet Franc":
                $priceRedWine = $priceRedWine + 22;
                break;
            case "Cabernet Sauvignon":
                $priceRedWine = $priceRedWine + 20;
                break;
            case "Carmenere":
                $priceRedWine = $priceRedWine + 80;
                break;
            case "Malbec":
                $priceRedWine = $priceRedWine + 8;
                break;
            case "Merlot":
                $priceRedWine = $priceRedWine + 17;
                break;
            case "Petite Sirah":
                $priceRedWine = $priceRedWine + 16;
                break;
            case "Pinot Noir":
                $priceRedWine = $priceRedWine + 10;
                break;
            case "Sangiovese":
                $priceRedWine = $priceRedWine + 52;
                break;
            case "Syrah":
                $priceRedWine = $priceRedWine + 50;
                break;
            case "Zinfandel":
                $priceRedWine = $priceRedWine + 17;
                break;
            default:
                $priceRedWine = 0;
                break;
        }
    }
}


$priceWhiteWine = 0;
if (isset($_POST['whiteWine'])) {
    $whiteWine = $_POST['whiteWine'];
    foreach ($whiteWine as $listWhiteWine) {
        switch($listWhiteWine) {
            case "Chardonnay":
                $priceWhiteWine = $priceWhiteWine + 15;
                break;
            case "Gewurztraminer":
                $priceWhiteWine = $priceWhiteWine + 48;
                break;
            case "Moscatel Alejandria":
                $priceWhiteWine = $priceWhiteWine + 50;
                break;
            case "Pinot Grigio":
                $priceWhiteWine = $priceWhiteWine + 24;
                break;
            case "Riesling":
                $priceWhiteWine = $priceWhiteWine + 32;
                break;
            case "Sauvignon Blanc":
                $priceWhiteWine = $priceWhiteWine + 8;
                break;
            case "Viognier":
                $priceWhiteWine = $priceWhiteWine + 27;
                break;
            default:
                $priceWhiteWine = 0;
                break;
        }
    }
}

setlocale(LC_MONETARY, 'en_US');
$totalChileanWine = $numOfWine * $priceChilean;
$totalChileanJuice = $numOfJuice * $priceJuice;
$total = ($priceWhiteWine + $priceRedWine + $totalChileanWine + $totalChileanJuice);


?>


<div class="container inc-margin-container">

	<?php
        foreach($records as $this_row) {
        	if ($this_row['firstname'] == $_POST['firstCustomerName']) {
        	echo '<br>'.$this_row['firstname'] . " " . $this_row['lastname'];
        	echo '<br>'.$this_row['email'];
        	echo '<br>'.$this_row['phone'];
        	break;
        	}
    }
    ?>
    <br>
      <br>Your Wine Order
      <br>
      <br><?php echo $numOfWine ?> Chilean Wine(s): <?php echo money_format("%(#6n", $totalChileanWine) ?>
      <br><?php echo $numOfJuice ?> Chilean Juice(s): <?php echo money_format("%(#6n", $totalChileanJuice) ?>
      <br>Red Wine(s): <?php echo money_format("%(#6n", $priceRedWine) ?>
      <br>White Wine(s): <?php echo money_format("%(#6n", $priceWhiteWine) ?>
      <br>Tax Amount 8%: <?php echo money_format("%(#6n", $tax = $total * .08) ?>
      <br>Total Cost of your order is: <?php echo money_format("%(#6n", $total + $tax); ?>
      <br>
      <br>Thank you for your order.
      <br>
      <br>
      <br>
</div>
    <?php 
}
    ?>  
 <?php
	include($path.'assets/inc/footer.php');
?>