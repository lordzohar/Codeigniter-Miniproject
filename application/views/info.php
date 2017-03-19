<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KISAAN BHAI</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/heroic-features.css');?>" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/var/www/html/myedittoheroic/indexeng.html">WELCOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                        
                        
                        <form class="searchForm" method="get" action="">              
                          <input class="searchTerm"  placeholder="Search…" autocomplete="off"/>
                          <input type="submit" class="searchBtn" value="GO"/>
                                      <ul class="suggestionBox">
                                  <li><b>a</b>pple</li>
                                          <li><b>a</b>ndroid</li>
                                          <li><b>a</b>mazon</li>
                                          <li><b>a</b>ol</li>
                                          <li><b>a</b>tlanta</li>
                                      </ul>
                        </form>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/login')?>">log_in</a>
                    </li>
                    <li>
                        <a href="http://www.livehindustan.com/weather/8.html">weather</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/indexeng')?>">english</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/index')?>">hindi</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/register')?>">register</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/donation')?>">donation</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/wheat.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>गेहूं</h3>
                        <p>कैसे गेहूं की खेती बढ़ने के लिए</p>
                        <p>
                            <a href="<?php echo site_url('Kisaan/wheat')?>" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div><div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/sugarcane.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>गन्ना</h3>
                        <p>कैसे गन्ना की खेती बढ़ने के लिए</p>
                        <p>
                            <a href="<?php echo site_url('Kisaan/rice')?>">GO</a>
                        </p>
                    </div>
                </div>
            </div><div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/rice.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>चावल</h3>
                        <p>कैसे चावल की खेती बढ़ने के लिए</p>
                        <p>
                            <a href="<?php echo site_url('Kisaan/sugarcane')?>" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/corn.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>मक्का</h3>
                        <p>कैसे गमक्का की खेती बढ़ने के लिए</p>
                        <p>
                            <a href="<?php echo site_url('Kisaan/corn')?>">GO</a>
                        </p>
                    </div>
                </div>
            </div>




</body>