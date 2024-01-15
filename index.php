<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Royal Knowledge</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body{margin-top:20px;}

.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #ebf4fa;
}
/* Blog 
---------------------*/
.blog-grid {
  margin-top: 15px;
  margin-bottom: 15px;
}
.blog-grid .blog-img {
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}
.blog-grid .blog-img .date {
  position: absolute;
  background: #3a3973;
  color: #ffffff;
  padding: 8px 15px;
  left: 0;
  top: 10px;
  font-size: 14px;
}
.blog-grid .blog-info {
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  border-radius: 5px;
  background: #ffffff;
  padding: 20px;
  margin: -30px 20px 0;
  position: relative;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 500;
  margin: 0 0 10px;
}
.blog-grid .blog-info h5 a {
  color: #3a3973;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}

.px-btn-arrow {
    padding: 0 50px 0 0;
    line-height: 20px;
    position: relative;
    display: inline-block;
    color: #fe4f6c;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    -webkit-transition: ease all 0.3s;
    transition: ease all 0.3s;
}


.px-btn-arrow .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
    -moz-transition: ease right 0.3s;
    -o-transition: ease right 0.3s;
    -webkit-transition: ease right 0.3s;
    transition: ease right 0.3s;
}

.px-btn-arrow .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

    .top-header .navbar .navbar-collapse ul li a.active,
    .top-header .navbar .navbar-collapse ul li a:hover,
    .top-header .navbar .navbar-collapse ul li a:focus {
    background: transparent;
    color: #d4a81e;
}
    </style>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="image"></a>
                <button class="navbar-toggler" style="border: 2px solid #650290 !important;" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="background: #650290;"></span>
                    <span style="background: #650290;"></span>
                    <span style="background: #650290;"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" style="color: #650290;" href="index.php">Inicio</a></li>
                        <li><a class="nav-link" style="color: #650290;" href="#courses">Carreras</a></li>
                        <li><a class="nav-link" style="color: #650290;" href="biblioteca.php">Biblioteca</a></li>
                       <li><a class="nav-link" style="color: #650290;" href="noticias.php">Noticias</a></li>
                        <li><a class="nav-link" style="color: #650290;" href="about.php">Acerca</a></li>
						<li><a class="nav-link" style="color: #650290;" href="contact.php">Contacto</a></li>
                        <li><a class="nav-link" style="color: #fff; background: #650290; " href="login.php">Ingresar</a></li>
                    </ul>
                </div>
               
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/banner.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">Solo tienes que saber una cosa</span><br>Puedes aprender lo que sea</h3>
                                        <h4>El conocimiento es poder</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="login.php">Aula Virtual</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/banner2.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">Ofreciendote un futuro</span><br>basado en conocimiento y aprendizaje</h3>
                                        <h4>Puerta a la excelencia y el servicio</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="login.php">Aula Virtual</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span style="color: #650290;">Bienvenid@s</span></h2>
                        </div>
						<div class="full">
						  <p>Royal Knowledge es una universidad que ocupa una posición privilegiada entre las universidades del país. Royal Knowledge siempre estará dispuesta a impartir conocimientos de carácter avanzado a todas aquellas personas inscritas en la misma, con el objetivo de formar futuros profesionales con valores de responsabilidad, disciplina, carácter y perfección para así ser capaces de brindar un buen servicio y ejercer de manera correcta la ocupación elegida. </p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" style="background: #650290;" href="about.php">Saber más</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="images/img2.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span style="color: #650290;" id="courses">Carreras</span></h2>
                        </div>
                      </div>
                </div>
              </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="full blog_img_popular">
                                          <a href="medicina.php"><img class="img-responsive" src="images/Medicina.png" alt="#" />
                                          <h4>Medicina</h4>
                                          <p>La Medicina forma profesionales en el área de la salud con el fin de ayudar en el tratamiento y la recuperación de pacientes.</p></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <a href="derecho.php"><img class="img-responsive" src="images/Derecho.png" alt="#" />
                                          <h4>Derecho</h4>
                                          <p>La carrera de Derecho capacita a profesionales que se desempeñarán tanto en el sector público como en el privado o social dentro del campo jurídico.</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="full blog_img_popular">
                                          <a href="ingenieria.php"><img class="img-responsive" src="images/Ingenieria en Sistemas.png" alt="#" />
                                          <h4>Ingeniería en sistemas</h4>
                                          <p>La carrera de Ingeniería en Sistemas de Computación se enfoca a los componentes de hardware y las redes de comunicación. El estudiante adquiere la titulación de Ingeniero en Sistemas.</p></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <a href="seguridad.php"><img class="img-responsive" src="images/Seguridad en Redes.png" alt="#" />
                                          <h4>Seguridad en Redes</h4>
                                          <p>La carrera de Seguridad en Redes se enfoca en diseñar, planificar, gestionar y ejecutar programas que protegeran la privacidad de la información.</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="full blog_img_popular">
                                          <a href="odontologia.php"><img class="img-responsive" src="images/Odontologia.png" alt="#" />
                                          <h4>Odontología</h4>
                                          <p>La carrera de Odontología está enfocada en prestar un servicio de cuidado y mejora bucal de los pacientes.</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>            
           </div>
        </div>
    <!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span style="color: #650290;" id="courses">Recintos</span></h2>
                        </div>
                    </div>
                    </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                
                                    <img src="images/recinto1.jpg" height="400px" title="" alt="">
                                
                            </div>
                            <div class="blog-info">
                                <center><h5 style="color: #9c7c16;">Santiago</h5></center>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                
                                
                                    <img src="images/recinto2.jpg" height="400px" title="" alt="">
                                
                            </div>
                            <div class="blog-info">
                                <center><h5 style="color: #9c7c16;">Santo Domingo</h5></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">

                                
                                    <img src="images/recinto 3.jpg" height="400px" title="" alt="">
                                
                            </div>
                            <div class="blog-info">
                                <center><h5 style="color: #9c7c16;">Puerto Plata</h5></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	
	
	
	
    <!-- Start Footer -->
    <footer class="footer-box" style="background: #250a31;">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="images/logo2.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p>Royal Knowledge siempre tiene el objetivo de formar futuros profesionales con valores de responsabilidad, disciplina, carácter y perfección para que estos sean capaces de brindar un buen servicio y ejercer de manera correcta la ocupación elegida. </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Enlaces Rápidos</h3>
						    <ul> 
							  <li><a href="#">> Acerca de</a></li>
							  <li><a href="noticias.php"> Noticias</a></li>
							  <li><a href="#">> Carreras</a></li>
							  <li><a href="#">> Aula Virtual</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Comentarios</h3>
							 <p>Si desea tiene duda sobre alguna cosa, puede contactarnos o escribir aquí </p>
							 <div class="newsletter_form">
							    <form action="index.php">
								   <input type="email" placeholder="Tu correo" name="#" required />
                                   <input type="text" placeholder="Comentario" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contáctanos</h3>
							 <ul class="full">
							   <li><img src="images/i5.png" id="ubicacion"><span>San Isidro<br>República Dominicana</span></li>
							   <li><img src="images/i6.png" id="email"><span>RoyalK@gmail.com</span></li>
							   <li><img src="images/i7.png" id="contacto"><span>+1-829-928-1465</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom" style="background: #400a52;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2021 design by Ana Contreras #4 - Iriangy Feliz #27</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" style="background: #650290;" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.php(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>