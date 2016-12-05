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
                   <!--  <li>
                        <a class="page-scroll" href="/login">Admin Login</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/home">Students</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="contact" class="bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <h3 class="section-subheading text-muted">Upload images!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					</div>
                    <form enctype="multipart/form-data" action="/index.php/upload/do_upload" method="post" name="sentMessage" id="contactForm" novalidate> 
                     <div class="row">
								<div class="col-md-6" style="margin-left:25%">
								<div class="form-group">
								<?php echo $error;?>
								<?php echo form_open_multipart('/upload/do_upload');?>
								<input type="file" name="userfile" size="20" />
								<br>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your project name" id="project_name" name="project_name" required data-validation-required-message="Please enter your username.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your project url" id="project_url" name="url" required data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            	</div>
                            	</div> 
                            	</div> 
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" class="btn btn-xl" value="upload"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- // <script src="js/jqBootstrapValidation.js"></script> -->
    <!-- // <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="/js/agency.js"></script>

</body>

</html>
