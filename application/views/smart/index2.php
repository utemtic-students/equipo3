<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class=""></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            
           <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Smart House</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Inicio</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >Nosotros</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Servicios</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portafolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contacto</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Smart House</h1>
           
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Quieres Saber Más</a>
            <a href="<?php echo site_url('smart/login');?>"class="btn btn-dark btn-lg">Iniciar Sesion<a/>
            <!--<a href="login.php" class="btn btn-dark btn-lg">Iniciar Sesion</a>-->
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Obten el control de tu hogar al alcance de tu mano!</h2>
                    <h3>Consigue nuestros servicios de acceso remoto!!</h3>
                    <p class="lead"><a target="_blank" href=""></a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nuestros Servicios</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                 <h4>
                                    <strong>Ahorro energético</strong>
                                </h4>
                                <p>Disminuir tu gasto de energia electrica</p>
                               <!-- <a href="#" class="btn btn-light">Saber Más</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Confort</strong>
                                </h4>
                                <p>bienestar y comodidades</p>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Seguridad</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Comunicaciones</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Soluciones a tu medida</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Nuestra Tecnologia</h2>
                    <hr class="small">
                    
                   
                 
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Consigue acceso remoto a tu hogar aquí.</h3>
                   <a href="<?php echo site_url('pago/principal2.2');?>"> <img src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_10.png" alt="undefined" /></a>
                  <!--  <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>-->
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        
    </section>

    <!-- Footer -->
       <head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>
<div class="container">
<div class="row">
			<div class="col-md-12" data-wow-delay="0.1s">
			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
			<!-- Bottom Carousel Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="<?php echo base_url('Smart_1.0/img/ney.jpg');?>" alt="">
			</li>
			<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo base_url('Smart_1.0/img/manuel.jpg');?>" alt="">
			</li>
			<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo base_url('Smart_1.0/img/carlos.jpg');?>" alt="">
			</li>
			<li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="<?php echo base_url('Smart_1.0/img/cesar.jpg');?>" alt="">
			</li>
			</ol>

			<!-- Carousel Slides / Quotes -->
			<div class="carousel-inner text-center">

			<!-- Quote 1 -->
			<div class="item active">
			<blockquote>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<p><strong>Programador y Diseñador</strong></p>
						<p><strong>Neyvia G. Michel</strong></p>          
						<small>Smart House</small>
					</div>
				</div>
			</blockquote>
			</div>
			<!-- Quote 2 -->
			<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
							<p><strong>Programador</strong></p>
							<p><strong>Manuel Gutierrez C.</strong></p>  
							<small>Smart House</small>                                             
							</div>
						</div>
					</blockquote>
			</div>
			<!-- Quote 3 -->
			<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
							<p><strong>Programador y Diseñador</strong></p>
							<p><strong>Carlos Hernandez</strong></p>  
							<small>Smart House</small>
							</div>
						</div>
					</blockquote>
			</div>
			<!-- Quote 2 -->
			<div class="item">
				<blockquote>
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
						<p> <strong>Programador</strong></p>
						<p><strong>Cesar López Gómez</strong></p>
						<small>Smart House</small>                                              
						</div>
					</div>
			</blockquote>
			</div>

			</div>


			<!-- Carousel Buttons Next/Prev -->
			<!--<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>-->
			<!--<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>-->
			</div>
			</div>
                </div>
</div>
<hr>
<center>
	<h3>
	<strong>Contactanos:</strong>
	</h3>
<strong>
		<i class="fa fa-phone fa-3x wow bounceIn"></i>
		<h3>(314)10-3-29-04</h3>
			
</strong>
				<hr>
					<ul class="list-inline">
					<li>
					<a href="https://www.facebook.com/SmartHouseUTeM/?ref=aymt_homepage_panel"><i class="fa fa-facebook fa-fw fa-4x"></i></a>
					</li>
					<li>
					<a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1"><i class="fa fa-google fa-fw fa-4x"></i></a>
					</li>


					</ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Smart House 2016</p>
                </div>
            </div>
        </div>


</center>


<hr class="divider"/>


    <!-- jQuery -->
    <script  src="<?php echo base_url('Smart_1.0/js/jquery.js');?>"></script>
    <!--<script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('Smart_1.0/js/bootstrap.min.js');?>"></script>
     <script src="<?php echo base_url('Smart_1.0/js/script_index.js');?>"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    

    <!-- Custom Theme JavaScript -->

    

</body>

</html>
