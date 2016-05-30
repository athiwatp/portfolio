<?php
    $projects = [
        (object) [
            'name' => 'Structure CMS',
            'category' => 'Content Management System',
            'image' => 'structure.png',
            'url' => '#!'
        ],
        (object) [
            'name' => 'Desert Made Jewelry',
            'category' => 'Wordpress',
            'image' => 'desertmade.png',
            'url' => '#!'
        ],
        (object) [
            'name' => 'Furrylogic',
            'category' => 'Version Control Integration',
            'image' => 'furrylogic.png',
            'url' => '#!'
        ],
        (object) [
            'name' => 'Diablo Rankings',
            'category' => 'API Driven Statistics',
            'image' => 'diablorankings-min.png',
            'url' => 'http://diablorankings.net'
        ],
        (object) [
            'name' => 'Winter Park Tigers',
            'category' => 'Content Management System',
            'image' => 'wptigers-min.png',
            'url' => 'http://winterparktigers.com'
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio">
    <meta name="author" content="John Leider">

    <title>John Leider - Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">John Leider</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Full Stack Web Development</h1>
                <hr>
                <p>Hello! My name is John Leider and I'm a Florida-based Web Developer. I currently work for Fast Forward Academy located in Orlando, Florida.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Experience, Reliability, Professionalism</h2>
                    <hr class="light">
                    <p class="text-faded">From a one page portfolio to a fully customized Content Management System, I utilize the latest technologies in Web Development to build websites that are on the bleeding edge. </p>
                    <a href="#contact" class="btn btn-default btn-xl page-scroll">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At your service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-html5 wow bounceIn text-primary"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">Your website will be developed using the latest web technology, utilizing HTML 5, CSS 3 and Javascript.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-building wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Custom CMS</h3>
                        <p class="text-muted">Need a specialized Backend for your application? I have years of experience in developing Enterprise level custom content management systems.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-headphones wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Professional Support</h3>
                        <p class="text-muted">I'll walk you through the ins and outs of your website to ensure it meets and exceeds your expectations.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lightbulb-o wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Accountability</h3>
                        <p class="text-muted">You will never be left in the dark when it comes to your website. I am available 24/7 to help assist you with questions or concerns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Work</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="row no-gutter">
                <?php foreach ($projects as $project): ?>
                    <div class="col-lg-4 col-sm-6">
                        <a href="<?php echo $project->url; ?>" class="portfolio-box">
                            <img src="img/portfolio/<?php echo $project->image; ?>" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $project->category; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $project->name; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Check out my projects in GitHub</h2>
                <a href="https://github.com/johnleider/" target="_blank" class="btn btn-default btn-xl wow tada"><i class="fa fa-github"></i> View Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
<!--                    <p>Are you ready to start your next project? That's great! Feel free to contact me via phone or email.</p>-->
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href="tel:321-298-2489">321-298-2489</a></p>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:john.j.leider@gmail.com">john.j.leider@gmail.com</a></p>
                </div>
<!--                <div class="col-lg-4 text-center">-->
<!--                    <i class="fa fa-file-text-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>-->
<!--                    <p><a href="downloads/LeiderJohn-Resume.docx" target="_blank">Download Resume</a></p>-->
<!--                </div>-->
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>