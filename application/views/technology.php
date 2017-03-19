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
                <a class="navbar-brand" href="<?php echo site_url('Kisaan/index');?>">स्वागत हे</a>
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
                        <a href="<?php echo site_url('Kisaan/login');?>">लॉग इन</a>
                    </li>
                    <li>
                        <a href="http://www.bbc.com/weather/1275339">मौसम</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/indexeng');?>">अंग्रेज़ी</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/register');?>">रजिस्टर</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/irrigation.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>सिंचाई</h3>
                        <p>सिंचित के बारे में जानकारी</p>
                        <p>
                            <a href="https://www.youtube.com/watch?v=amrCMakolKA" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>
<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/robotic.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>रोबोटिक</h3>
                        <p>रोबोटिक के बारे में जानकारी</p>
                        <p>
                            <a href="https://www.youtube.com/watch?v=hjd5DaxkLhQ" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>
<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/Variable-Rate.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>चर दर</h3>
                        <p>खेती के लिए चर दर पर जानकारी</p>
                        <p>
                            <a href="https://www.youtube.com/watch?v=2VIarcQvkVg" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>
<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/Mobile-Device.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>मोबाइल उपकरण</h3>
                        <p>फ्रेमन के लिए मोबाइल उपकरणों पर जानकारी</p>
                        <p>
                            <a href="https://www.youtube.com/watch?v=iGgOE7tNjg4" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>
<div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/GPS-GNSS.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>जीपीएस-जीएनएसएस</h3>
                        <p>खेती पर जीपीएस-जीएनएसएस की जानकारी</p>
                        <p>
                            <a href="https://www.youtube.com/watch?v=uMAO9I75kkc" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>


</body>
</html>
