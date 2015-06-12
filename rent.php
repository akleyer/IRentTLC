<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Welcome to IRentTLC. The place where drivers matter. Rent Luxary. Drive Comfortably. Earn More.">
    <meta name="keywords" content="IRentTLC, Rent, TLC, Luxary, Uber, Drive, Taxi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IRentTLC - Rent</title>

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
		#name{
			margin-bottom:15px;
		}
		#email{
			margin-bottom:15px;
		}
		.col-md-4{
			text-align:center;
			margin-bottom:15px;
		}
		.col-md-8{
			text-align:center;
			font-size:0.9em;
		}
		#submit-button{
			width:90%!important;
		}
		.col-md-12{
			text-align:center;
		}
		.footer{
			margin:0;
		}
        #inquire-vehicle{
            font-size:2.3em;   
        }
	}
	.btn{
		width:100%;
		background-color:white;
		color:forestgreen;
		font-weight:bold;
	}
  
  </style>
  
  </head>
  <body onLoad="window.scroll(0, 0)">
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
     	<li class="active"><a href="rent.php">Rent a Car</a></li>
        <li><a href="iview.html">IView</a></li>
        <li><a href="creditcard.html">Credit Cards</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron" style="padding:10px 0 0 0">
<div class="container text-center" id="inventory" style="margin-top:40px">
        <div class="row">
    	    <div class="col-lg-12">
                <h1 class="page-header">Inventory</h1>
            </div>
        </div>  
</div> 
</div>

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6 hidden-xs visible-sm visible-md visible-lg" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0"><img src="Pictures/car.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="Pictures/car1.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="Pictures/car2.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="Pictures/car3.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="Pictures/car4.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="Pictures/car5.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="Pictures/car6.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="Pictures/car7.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="Pictures/car8.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="Pictures/car9.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="Pictures/car10.png"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="Pictures/car.png"></div>
                                    
                                    <div class="item" data-slide-number="1">
                                        <img src="Pictures/car1.png"></div>
                                    
                                    <div class="item" data-slide-number="2">
                                        <img src="Pictures/car2.png"></div>
                                    
                                    <div class="item" data-slide-number="3">
                                        <img src="Pictures/car3.png"></div>
                                    
                                    <div class="item" data-slide-number="4">
                                        <img src="Pictures/car4.png"></div>
                                    
                                    <div class="item" data-slide-number="5">
                                        <img src="Pictures/car5.png"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="Pictures/car6.png"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="Pictures/car7.png"></div>

                                    <div class="item" data-slide-number="8">
                                        <img src="Pictures/car8.png"></div>

                                    <div class="item" data-slide-number="9">
                                        <img src="Pictures/car9.png"></div>

                                    <div class="item" data-slide-number="10">
                                        <img src="Pictures/car10.png"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:none">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background:none">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>

<div class="jumbotron other-color" style="margin-top:30px;margin-bottom:50px">

<div class="container text-center" id="inquire">
        <div class="row">
    	    <div class="col-lg-12">
                <h2 class="page-header" id="inquire-vehicle">Inquire about a Vehicle</h2>
            </div>
        </div>  
</div> 

<form method="post" action="rent.php" id="my_form">
<div class="container">
	<div class="row">
		<div class="form-group col-md-12">
		<div class="col-md-7">
				<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
			</div>
			<div class="col-md-5 text-center">
			<input type="hidden" name="topic" id="topic">
			<div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn" data-target="#" href="/page.html" style="width:100%">
                Choose a vehicle <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
    		<li class="text-center">Make Name</li>
    		<li class="divider"></li>
    		<li class="dropdown-submenu"><a tabindex="-1">A-D</a>
              <ul class="dropdown-menu">
            	<li class="dropdown-submenu"><a tabindex="-1">Acura</a>
              	<ul class="dropdown-menu" name="vehicle">
                  <li value="ILX"><a tabindex="-1" href="#bottom">ILX</a></li>
                  <li><a tabindex="-1" href="#bottom">MLX</a></li>
                  <li><a tabindex="-1" href="#bottom">RLX</a></li>
                  <li><a tabindex="-1" href="#bottom">TL</a></li>
                  <li><a tabindex="-1" href="#bottom">TSX</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Audi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">A4</a></li>
              		<li><a tabindex="-1" href="#bottom">A5</a></li>
              		<li><a tabindex="-1" href="#bottom">Q5</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">BMW</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">3 Series</a></li>
              		<li><a tabindex="-1" href="#bottom">5 Series</a></li>
              		<li><a tabindex="-1" href="#bottom">X1</a></li>
              		<li><a tabindex="-1" href="#bottom">X3</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Buick</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Enclave</a></li>
              		<li><a tabindex="-1" href="#bottom">Encore</a></li>
              		<li><a tabindex="-1" href="#bottom">LaCrosee</a></li>
              		<li><a tabindex="-1" href="#bottom">Verano</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Cadillac</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">CTS Coupe</a></li>
              		<li><a tabindex="-1" href="#bottom">CTS Sedan</a></li>
              		<li><a tabindex="-1" href="#bottom">SRX</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chevrolet</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Avalanche</a></li>
              		<li><a tabindex="-1" href="#bottom">Camaro</a></li>
              		<li><a tabindex="-1" href="#bottom">Captiva Sport Fleet</a></li>
              		<li><a tabindex="-1" href="#bottom">Corvette</a></li>
              		<li><a tabindex="-1" href="#bottom">Equinox</a></li>
              		<li><a tabindex="-1" href="#bottom">Malibu</a></li>
              		<li><a tabindex="-1" href="#bottom">Silverado 1500</a></li>
              		<li><a tabindex="-1" href="#bottom">Silverado 2500</a></li>
              		<li><a tabindex="-1" href="#bottom">Sonic Suburban</a></li>
              		<li><a tabindex="-1" href="#bottom">Tahoe</a></li>
              		<li><a tabindex="-1" href="#bottom">Traverse</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chrysler</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">200</a></li>
              		<li><a tabindex="-1" href="#bottom">300</a></li>
              		<li><a tabindex="-1" href="#bottom">Crossfire</a></li>
              		<li><a tabindex="-1" href="#bottom">Town and Country</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Dodge</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Avenger</a></li>
              		<li><a tabindex="-1" href="#bottom">Caliber</a></li>
              		<li><a tabindex="-1" href="#bottom">Charger</a></li>
              		<li><a tabindex="-1" href="#bottom">Durango</a></li>
              		<li><a tabindex="-1" href="#bottom">Grand Caravan</a></li>
              		<li><a tabindex="-1" href="#bottom">Journey</a></li>
              		<li><a tabindex="-1" href="#bottom">Ram 1500</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">F-J</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Ford</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">C-Max Energi</a></li>
              		<li><a tabindex="-1" href="#bottom">Edge</a></li>
              		<li><a tabindex="-1" href="#bottom">Escape</a></li>
              		<li><a tabindex="-1" href="#bottom">Expedition</a></li>
              		<li><a tabindex="-1" href="#bottom">Explorer</a></li>
              		<li><a tabindex="-1" href="#bottom">F-150</a></li>
              		<li><a tabindex="-1" href="#bottom">Fiesta</a></li>
              		<li><a tabindex="-1" href="#bottom">Focus</a></li>
              		<li><a tabindex="-1" href="#bottom">Fusion</a></li>
              		<li><a tabindex="-1" href="#bottom">Fusion Energi</a></li>
              		<li><a tabindex="-1" href="#bottom">Mustang</a></li>
              		<li><a tabindex="-1" href="#bottom">Taurus</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">GMC</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Acadia</a></li>
              		<li><a tabindex="-1" href="#bottom">Sierra 1500</a></li>
              		<li><a tabindex="-1" href="#bottom">Yukon</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Honda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Accord</a></li>
              		<li><a tabindex="-1" href="#bottom">Accord Sedan</a></li>
              		<li><a tabindex="-1" href="#bottom">Civic</a></li>
              		<li><a tabindex="-1" href="#bottom">Cr-V</a></li>
              		<li><a tabindex="-1" href="#bottom">Odyssey</a></li>
              		<li><a tabindex="-1" href="#bottom">Pilot</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Hyundai</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Accent</a></li>
              		<li><a tabindex="-1" href="#bottom">Azera</a></li>
              		<li><a tabindex="-1" href="#bottom">Elantra</a></li>
              		<li><a tabindex="-1" href="#bottom">Genesis</a></li>
              		<li><a tabindex="-1" href="#bottom">Santa Fe</a></li>
              		<li><a tabindex="-1" href="#bottom">Santa Fe Sport</a></li>
              		<li><a tabindex="-1" href="#bottom">Sonata</a></li>
              		<li><a tabindex="-1" href="#bottom">Tucson</a></li>
              		<li><a tabindex="-1" href="#bottom">Veloster</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Infiniti</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">EX35</a></li>
              		<li><a tabindex="-1" href="#bottom">FX35</a></li>
              		<li><a tabindex="-1" href="#bottom">G25 Sedan</a></li>
              		<li><a tabindex="-1" href="#bottom">G37</a></li>
              		<li><a tabindex="-1" href="#bottom">Q50</a></li>
              		<li><a tabindex="-1" href="#bottom">QX56</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jaguar</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">xf</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jeep</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Cherokee</a></li>
              		<li><a tabindex="-1" href="#bottom">Compass</a></li>
              		<li><a tabindex="-1" href="#bottom">Grand Cherokee</a></li>
              		<li><a tabindex="-1" href="#bottom">Liberty</a></li>
              		<li><a tabindex="-1" href="#bottom">Patriot</a></li>
              		<li><a tabindex="-1" href="#bottom">Wrangler</a></li>
              		<li><a tabindex="-1" href="#bottom">Wrangler Unlimited</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">K-Me</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Kia</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Forte Koup</a></li>
              		<li><a tabindex="-1" href="#bottom">Optim</a></li>
              		<li><a tabindex="-1" href="#bottom">Sedona</a></li>
              		<li><a tabindex="-1" href="#bottom">Sorento</a></li>
              		<li><a tabindex="-1" href="#bottom">Sportage</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lexus</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">CT 200h</a></li>
              		<li><a tabindex="-1" href="#bottom">ES 350</a></li>
              		<li><a tabindex="-1" href="#bottom">GS 350</a></li>
              		<li><a tabindex="-1" href="#bottom">GX 460</a></li>
              		<li><a tabindex="-1" href="#bottom">IS 250</a></li>
              		<li><a tabindex="-1" href="#bottom">LS 460</a></li>
              		<li><a tabindex="-1" href="#bottom">RX 350</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lincoln</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">MKX</a></li>
              		<li><a tabindex="-1" href="#bottom">MKZ</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mazda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">CX-5</a></li>
              		<li><a tabindex="-1" href="#bottom">CX-7</a></li>
              		<li><a tabindex="-1" href="#bottom">CX-9</a></li>
              		<li><a tabindex="-1" href="#bottom">MAZDA3</a></li>
              		<li><a tabindex="-1" href="#bottom">MAZDA6</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercedes</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">C-Class</a></li>
              		<li><a tabindex="-1" href="#bottom">E-Class</a></li>
              		<li><a tabindex="-1" href="#bottom">GL-Class</a></li>
              		<li><a tabindex="-1" href="#bottom">GLK-Class</a></li>
              		<li><a tabindex="-1" href="#bottom">M-Class</a></li>
              		<li><a tabindex="-1" href="#bottom">SLK-Class</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercury</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Mariner</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mi-Sc</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">MINI</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Cooper Clubman</a></li>
              		<li><a tabindex="-1" href="#bottom">Cooper Countryman</a></li>
              		<li><a tabindex="-1" href="#bottom">Cooper Hardtop</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mitsubishi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Outlander</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Nissan</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">370Z</a></li>
              		<li><a tabindex="-1" href="#bottom">Altima</a></li>
              		<li><a tabindex="-1" href="#bottom">Armada</a></li>
              		<li><a tabindex="-1" href="#bottom">Cube</a></li>
              		<li><a tabindex="-1" href="#bottom">Frontier</a></li>
              		<li><a tabindex="-1" href="#bottom">JUKE</a></li>
              		<li><a tabindex="-1" href="#bottom">Maxima</a></li>
              		<li><a tabindex="-1" href="#bottom">Murano</a></li>
              		<li><a tabindex="-1" href="#bottom">Pathfinder</a></li>
              		<li><a tabindex="-1" href="#bottom">Quest</a></li>
              		<li><a tabindex="-1" href="#bottom">Rogue</a></li>
              		<li><a tabindex="-1" href="#bottom">Sentra</a></li>
              		<li><a tabindex="-1" href="#bottom">Titan</a></li>
              		<li><a tabindex="-1" href="#bottom">Versa</a></li>
              		<li><a tabindex="-1" href="#bottom">Versa Note</a></li>
              		<li><a tabindex="-1" href="#bottom">Xterra</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Saturn</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Sky Red Line</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Scion</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">tC</a></li>
              		<li><a tabindex="-1" href="#bottom">xB</a></li>
              		<li><a tabindex="-1" href="#bottom">Smart</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Su-Z</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Subaru</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Forester</a></li>
              		<li><a tabindex="-1" href="#bottom">Legacy</a></li>
              		<li><a tabindex="-1" href="#bottom">Outback</a></li>
              		<li><a tabindex="-1" href="#bottom">Tribeca</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Toyota</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Avalon</a></li>
              		<li><a tabindex="-1" href="#bottom">Camry</a></li>
              		<li><a tabindex="-1" href="#bottom">Corolla</a></li>
              		<li><a tabindex="-1" href="#bottom">Highlander</a></li>
              		<li><a tabindex="-1" href="#bottom">Prius</a></li>
              		<li><a tabindex="-1" href="#bottom">RAV</a></li>
              		<li><a tabindex="-1" href="#bottom">Sienna</a></li>
              		<li><a tabindex="-1" href="#bottom">Solara</a></li>
              		<li><a tabindex="-1" href="#bottom">Tundra</a></li>
              		<li><a tabindex="-1" href="#bottom">Venza</a></li>
              		<li><a tabindex="-1" href="#bottom">Yaris</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volkswagen</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">Beetle Coupe</a></li>
              		<li><a tabindex="-1" href="#bottom">GTI</a></li>
              		<li><a tabindex="-1" href="#bottom">Jeta</a></li>
              		<li><a tabindex="-1" href="#bottom">Passat</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volvo</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#bottom">C30</a></li>
              		<li><a tabindex="-1" href="#bottom">S60</a></li>
              		<li><a tabindex="-1" href="#bottom">XC60</a></li>
              		<li><a tabindex="-1" href="#bottom">XC70</a></li>
              	</ul>
              </li>
              </ul>
              </li>
            </ul>
        </div>
        </div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="col-md-7">
				<input class="form-control" id="email" name="email" placeholder="Email" type="email" required autofocuse/>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="phone" name="phone" placeholder="Phone #" type="text" required />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="col-md-7">
				<div class="col-md-8">
					<label style="color:white">Are you a Certified NYC TLC Driver?</label>
				</div>
				<div class="col-md-4">
					<label class="radio-inline" style="color:white"><input id="associatedyes" name="optradio" type="radio" value="yes"/>Yes</label>
					<label class="radio-inline" style="color:white"><input id="associatedno" name="optradio" type="radio" value="no"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="name" name="Tlcnum" placeholder="If Yes, please enter your NYC TLC Number" type="text"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="col-md-7">
				<div class="col-md-8">
					<label style="color:white">Are you associated to Taxi/Livery Base?<label>
				</div>
				<div class="col-md-4">
					<label class="radio-inline" style="color:white"><input id="associatedyes1" name="optradio1" type="radio" value="yes"/>Yes</label>
					<label class="radio-inline" style="color:white"><input id="associatedno1" name="optradio1" type="radio" value="no"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="name" name="company" placeholder="If Yes, please enter the name of the base" type="text"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<input type="submit" name="submit" value="Submit" class="btn btn-success" style="width:100%;margin-bottom:10px;" id="submit-button"/>
			</div>
		</div>
	</div>
</div>
</form>

<?php 

$link = mysqli_connect('localhost', 'cl53-irenttlc', 'jsFdq^4kh', 'cl53-irenttlc');
if (mysqli_connect_error()) {
	
	die('Could not connect to the database');

}
$name = $_POST['name'];
$vehicle = $_POST['topic'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$certified_pre = $_POST['optradio'];

if($certified_pre == "yes")
	$certified = 1;
	else if($certified_pre == "no")
		$certified = 0;
		
$tlcnum = $_POST['Tlcnum'];
$association_pre = $_POST['optradio1'];

if($association_pre == "yes")
	$association = 1;
	else if($association_pre == "no")
		$cassociation = 0;
		
$company = $_POST['company'];

if(isset($_POST['submit'])){
    $query = "INSERT INTO `Inquiry` (`Name`, `Vehicle`, `Email`, `Phone`, `Certified`, `Tlcnum`, `Association`, `Company`) VALUES ('".$name."', '".$vehicle."', '".$email."', '".$phone."', '".$certified."', '".$tlcnum."', '".$association."', '".$company."')";
    $result = mysqli_query($link, $query);
    if($result)
		echo "Thank you!";
	else 
   		echo "Error: " . $query . "<br>" . mysqli_error($link);
	}
?>
	
</div>
  <script>
$(function() 
{
    $('.dropdown-menu li').click(function()
    {
        $('#my_topic').val($(this).html());
        $('#my_form').submit();
    });
});
</script>
  	<div class="footer" id="bottom">
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
