<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <title>MG Larder Building and Construction</title>
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