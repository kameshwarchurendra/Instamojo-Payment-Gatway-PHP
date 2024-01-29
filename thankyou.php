<?php
session_start();
if(!isset($_SESSION["oid"])){
	header("location:/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyAshray  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <!--suppress JSUnresolvedLibraryURL -->
	<!-- old -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="/img/logo.jpg">


<!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/star-rating.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-uni/theme.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<script src="auto_complete.js" type="text/javascript" ></script>
	<style>
		.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#6495ED;
   color: white;
   text-align: center;
}
		
		.heading {
  font-size: 15px;
  margin-right: 15px;
}

.fa {
  font-size: 15px;
}

.checked {
  color: orange;
}
	p{
  margin  : 0 0 1.5em;
  padding : 0;
}

a{
  color           : #9c3;
  text-decoration : none;
}
li:hover { 
  background-color:#dcdcdc;
}
a:hover { 
  background-color:#dcdcdc;
}

.starRating:not(old){
  display        : inline-block;
  width          : 7.5em;
  height         : 1.5em;
  overflow       : hidden;
  vertical-align : bottom;
}

.starRating:not(old) > input{
  margin-right : -100%;
  opacity      : 0;
}

.starRating:not(old) > label{
  display         : block;
  float           : right;
  position        : relative;
  background      : url('css/star-off.svg');
  background-size : contain;
}

.starRating:not(old) > label:before{
  content         : '';
  display         : block;
  width           : 1.5em;
  height          : 1.5em;
  background      : url('css/star-on.svg');
  background-size : contain;
  opacity         : 0;
  transition      : opacity 0.2s linear;
}


.starRating :checked ~ label:before{
  opacity : 1;
}

		
		div.border{
  margin:0px;
  border: 1px solid #ccc;
  float: left;
  width:200px;
height: 200px;
		background-color: aliceblue;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 50px;
  text-align: center;
	float: right;
}
			.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#6495ED;
   color: white;
   text-align: center;
}
		input[type=text]:focus {
  width: 100%;
}

		
	div.gallery {
  margin:0px;
  border: 1px solid #FFF;
  float: left;
  width: 180px;
		background-color: aliceblue;
}
		div.border{
  margin: 0px;
  border: 1px solid #ccc;
  float: left;
  width:200px;
height: 200px;
		background-color: aliceblue;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 50px;
  text-align: center;
	float: right;
}
	.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
	
	.caption {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
	
	</style>
</head>
<body>

<nav class="navbar navbar-default" style="background-color:#6495ED">
  <div class="container-fluid">
    <div class="navbar-header">
		 <button type="button" class="navbar-toggle left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <img src="/img/logo.png" alt="b1"style="width:100px; height:50px;"><a class="navbar-brand" href="#" style="color:black"> MyAshray </a>
    </div>
	  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/Owner/profile" style="color:black"><b>Home</b></a></li>
      <li><a href="/Owner/aboutus1/" style="color:black">AboutUs</a></li>

      <li><a href="/Owner/boys/"  style="color:black">Boys</a></li>
      <li><a href="/Owner/girls/"  style="color:black">Girls</a></li>
	 <li><a href="/Owner/Famile/" style="color:black">Family</a></li>
	  <li><a href="/Owner/shops/"  style="color:black">Shop</a></li>
		<?php
		/*
	include('db.php');
			$category_query = "SELECT * FROM category";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["id"];
			$cat_name = $row["name"];
			echo "
					<li><a href='#' class='category' cid='$cat_name' style='color:white;'>$cat_name</a></li>";
		}
	}*/
		?>
    </ul>
		  <form action="/search_login/" method="post"  class="navbar-form navbar-left">
			  <div class="input-group">
    <input type="text" name="keywords" required  id="search" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" name="search" type="submit">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </div>
  </div>
</form>
		 <ul class="nav navbar-nav navbar-right" >
			 <?php
/*include('geoplugin.class.php');
//echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])))
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip='$user_ip'"));
$country = $geo["geoplugin_countryName"];
//$place = $geo["geoplugin_place"];
$city = $geo["geoplugin_city"];
$latitude=$geo["geoplugin_latitude"];
$longitude=$geo["geoplugin_longitude"];*/
?>
			 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black"><span class="glyphicon glyphicon-user" style="color:black"></span><b><?php echo "Hi,".$_SESSION["name"]; ?></b>	<span class="glyphicon glyphicon-menu-down" style="color:black"></span></a>
			<ul class="dropdown-menu" style="background-color:#6495ED">
			    <li><a href="/Owner/product" style="text-decoration:none; color:black;">Product</a></li>
			    <li class="divider"></li>
						<li><a href="/Owner/Owner_order" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart">Order</a></li>
						
						<li class="divider"></li>
						<li><a href="/Owner/change" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-edit"></span>Change Password</a></li>
						<li class="divider"></li>
						<li><a href="/Owner/logout/" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-off">	</span>Logout</a></li>
			</ul></li>
      </ul>
	  </div>
  </div>
</nav>

 <?php
include('db.php');
include 'src/instamojo.php';

$api = new Instamojo\Instamojo('000501ec3652a41a8014de22c7a9798f', '37d74547c852b5cf061e017c536b693a','https://www.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];
$prod_id= $_POST["product_id"];
$o_id= $_POST["owner_id"];


try {
    $response = $api->paymentRequestStatus($payid);
    date_default_timezone_set("Asia/Calcutta");
    $payment_date=date(" Y-m-d h:i:sa");
    $expiri= $_SESSION["expiry"];
    $day=30*$expiri;
    $expiry_date=date('Y-m-d H:i:sa', strtotime("+$day  day "));
    $o_id=$_SESSION["oid"];
    $sql="SELECT * FROM owner_home WHERE owner_id='$o_id' ";
     $run_query = mysqli_query($con,$sql);
	   while($row = mysqli_fetch_array($run_query,MYSQLI_ASSOC))
	   {
	       
    $payment_id=  $response['payments'][0]['payment_id'] ;
    $name= $response['payments'][0]['buyer_name']  ;
    $email= $response['payments'][0]['buyer_email'];
    $status= $response['payments'][0] ['status']  ;
	$amount= $response['payments'][0] ['amount']  ;
	$pro_id=$row['home_id'];
	$own=$row['owner_id'];
	$sql = "INSERT INTO `payment` 
		( `payment_id`, `owner_id`,`house_id`,`name`,
		`email`, `amount`,  `payment_date`, `expiry_date`,`status`) 
		VALUES (' $payment_id','$own',' $pro_id', '$name', 
		' $email', '$amount','$payment_date','$expiry_date',' $status')";
		if(mysqli_query($con,$sql)){
		echo'
		 <div class="panel panel-success">
    <div class="panel-heading">Success Message</div>
    <div class="panel-body" style="color:green">Complete Your Registration <a href="/Owner/product"> Go To My Product</a></div>
  </div>
		';
}
	   }   
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>


      
    </div> <!-- /container -->


 <footer class="footer">
	 <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://www.ashrays.in/" style="color:white"> www.Ashrays.in</a>
    </div>
</footer>
  </body>
	
</html>