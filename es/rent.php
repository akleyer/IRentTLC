<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Welcome to IRentTLC. The place where drivers matter. Rent Luxary. Drive Comfortably. Earn More.">
    <meta name="keywords" content="IRentTLC, Rent, TLC, Luxary, Uber, Drive, Taxi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IRentTLC - Renta</title>
	<link rel="shortcut icon" href="caricon.ico" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
		color:rgb(34, 34, 34);
		font-weight:bold;
	}
  </style>
    
  </head>
  <body onLoad="window.scroll(0, 0)">
  
  <div class="background-rent"></div>
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
     	<li><a href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
     	<li class="active"><a href="rent.php">Renta</a></li>
        <li><a href="iview.html">IView</a></li>
        <li><a href="creditcard.html">Crédito</a></li>
        <li><a href="contact.php">Contáctenos</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="../rent.php"><small>En</small></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container text-center" id="inventory">
        <div class="row">
    	    <div class="col-lg-12" id="header">
                <h1 class="page-header">Inventario</h1>
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
                        <a class="thumbnail" id="carousel-selector-0"><img src="../Pictures/car.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="../Pictures/car1.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="../Pictures/car2.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="../Pictures/car3.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="../Pictures/car4.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="../Pictures/car5.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="../Pictures/car6.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="../Pictures/car7.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="../Pictures/car8.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="../Pictures/car9.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="../Pictures/car10.png"></a>
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
                                        <img src="../Pictures/car.png"></div>
                                    
                                    <div class="item" data-slide-number="1">
                                        <img src="../Pictures/car1.png"></div>
                                    
                                    <div class="item" data-slide-number="2">
                                        <img src="../Pictures/car2.png"></div>
                                    
                                    <div class="item" data-slide-number="3">
                                        <img src="../Pictures/car3.png"></div>
                                    
                                    <div class="item" data-slide-number="4">
                                        <img src="../Pictures/car4.png"></div>
                                    
                                    <div class="item" data-slide-number="5">
                                        <img src="../Pictures/car5.png"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="../Pictures/car6.png"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="../Pictures/car7.png"></div>

                                    <div class="item" data-slide-number="8">
                                        <img src="../Pictures/car8.png"></div>

                                    <div class="item" data-slide-number="9">
                                        <img src="../Pictures/car9.png"></div>

                                    <div class="item" data-slide-number="10">
                                        <img src="../Pictures/car10.png"></div>
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
                <h2 class="page-header" id="inquire-vehicle">Preguntar Acerca de un Vehículo</h2>
            </div>
        </div>  
</div> 

<form>
<div class="container">
	<div class="row">
		<div class="form-group col-md-12">
		<div class="col-md-7">
				<input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required autofocus />
			</div>
			<div class="col-md-5 text-center">
			<div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn" data-target="#" href="/page.html" style="width:100%">
                Elegir un Vehículo <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
    		<li class="text-center">Fabricar</li>
    		<li class="divider"></li>
    		<li class="dropdown-submenu"><a tabindex="-1">A-D</a>
              <ul class="dropdown-menu">
            	<li class="dropdown-submenu"><a tabindex="-1">Acura</a>
              	<ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">ILX</a></li>
                  <li><a tabindex="-1" href="#">MLX</a></li>
                  <li><a tabindex="-1" href="#">RLX</a></li>
                  <li><a tabindex="-1" href="#">TL</a></li>
                  <li><a tabindex="-1" href="#">TSX</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Audi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">A4</a></li>
              		<li><a tabindex="-1" href="#">A5</a></li>
              		<li><a tabindex="-1" href="#">Q5</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">BMW</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">3 Series</a></li>
              		<li><a tabindex="-1" href="#">5 Series</a></li>
              		<li><a tabindex="-1" href="#">X1</a></li>
              		<li><a tabindex="-1" href="#">X3</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Buick</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Enclave</a></li>
              		<li><a tabindex="-1" href="#">Encore</a></li>
              		<li><a tabindex="-1" href="#">LaCrosee</a></li>
              		<li><a tabindex="-1" href="#">Verano</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Cadillac</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">CTS Coupe</a></li>
              		<li><a tabindex="-1" href="#">CTS Sedan</a></li>
              		<li><a tabindex="-1" href="#">SRX</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chevrolet</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Avalanche</a></li>
              		<li><a tabindex="-1" href="#">Camaro</a></li>
              		<li><a tabindex="-1" href="#">Captiva Sport Fleet</a></li>
              		<li><a tabindex="-1" href="#">Corvette</a></li>
              		<li><a tabindex="-1" href="#">Equinox</a></li>
              		<li><a tabindex="-1" href="#">Malibu</a></li>
              		<li><a tabindex="-1" href="#">Silverado 1500</a></li>
              		<li><a tabindex="-1" href="#">Silverado 2500</a></li>
              		<li><a tabindex="-1" href="#">Sonic Suburban</a></li>
              		<li><a tabindex="-1" href="#">Tahoe</a></li>
              		<li><a tabindex="-1" href="#">Traverse</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chrysler</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">200</a></li>
              		<li><a tabindex="-1" href="#">300</a></li>
              		<li><a tabindex="-1" href="#">Crossfire</a></li>
              		<li><a tabindex="-1" href="#">Town and Country</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Dodge</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Avenger</a></li>
              		<li><a tabindex="-1" href="#">Caliber</a></li>
              		<li><a tabindex="-1" href="#">Charger</a></li>
              		<li><a tabindex="-1" href="#">Durango</a></li>
              		<li><a tabindex="-1" href="#">Grand Caravan</a></li>
              		<li><a tabindex="-1" href="#">Journey</a></li>
              		<li><a tabindex="-1" href="#">Ram 1500</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">F-J</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Ford</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">C-Max Energi</a></li>
              		<li><a tabindex="-1" href="#">Edge</a></li>
              		<li><a tabindex="-1" href="#">Escape</a></li>
              		<li><a tabindex="-1" href="#">Expedition</a></li>
              		<li><a tabindex="-1" href="#">Explorer</a></li>
              		<li><a tabindex="-1" href="#">F-150</a></li>
              		<li><a tabindex="-1" href="#">Fiesta</a></li>
              		<li><a tabindex="-1" href="#">Focus</a></li>
              		<li><a tabindex="-1" href="#">Fusion</a></li>
              		<li><a tabindex="-1" href="#">Fusion Energi</a></li>
              		<li><a tabindex="-1" href="#">Mustang</a></li>
              		<li><a tabindex="-1" href="#">Taurus</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">GMC</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Acadia</a></li>
              		<li><a tabindex="-1" href="#">Sierra 1500</a></li>
              		<li><a tabindex="-1" href="#">Yukon</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Honda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Accord</a></li>
              		<li><a tabindex="-1" href="#">Accord Sedan</a></li>
              		<li><a tabindex="-1" href="#">Civic</a></li>
              		<li><a tabindex="-1" href="#">Cr-V</a></li>
              		<li><a tabindex="-1" href="#">Odyssey</a></li>
              		<li><a tabindex="-1" href="#">Pilot</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Hyundai</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Accent</a></li>
              		<li><a tabindex="-1" href="#">Azera</a></li>
              		<li><a tabindex="-1" href="#">Elantra</a></li>
              		<li><a tabindex="-1" href="#">Genesis</a></li>
              		<li><a tabindex="-1" href="#">Santa Fe</a></li>
              		<li><a tabindex="-1" href="#">Santa Fe Sport</a></li>
              		<li><a tabindex="-1" href="#">Sonata</a></li>
              		<li><a tabindex="-1" href="#">Tucson</a></li>
              		<li><a tabindex="-1" href="#">Veloster</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Infiniti</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">EX35</a></li>
              		<li><a tabindex="-1" href="#">FX35</a></li>
              		<li><a tabindex="-1" href="#">G25 Sedan</a></li>
              		<li><a tabindex="-1" href="#">G37</a></li>
              		<li><a tabindex="-1" href="#">Q50</a></li>
              		<li><a tabindex="-1" href="#">QX56</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jaguar</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">xf</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jeep</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Cherokee</a></li>
              		<li><a tabindex="-1" href="#">Compass</a></li>
              		<li><a tabindex="-1" href="#">Grand Cherokee</a></li>
              		<li><a tabindex="-1" href="#">Liberty</a></li>
              		<li><a tabindex="-1" href="#">Patriot</a></li>
              		<li><a tabindex="-1" href="#">Wrangler</a></li>
              		<li><a tabindex="-1" href="#">Wrangler Unlimited</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">K-Me</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Kia</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Forte Koup</a></li>
              		<li><a tabindex="-1" href="#">Optim</a></li>
              		<li><a tabindex="-1" href="#">Sedona</a></li>
              		<li><a tabindex="-1" href="#">Sorento</a></li>
              		<li><a tabindex="-1" href="#">Sportage</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lexus</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">CT 200h</a></li>
              		<li><a tabindex="-1" href="#">ES 350</a></li>
              		<li><a tabindex="-1" href="#">GS 350</a></li>
              		<li><a tabindex="-1" href="#">GX 460</a></li>
              		<li><a tabindex="-1" href="#">IS 250</a></li>
              		<li><a tabindex="-1" href="#">LS 460</a></li>
              		<li><a tabindex="-1" href="#">RX 350</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lincoln</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">MKX</a></li>
              		<li><a tabindex="-1" href="#">MKZ</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mazda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">CX-5</a></li>
              		<li><a tabindex="-1" href="#">CX-7</a></li>
              		<li><a tabindex="-1" href="#">CX-9</a></li>
              		<li><a tabindex="-1" href="#">MAZDA3</a></li>
              		<li><a tabindex="-1" href="#">MAZDA6</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercedes</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">C-Class</a></li>
              		<li><a tabindex="-1" href="#">E-Class</a></li>
              		<li><a tabindex="-1" href="#">GL-Class</a></li>
              		<li><a tabindex="-1" href="#">GLK-Class</a></li>
              		<li><a tabindex="-1" href="#">M-Class</a></li>
              		<li><a tabindex="-1" href="#">SLK-Class</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercury</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Mariner</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mi-Sc</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">MINI</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Cooper Clubman</a></li>
              		<li><a tabindex="-1" href="#">Cooper Countryman</a></li>
              		<li><a tabindex="-1" href="#">Cooper Hardtop</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mitsubishi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Outlander</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Nissan</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">370Z</a></li>
              		<li><a tabindex="-1" href="#">Altima</a></li>
              		<li><a tabindex="-1" href="#">Armada</a></li>
              		<li><a tabindex="-1" href="#">Cube</a></li>
              		<li><a tabindex="-1" href="#">Frontier</a></li>
              		<li><a tabindex="-1" href="#">JUKE</a></li>
              		<li><a tabindex="-1" href="#">Maxima</a></li>
              		<li><a tabindex="-1" href="#">Murano</a></li>
              		<li><a tabindex="-1" href="#">Pathfinder</a></li>
              		<li><a tabindex="-1" href="#">Quest</a></li>
              		<li><a tabindex="-1" href="#">Rogue</a></li>
              		<li><a tabindex="-1" href="#">Sentra</a></li>
              		<li><a tabindex="-1" href="#">Titan</a></li>
              		<li><a tabindex="-1" href="#">Versa</a></li>
              		<li><a tabindex="-1" href="#">Versa Note</a></li>
              		<li><a tabindex="-1" href="#">Xterra</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Saturn</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Sky Red Line</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Scion</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">tC</a></li>
              		<li><a tabindex="-1" href="#">xB</a></li>
              		<li><a tabindex="-1" href="#">Smart</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Su-Z</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Subaru</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Forester</a></li>
              		<li><a tabindex="-1" href="#">Legacy</a></li>
              		<li><a tabindex="-1" href="#">Outback</a></li>
              		<li><a tabindex="-1" href="#">Tribeca</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Toyota</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Avalon</a></li>
              		<li><a tabindex="-1" href="#">Camry</a></li>
              		<li><a tabindex="-1" href="#">Corolla</a></li>
              		<li><a tabindex="-1" href="#">Highlander</a></li>
              		<li><a tabindex="-1" href="#">Prius</a></li>
              		<li><a tabindex="-1" href="#">RAV</a></li>
              		<li><a tabindex="-1" href="#">Sienna</a></li>
              		<li><a tabindex="-1" href="#">Solara</a></li>
              		<li><a tabindex="-1" href="#">Tundra</a></li>
              		<li><a tabindex="-1" href="#">Venza</a></li>
              		<li><a tabindex="-1" href="#">Yaris</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volkswagen</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">Beetle Coupe</a></li>
              		<li><a tabindex="-1" href="#">GTI</a></li>
              		<li><a tabindex="-1" href="#">Jeta</a></li>
              		<li><a tabindex="-1" href="#">Passat</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volvo</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" href="#">C30</a></li>
              		<li><a tabindex="-1" href="#">S60</a></li>
              		<li><a tabindex="-1" href="#">XC60</a></li>
              		<li><a tabindex="-1" href="#">XC70</a></li>
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
				<input class="form-control" id="phone" name="phone" placeholder="Número de Teléfono" type="email" required />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="col-md-7">
				<div class="col-md-8">
					<label style="color:white">¿Es usted un controlador certificado NYC TLC?</label>
				</div>
				<div class="col-md-4">
					<label class="radio-inline" style="color:white"><input id="associatedyes" name="optradio" type="radio"/>Sí</label>
					<label class="radio-inline" style="color:white"><input id="associatedno" name="optradio" type="radio"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="name" name="name" placeholder="En caso afirmativo, por favor, introduzca su número de NYC TLC" type="text"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<div class="col-md-7">
				<div class="col-md-8">
					<label style="color:white">¿Está relacionado a Taxi / Livery Base?<label>
				</div>
				<div class="col-md-4">
					<label class="radio-inline" style="color:white"><input id="associatedyes1" name="optradio1" type="radio"/>Sí</label>
					<label class="radio-inline" style="color:white"><input id="associatedno1" name="optradio1" type="radio"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="name" name="name" placeholder="En caso afirmativo, el nombre de la empresa" type="text"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<input type="submit" value="Entregar" class="btn" style="width:100%;margin-bottom:10px;" id="submit-button"/>
			</div>
		</div>
	</div>
</div>
</form>
	
</div>
  
  	<div class="footer">
      	<div class="container">
        	<p class="muted credit">&copy;&nbsp;IRentTLC</p>
      	</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>