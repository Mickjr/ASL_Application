<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASL - Advanced Server-side Languages</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/home">Advanced Server-side Languages</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <?php   if ( $this->session->userdata('logged_in') == null )
                                    echo '<a class="page-scroll" href="/login">Admin Login</a>';
                        ?>
                    </li>
                    <li>
                        <a class="page-scroll" href="#  portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Students</a>
                    </li>
                    <li><?php if ( $this->session->userdata('logged_in') != null )
                        echo '<a class="page-scroll" href="/logout">Logout</a>';
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Classroom!</div>
                <div class="intro-heading">Here's our work!</div>
                <input type="submit" href="#portfolio" class="page-scroll btn btn-xl" value="Enter!"/>
                <!-- <input type="submit" class="btn btn-xl" value="Login"/> -->
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Apps created by us!</h1>
                    <h3 class="section-subheading text-muted">Our portfolio hub!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Air Track!</h4>
                        <p class="text-muted">Julian Rodriguez</p>
                        <p class="text-muted">Manton Horton</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Body Buddy</h4>
                        <p class="text-muted">Seth Healy</p>
                        <p class="text-muted">Jordan Wilson</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bye Snooze</h4>
                        <p class="text-muted">Lyteia Kitchen</p>
                        <p class="text-muted">Antonio Figueroa</p>
                        <p class="text-muted">Linqing Sun</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/index.php/upload" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php if ( $this->session->userdata('logged_in') != null )
                        echo '<input type="submit" href="/index.php/upload" class="page-scroll btn btn-xl" value="Add More"/>';
                        ?>
                        </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Students</h2>
                    <h3 class="section-subheading text-muted">Here we are!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                        	<div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/antonio.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Antonio Figueroa</h3>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/lyteia.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Seth Healy</h3>
                                </div>
                            </div>
                        	<div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/seth.jpg" alt="">
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/manton.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Manton Horton</h3>
                                </div>
                            </div>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/manton.jpg" alt="">
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/lyteia.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Lyteia Kitchen</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/julian.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Julian Rodriquez</h3>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/sophie.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Linqing Sun</h3>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="/images/about/jordan.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Jordan Wilson</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Air Track!</h2>
                            <p class="item-intro text-muted">Flight status tracking application.</p>
                            <img class="img-responsive" src="/images/portfolio/roundicons-free.png" alt="">
                            <p>Created by Julian Rodriguez and Manton Horton</p>         
                            <ul class="list-inline">
                                <li>Date: September 2014</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Body Buddy</h2>
                            <p class="item-intro text-muted">Calorie tracking application</p>
                            <img class="img-responsive img-centered" src="/images/portfolio/startup-framework-preview.png" alt="">
                            <p>Created by Seth Healy and Jordan Wilson</p>         
                            <ul class="list-inline">
                                <li>Date: September 2014</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Bye Snooze</h2>
                            <p class="item-intro text-muted">Project manager application.</p>
                            <img class="img-responsive img-centered" src="/images/portfolio/treehouse-preview.png" alt="">
                            <p>Created by Seth Healy and Jordan Wilson</p>         
                            <ul class="list-inline">
                                <li>Date: September 2014</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/agency.js"></script>

</body>

</html>
