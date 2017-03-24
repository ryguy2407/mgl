<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MGL Building and Construction</title>
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>
<body>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->

    <!--WP Styles -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/style.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <div class="container header">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-6 offset-sm-3 logo">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" style="width:100%;">
            </div>
            <nav class="navbar col-md-10 main-nav">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Latest Projects</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Our Process</a></li>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    
    <div class="slideshow">
        <div class="slide" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 slide-text-bg">
                        <h2>Here is a heading</h2>
                        <p>This is some content about the image in question</p>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container process" style="margin-bottom:40px;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="text-center" style="margin-top:0px;">CONSULT</h2>
                        <p>
                            Our team believes that every successful design or construction 
                            project begins with comprehensive consultation and collaboration.
                        </p>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/Consult_1-570x380.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="text-center" style="margin-top:0px;">DESIGN</h2>
                        <p>
                            With an in-house team of construction specialists and project managers, 
                            we adopt an integrated design approach with only the best landscape architects.
                        </p>
                   <img src="<?php echo bloginfo('template_directory'); ?>/images/IMG_4215-570x380.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="text-center" style="margin-top:0px;">CONSTRUCT</h2>
                        <p>
                            Our landscape construction team understands that the success of any outdoor project 
                            lies in the detail. Our team’s trained eye...
                        </p>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/IMG_4198-570x380.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container project" style="margin-bottom:40px;">
        <div class="row">
            <div class="col-md-12 center-header">
                <h2 class="uppercase">Our Latest Projects</h2>
                <hr class="heading-through">
            </div>
        </div>
        <div class="row projectsGrid">
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
        </div>
        
        <div class="row projectsGrid">
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
            <div class="col-md-4">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/sunshine-coast-landscaping.jpg" style="width:100%;">
            </div>
        </div>
    </div>
    
    
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">&copy; 2017 - MGL All rights reserved <span class="pull-right">Social icons go in here</span></div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.sticky.js"></script>
    <script>
        jQuery(document).ready(function($){
            centerHeight($('div.slideshow').outerHeight(), $('div.slide-text-bg').outerHeight(), $('div.slide-text-bg'));
            centerHeight($('div.header').height() - 10, $('nav.main-nav').height(), $('nav.main-nav'));
            
            $(window).on('resize', function(){
                centerHeight($('div.slideshow').outerHeight(), $('div.slide-text-bg').outerHeight(), $('div.slide-text-bg'));
                centerHeight($('div.header').height() - 10, $('nav.main-nav').height(), $('nav.main-nav'));
            });
                        
            function centerHeight(elone, eltwo, marginEl) {
                var elOneHeight = elone;
                var elTwoHeight = eltwo;
                console.log(elOneHeight);
                return marginEl.css('marginTop', (elOneHeight - elTwoHeight) / 2); 
            }
        });
    </script>
  
    <?php wp_footer(); ?>
    
</body>
</html>