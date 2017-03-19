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
                <a href="<?php echo site_url('Kisaan/indexeng');?>"><h5>WELCOME</h5></a>
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
                          <li><b>w</b>heat</li>
                                <li><b>r</b>ice</li>
                                <li><b>c</b>orn</li>
                                <li><b>su</b>garcane</li>
                                <li><b>to</b>mato</li>
                             </ul>
						</form>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/login');?>">log_in</a>
                    </li>
                    <li>
                        <a href="http://www.livehindustan.com/weather/8.html">weather</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/indexeng');?>">english</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/index');?>">hindi</a>
                    </li>
                    <li>    
                        <a href="<?php echo site_url('Kisaan/register');?>">register</a>
                    </li>
                    <li>    
                        <a href="<?php echo site_url('Kisaan/donationeng');?>">Donation</a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <link rel="stylesheet" href="<?php echo base_url();?>css/slider.css" />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/scriptslide.js" type="text/javascript"></script>
    
 </head> 
 <body> 
  <div id="container"> 
   <header> 
    <h1>Hello Kissan Bhai</h1> 
   </header> 
   <img src="<?php echo base_url();?>img/btn1.png" alt="Prev" id="prev"> 
   <div id="slider"> 
    <!-- slide 1 --> 
    <div class="slide" style="display: block;"> 
     <div class="slide-copy"> 
      <h2>HARVEST</h2> 
      <p>Harvesting is the process of gathering a ripe crop from the fields. Reaping is the cutting of grain or pulse for harvest, typically using a scythe, sickle, or reaper.[1] On smaller farms with minimal mechanization, harvesting is the most labor-intensive activity of the growing season.</p> 
     </div> 
     <img src="<?php echo base_url();?>img/farm1.jpg"> 
    </div> 
    <!-- slide 2 --> 
    <div class="slide" style="display: none;"> 
     <div class="slide-copy"> 
      <h2>FARMING</h2> 
      <p>A farm is an area of land that is devoted primarily to agricultural processes with the primary objective of producing food and other crops; it is the basic facility in food production.[1]</p> 
     </div> 
     <img src="<?php echo base_url();?>img/farm2.jpg"> 
    </div> 
    <!-- slide 3 --> 
    <div class="slide" style="display: none;"> 
     <div class="slide-copy"> 
      <h2>SAVE FARMER</h2> 
      <p>PLEASE SAVE FARMER,THEY ARE IMPORTANT.</p> 
     </div> 
     <img src="<?php echo base_url();?>img/farm3.jpeg"> 
    </div> 
    <!-- slide 4 --> 
    <div class="slide" style="display: none;"> 
     <div class="slide-copy"> 
      <h2>FARMER FAMILY</h2> 
      <p>FARMER DO HAVE FAMILY TO FEED</p> 
     </div> 
     <img src="<?php echo base_url();?>img/farm4.jpeg"> 
    </div> 
    <!-- slide 5 --> 
    <div class="slide" style="display: none;"> 
     <div class="slide-copy"> 
      <h2>CROPS</h2> 
      <p>CROP FOR FARMER TO EXCEEDS</p> 
     </div> 
     <img src="<?php echo base_url();?>img/farm5.jpeg"> 
    </div> 
   </div> 
   <img src="<?php echo base_url();?>img/btn2.png" alt="Next" id="next"> 
  </div> 

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <q>The farmer is the owner|Fatefulness of the country is a farmer</q>

            <h1>Hello Kisan Bhai</h1>

            <p>HERE WE HELP INDAIN AND AS WELL AS INTERNATIONAL FARMER TO PROVIDE NEARBY BEST MARKET,
             BEST CROPS,TECHNOLGY AVAILABLE FOR CROPS,AND SHOP TO SELL CROPS</p>
            <p><a class="btn btn-primary btn-large" href="<?php echo site_url('Kisaan/cc')?>" >Call Customer Care!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>FOR OUR FARMERS.....</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center scheme-container">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/image4.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>SHOPS</h3>
                        <p>BEST SHOPS AVAILBLE FOR CROP TO SELL</p>
                        <p>
                            <a href="<?= site_url('Kisaan/shop');?>" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/image3.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>CROPS</h3>
                        <p>ALL TYPES OF CROPS AVALAIBLE</p>
                        <p>
                            <a href="<?php echo site_url('Kisaan/crop')?>" class="btn btn-primary" >GO</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                <img src="<?php echo base_url();?>img/image1.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>MARKET</h3>
                        <p>NEAREST MARKET SEARCH FOR BEST PRICE</p>
                        <p>
                             <a href="<?= site_url('Kisaan/market');?>" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>img/image2.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>TECHNOLOGY</h3>
                        <p>TECHNOLOGY USED FOR BEST CROP RESULT</p>
                        <p>
                             <a href="<?php echo site_url('Kisaan/technology')?>" class="btn btn-primary">GO</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature" >
                <div class="thumbnail" >
                    <img src="<?php echo base_url();?>img/info.jpeg" height="800" width="500">
                    <div class="caption">
                        <h3>information</h3>
                        
                        <p>
                             <a href="<?php echo site_url('Kisaan/info');?>">GO</a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="shah class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img  src="<?php echo base_url();?>img/govt.jpg" height="800" width="500">
                    <div class="caption">
                        <h3>government scheme</h3>
                        <p>providing best government scheme for farmers</p>
                        <p>
                              <a href="http://farmer.gov.in/">GO</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; KISAAN BHAI 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


</body>

</html>
