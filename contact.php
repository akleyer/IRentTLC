<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Welcome to IRentTLC. The place where drivers matter. Rent Luxary. Drive Comfortably. Earn More.">
    <meta name="keywords" content="IRentTLC, Rent, TLC, Luxary, Uber, Drive, Taxi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IRentTLC - Contact us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
    	
    	@media (max-width:600px){
    		.footer{
    			margin:0;
    		}
    	}
    	
    </style>
    
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">IRENT TLC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
     	<li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
     	<li><a href="rent.php">Rent a Car</a></li>
        <li><a href="iview.html">IView</a></li>
        <li><a href="creditcard.html">Credit Cards</a></li>
        <li class="active"><a href="contact.html">Contact Us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
<div class="container" style="padding:30px 0 0 0; margin-bottom:40px;">
<h1 class="page-header text-center">Get in Touch</h1>
</div>
</div>
	
		<div class="container" id="contact">
			
				<div class="row">
					<div class="col-sm-4">
						<address>
							<strong>Contact List:</strong><br><br>
							<strong>Email: </strong><a href="mailto:#"> IRentTLC@gmail.com</a><br>
							<strong>Stephen Diemer</strong> - 917.803.4537<br>
							<strong>Rui Barros</strong> - 347.723.6889<br>
							<strong>David Morfe</strong> - 201.274.5680<br>
							<strong>Zachary Diemer</strong> - 646.753.0930
						</address>
						<a class="btn btn-social-icon btn-twitter">
    					<i class="fa fa-twitter"></i>
  						</a>
					</div>
					
<script>

function change(col) {
document.getElementById('changeColor').style.backgroundColor=col;
}
function changet(ext){
document.getElementById('changeColor').style.color=ext;
}

</script>
					<div class="col-sm-8 contact-form">
						<form id="contact" method="post" class="form" role="form" action="contact.php">
							<div class="row">
								<div class="col-xs-6 col-md-6 form-group">
									<input class="form-control" id="firstname" name="firstname" placeholder="First Name" type="text" required autofocus />
								</div>
								<div class="col-xs-6 col-md-6 form-group">
									<input class="form-control" id="lastname" name="lastname" placeholder="Last Name" type="text" required autofocus />
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-md-6 form-group">
									<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
								</div>
								<div class="col-xs-6 col-md-6 form-group">
									<input class="form-control" id="number" name="number" placeholder="Phone Number" type="text" required autofocus />
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required autofocus/>
								</div>
							</div>
								<br>
									<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
								<br />
								<div class="row">
									<div class="col-xs-12 col-md-12 form-group">
										<button class="btn btn-primary pull-right" type="submit" style="margin-bottom:40px;" name="submit" onclick="enter(this.href)">Submit</button>
									</div>
								</div>
						</form>
					</div>
				</div>
		</div>
	</div>
  
<div class="row">
    <div class="col-md-12">
<div class="text-center" id="changeColor">
    <?php 
$link = mysqli_connect('localhost', 'cl53-irenttlc', 'jsFdq^4kh', 'cl53-irenttlc');
if (mysqli_connect_error()) {
	
	die('Could not connect to the database');

}
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if(isset($_POST['submit'])){
    $query = "INSERT INTO `Contact` (`FirstName`, `LastName`, `Email`, `Phone`, `Subject`, `Message`) VALUES ('".$first_name."', '".$last_name."', '".$email."','".$phone."' , '".$subject."', '".$message."')";
    $result = mysqli_query($link, $query);
    if($result)
		echo "Thank you!";
	else 
   		echo "Error: " . $query . "<br>" . mysqli_error($link);
	}
?>
</div>
    </div>
      </div>
      </div>

<? if(isset($_POST['submit'])){ ?>
<script>
 change('forestgreen');
 changet('white');
</script>
<? } ?>
  	<div class="footer">
      	<div class="container">
        	<p class="muted credit">&copy;&nbsp;IRentTLC</p>
      	</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>
