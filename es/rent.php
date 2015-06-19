<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Rent a TLC vehicle today with IRentTLC!">
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
      	<li><a href="../rent.php">|English|</a></li>
     	<li><a href="index.html">Inicio</a></li>
     	<li class="active"><a href="rent.php">Renta<span class="sr-only">(current)</span></a></li>
        <li><a href="iview.html">IView</a></li>
        <li><a href="creditcard.html">Crédito</a></li>
        <li><a href="contact.php">Contáctenos</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="faq.php">FAQ</a></li>
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

<div class="jumbotron other-color">

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
			<div class="col-md-3 text-center">
			<div class="dropdown" id="selectCar">
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
                  <li><a tabindex="-1" model='Acura ILX' >ILX</a></li>
                  <li><a tabindex="-1" model='Acura MLX' >MLX</a></li>
                  <li><a tabindex="-1" model='Acura RLX' >RLX</a></li>
                  <li><a tabindex="-1" model='Acura TL' >TL</a></li>
                  <li><a tabindex="-1" model='Acura TSX' >TSX</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Audi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Audi A4'>A4</a></li>
              		<li><a tabindex="-1" model='Audi A5'>A5</a></li>
              		<li><a tabindex="-1" model='Audi Q5'>Q5</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">BMW</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='BMW 3 Series'>3 Series</a></li>
              		<li><a tabindex="-1" model='BMW 5 Series'>5 Series</a></li>
              		<li><a tabindex="-1" model='BMW X1'>X1</a></li>
              		<li><a tabindex="-1" model='BMW X3'>X3</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Buick</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Buick Enclave'>Enclave</a></li>
              		<li><a tabindex="-1" model='Buick Encore'>Encore</a></li>
              		<li><a tabindex="-1" model='Buick LaCrosse'>LaCrosse</a></li>
              		<li><a tabindex="-1" model='Buick Verano'>Verano</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Cadillac</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Cadillac CTS Coupe'>CTS Coupe</a></li>
              		<li><a tabindex="-1" model='Cadillac CTS Sedan'>CTS Sedan</a></li>
              		<li><a tabindex="-1" model='Cadillac SRX'>SRX</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chevrolet</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Chevrolet Avalanche'>Avalanche</a></li>
              		<li><a tabindex="-1" model='Chevrolet Camaro'>Camaro</a></li>
              		<li><a tabindex="-1" model='Chevrolet Captiva Sport'>Captiva Sport Fleet</a></li>
              		<li><a tabindex="-1" model='Chevrolet Corvette'>Corvette</a></li>
              		<li><a tabindex="-1" model='Chevrolet Equinox'>Equinox</a></li>
              		<li><a tabindex="-1" model='Chevrolet Malibu'>Malibu</a></li>
              		<li><a tabindex="-1" model='Chevrolet Silverado 1500'>Silverado 1500</a></li>
              		<li><a tabindex="-1" model='Chevrolet Silverado 2500'>Silverado 2500</a></li>
              		<li><a tabindex="-1" model='Chevrolet Sonic Suburban'>Sonic Suburban</a></li>
              		<li><a tabindex="-1" model='Chevrolet Tahoe'>Tahoe</a></li>
              		<li><a tabindex="-1" model='Chevrolet Traverse'>Traverse</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Chrysler</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Chrysler 200'>200</a></li>
              		<li><a tabindex="-1" model='Chrysler 300'>300</a></li>
              		<li><a tabindex="-1" model='Chrysler Crossfire'>Crossfire</a></li>
              		<li><a tabindex="-1" model='Chrysler T&C'>Town and Country</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Dodge</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Dodge Avenger'>Avenger</a></li>
              		<li><a tabindex="-1" model='Dodge Caliber'>Caliber</a></li>
              		<li><a tabindex="-1" model='Dodge Charger'>Charger</a></li>
              		<li><a tabindex="-1" model='Dodge Durango'>Durango</a></li>
              		<li><a tabindex="-1" model='Dodge Grand Caravan'>Grand Caravan</a></li>
              		<li><a tabindex="-1" model='Dodge Journey'>Journey</a></li>
              		<li><a tabindex="-1" model='Dodge Ram 1500'>Ram 1500</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">F-J</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Ford</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Ford C-Max Energi'>C-Max Energi</a></li>
              		<li><a tabindex="-1" model='Ford Edge'>Edge</a></li>
              		<li><a tabindex="-1" model='Ford Escape'>Escape</a></li>
              		<li><a tabindex="-1" model='Ford Expedition'>Expedition</a></li>
              		<li><a tabindex="-1" model='Ford Explorer'>Explorer</a></li>
              		<li><a tabindex="-1" model='Ford F-150'>F-150</a></li>
              		<li><a tabindex="-1" model='Ford Fiesta'>Fiesta</a></li>
              		<li><a tabindex="-1" model='Ford Focus'>Focus</a></li>
              		<li><a tabindex="-1" model='Ford Fusion'>Fusion</a></li>
              		<li><a tabindex="-1" model='Ford Fusion Energi'>Fusion Energi</a></li>
              		<li><a tabindex="-1" model='Ford Mustang'>Mustang</a></li>
              		<li><a tabindex="-1" model='Ford Taurus'>Taurus</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">GMC</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='GMC Acadia'>Acadia</a></li>
              		<li><a tabindex="-1" model='GMC Sierra 1500'>Sierra 1500</a></li>
              		<li><a tabindex="-1" model='GMC Yukon'>Yukon</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Honda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Honda Accord'>Accord</a></li>
              		<li><a tabindex="-1" model='Honda Accord Sedan'>Accord Sedan</a></li>
              		<li><a tabindex="-1" model='Honda Civic'>Civic</a></li>
              		<li><a tabindex="-1" model='Honda Cr-V'>Cr-V</a></li>
              		<li><a tabindex="-1" model='Honda Odyssey'>Odyssey</a></li>
              		<li><a tabindex="-1" model='Honda Pilot'>Pilot</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Hyundai</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Hyundai Accent'>Accent</a></li>
              		<li><a tabindex="-1" model='Hyundai Azera'>Azera</a></li>
              		<li><a tabindex="-1" model='Hyundai Elantra'>Elantra</a></li>
              		<li><a tabindex="-1" model='Hyundai Genesis'>Genesis</a></li>
              		<li><a tabindex="-1" model='Hyundai Santa Fe'>Santa Fe</a></li>
              		<li><a tabindex="-1" model='Hyundai Santa Fe S'>Santa Fe Sport</a></li>
              		<li><a tabindex="-1" model='Hyundai Sonata'>Sonata</a></li>
              		<li><a tabindex="-1" model='Hyundai Tucson'>Tucson</a></li>
              		<li><a tabindex="-1" model='Hyundai Veloster'>Veloster</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Infiniti</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Infiniti EX35'>EX35</a></li>
              		<li><a tabindex="-1" model='Infiniti FX35'>FX35</a></li>
              		<li><a tabindex="-1" model='Infiniti G25 Sedan'>G25 Sedan</a></li>
              		<li><a tabindex="-1" model='Infiniti G37'>G37</a></li>
              		<li><a tabindex="-1" model='Infiniti Q50'>Q50</a></li>
              		<li><a tabindex="-1" model='Infiniti QX56'>QX56</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jaguar</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Jaguar xf'>xf</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Jeep</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Jeep Cherokee'>Cherokee</a></li>
              		<li><a tabindex="-1" model='Jeep Compass'>Compass</a></li>
              		<li><a tabindex="-1" model='Jeep Grand Cherokee'>Grand Cherokee</a></li>
              		<li><a tabindex="-1" model='Jeep Liberty'>Liberty</a></li>
              		<li><a tabindex="-1" model='Jeep Patriot'>Patriot</a></li>
              		<li><a tabindex="-1" model='Jeep Wrangler'>Wrangler</a></li>
              		<li><a tabindex="-1" model='Jeep Wrangler UNL'>Wrangler Unlimited</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">K-Me</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Kia</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Kia Forte Koup'>Forte Koup</a></li>
              		<li><a tabindex="-1" model='Kia Optim'>Optim</a></li>
              		<li><a tabindex="-1" model='Kia Sedona'>Sedona</a></li>
              		<li><a tabindex="-1" model='Kia Sorento'>Sorento</a></li>
              		<li><a tabindex="-1" model='Kia Sportage'>Sportage</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lexus</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Lexus CT 200h'>CT 200h</a></li>
              		<li><a tabindex="-1" model='Lexus ES 350h'>ES 350</a></li>
              		<li><a tabindex="-1" model='Lexus GS 350h'>GS 350</a></li>
              		<li><a tabindex="-1" model='Lexus GX 460h'>GX 460</a></li>
              		<li><a tabindex="-1" model='Lexus IS 250h'>IS 250</a></li>
              		<li><a tabindex="-1" model='Lexus LS 460h'>LS 460</a></li>
              		<li><a tabindex="-1" model='Lexus RX 350h'>RX 350</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Lincoln</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Lincoln MKX'>MKX</a></li>
              		<li><a tabindex="-1" model='Lincoln MKZ'>MKZ</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mazda</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Mazda CX-5'>CX-5</a></li>
              		<li><a tabindex="-1" model='Mazda CX-7'>CX-7</a></li>
              		<li><a tabindex="-1" model='Mazda CX-9'>CX-9</a></li>
              		<li><a tabindex="-1" model='Mazda MAZDA3'>MAZDA3</a></li>
              		<li><a tabindex="-1" model='Mazda MAZDA6'>MAZDA6</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercedes</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Mercedes C-Class'>C-Class</a></li>
              		<li><a tabindex="-1" model='Mercedes E-Class'>E-Class</a></li>
              		<li><a tabindex="-1" model='Mercedes GL-Class'>GL-Class</a></li>
              		<li><a tabindex="-1" model='Mercedes GLK-Class'>GLK-Class</a></li>
              		<li><a tabindex="-1" model='Mercedes M-Class'>M-Class</a></li>
              		<li><a tabindex="-1" model='Mercedes SLK-Class'>SLK-Class</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mercury</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Mercury Mariner'>Mariner</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mi-Sc</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">MINI</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='MINI Cooper Clbmn'>Cooper Clubman</a></li>
              		<li><a tabindex="-1" model='MINI Cooper Ctry'>Cooper Countryman</a></li>
              		<li><a tabindex="-1" model='MINI Cooper Hrdtp'>Cooper Hardtop</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Mitsubishi</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Mitsubishi Outlander'>Outlander</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Nissan</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Nissan 370Z'>370Z</a></li>
              		<li><a tabindex="-1" model='Nissan Altima'>Altima</a></li>
              		<li><a tabindex="-1" model='Nissan Armada'>Armada</a></li>
              		<li><a tabindex="-1" model='Nissan Cube'>Cube</a></li>
              		<li><a tabindex="-1" model='Nissan Frontier'>Frontier</a></li>
              		<li><a tabindex="-1" model='Nissan JUKE'>JUKE</a></li>
              		<li><a tabindex="-1" model='Nissan Maxima'>Maxima</a></li>
              		<li><a tabindex="-1" model='Nissan Murano'>Murano</a></li>
              		<li><a tabindex="-1" model='Nissan Pathfinder'>Pathfinder</a></li>
              		<li><a tabindex="-1" model='Nissan Quest'>Quest</a></li>
              		<li><a tabindex="-1" model='Nissan Rogue'>Rogue</a></li>
              		<li><a tabindex="-1" model='Nissan Sentra'>Sentra</a></li>
              		<li><a tabindex="-1" model='Nissan Titan'>Titan</a></li>
              		<li><a tabindex="-1" model='Nissan Versa'>Versa</a></li>
              		<li><a tabindex="-1" model='Nissan Versa Note'>Versa Note</a></li>
              		<li><a tabindex="-1" model='Nissan Xterra'>Xterra</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Saturn</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Saturn SkyRedLine'>Sky Red Line</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Scion</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Scion tC'>tC</a></li>
              		<li><a tabindex="-1" model='Scion xB'>xB</a></li>
              		<li><a tabindex="-1" model='Scion Smart'>Smart</a></li>
              	</ul>
              </li>
              </ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Su-Z</a>
              <ul class="dropdown-menu">
              <li class="dropdown-submenu"><a tabindex="-1">Subaru</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Subaru Forester'>Forester</a></li>
              		<li><a tabindex="-1" model='Subaru Legacy'>Legacy</a></li>
              		<li><a tabindex="-1" model='Subaru Outback'>Outback</a></li>
              		<li><a tabindex="-1" model='Subaru Tribeca'>Tribeca</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Toyota</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Toyota Avalon'>Avalon</a></li>
              		<li><a tabindex="-1" model='Toyota Camry'>Camry</a></li>
              		<li><a tabindex="-1" model='Toyota Corolla'>Corolla</a></li>
              		<li><a tabindex="-1" model='Toyota Highlander'>Highlander</a></li>
              		<li><a tabindex="-1" model='Toyota Prius'>Prius</a></li>
              		<li><a tabindex="-1" model='Toyota RAV'>RAV</a></li>
              		<li><a tabindex="-1" model='Toyota Sienna'>Sienna</a></li>
              		<li><a tabindex="-1" model='Toyota Solara'>Solara</a></li>
              		<li><a tabindex="-1" model='Toyota Tundra'>Tundra</a></li>
              		<li><a tabindex="-1" model='Toyota Venza'>Venza</a></li>
              		<li><a tabindex="-1" model='Toyota Yaris'>Yaris</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volkswagen</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Volkswagen Beetle'>Beetle Coupe</a></li>
              		<li><a tabindex="-1" model='Volkswagen GTI'>GTI</a></li>
              		<li><a tabindex="-1" model='Volkswagen Jetta'>Jetta</a></li>
              		<li><a tabindex="-1" model='Volkswagen Passat'>Passat</a></li>
              	</ul>
              </li>
              <li class="dropdown-submenu"><a tabindex="-1">Volvo</a>
              	<ul class="dropdown-menu">
              		<li><a tabindex="-1" model='Volvo C30'>C30</a></li>
              		<li><a tabindex="-1" model='Volvo S60'>S60</a></li>
              		<li><a tabindex="-1" model='Volvo XC60'>XC60</a></li>
              		<li><a tabindex="-1" model='Volvo XC70'>XC70</a></li>
              	</ul>
              </li>
              </ul>
              </li>
            </ul>
        </div>
        </div>
        <div class="col-md-2">
        	<input class="form-control" type="text" placeholder="Select Car Left" id="selectedModel" name="model" disabled/>
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
					<label class="radio-inline" style="color:white"><input id="certifiedyes" name="optradio" type="radio"/>Sí</label>
					<label class="radio-inline" style="color:white"><input id="certifiedno" name="optradio" type="radio"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="tlcNum" name="name" placeholder="En caso afirmativo, por favor, introduzca su número de NYC TLC" type="text"/>
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
					<label class="radio-inline" style="color:white"><input id="associatedyes" name="optradio1" type="radio"/>Sí</label>
					<label class="radio-inline" style="color:white"><input id="associatedno" name="optradio1" type="radio"/>No</label>
				</div>
			</div>
			<div class="col-md-5">
				<input class="form-control" id="company" name="name" placeholder="En caso afirmativo, el nombre de la empresa" type="text"/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<input type="submit" value="Submit" class="btn" style="width:100%;margin-bottom:10px;" id="submit-button"/>
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
$model = $_POST['selectedModel'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$a_yes = $_POST['associatedyes'];
$a_no = $_POST['associatedno'];
$c_yes = $_POST['certifiedyes'];
$c_no = $_POST['certifiedno'];
$tlc = $_POST['tlcNum'];
$company = $_POST['company'];

if(isset($a_yes))
	$associated = 1;
	else if(isset($a_no))
		$associated = 0;
if(isset($c_yes))
	$certified = 1;
	else if(isset($c_no))
		$certified = 0;
	
if(isset($_POST['submit'])){
    $query = "INSERT INTO `Inquiry` (`Name`, `Vehicle`, `Email`, `Phone`, `Certified`, `Tlcnum`, `Association`, `Company`) VALUES ('".$name."', '".$model."', '".$email."','".$phone."' , '".$certified."', '".$tlc."', '".$associated."', '".$company."')";
    $result = mysqli_query($link, $query);
    if($result)
		echo "Thank you!";
	else 
   		echo "Error: " . $query . "<br>" . mysqli_error($link);
	}
?>


</div>
  
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