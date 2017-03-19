<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Donation for flood victims</title>
     <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/heroic-features.css');?>" rel="stylesheet">

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
                <a class="navbar-brand" href="<?php echo site_url('Kisaan/index');?>">स्वागत हे</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                        
                  
                  <form class="searchForm" method="get" action="<?php 
                  echo site_url('Kisaan/select');?>">              
                    <input  name="search" class="searchTerm"  placeholder="Search…" autocomplete="off"/>
                    
                    <input  type="submit" class="searchBtn" value="GO"/>
                             <ul class="suggestionBox">
                              <li ><b>w</b>heat</b></li>
                                <li><b>r</b>ice</li>
                                <li><b>c</b>orn</li>
                                <li><b>su</b>garcane</li>
                                <li><b>to</b>mato</li>
                             </ul>
                  </form>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/login');?>   ">लॉग इन</a>
                    </li>
                    <li>
                        <a href="http://www.livehindustan.com/weather/8.html">मौसम</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/indexeng');?>">अंग्रेज़ी</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/register');?>   ">रजिस्टर</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

     </head>
    <body>
    <!--./ HEADER SECTION BAR END -->
    
    <div id="main-head">
    <div class="donation">
        <div class="row">
          <div class="col-lg-6  col-md-6 col-sm-12"


          >
            <br><br><h1>धन जुटाने</h1>
                    <h5>हमने इनके फंड को उठाया है </h5>
                    <span><strong><i class="fa fa-rupee"></i>50,10,345 </strong></span>
                    <h6><b>अगर आप दान करना चाहते हैं<br>
                    कृपया अपना ईमेल और दान की राशि दर्ज करें</b></h6> 
                        <form>
                        <div class="form-group">
                            <input type="text" size=150px class="form-control" required="required" placeholder="ईमेल">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="दान की राशि">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-style-1 btn-lg ">अभी दान कीजिए</button>
                        </div>

                    </form>


                </div>

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

    <script>
      
    </script>
</body>
</html>
