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
                    <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
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
                                <a href="#" class="btn btn-light">Saber Más</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Confort</strong>
                                </h4>
                                <p>bienestar y comodidades</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Seguridad</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                               
                                <h4>
                                    <strong>Comunicaciones</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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
            <h1>Vertically Centered Text</h1>
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
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                   <h4><strong>Smart House</strong>
                    </h4>
                    <p>Neyvia Gonzalez<br></p>
                    <p>Carlos Hernández<br></p>
                    <p>Cesar Gómez<br></p>
                    <p>Manuel Gutierrez<br></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (314) 33 733 10</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">A201301091@utem.edu.mx</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/SmartHouseUTeM/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Smart House 2016</p>
                </div>
            </div>
        </div>
    </footer>

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
