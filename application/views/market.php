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
                <a class="navbar-brand" href="<?= site_url('Kisaan/login');?>">स्वागत हे</a>
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
                        <a href="<?= site_url('Kisaan/login');?>">लॉग इन</a>
                    </li>
                    <li>
                        <a href="http://www.livehindustan.com/weather/8.html">मौसम</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Kisaan/indexeng');?>">अंग्रेज़ी</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Kisaan/register');?>">रजिस्टर</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="market">
     <br>
    
    <br>
    <fieldset>
          <legend><h1>बाजार खोज</h1></legend>
          <p>
             <label>क्षेत्र का चयन करें</label>
             <select id = "myList">
               <option value = "maharastra">महाराष्ट्र</option>
               <option value = "gujrat">गुजरात</option>
               <option value = "rajasthan">राजस्थान</option>
               <option value = "mp">मध्य प्रदेश</option>
               <option value = "jk">झारखंड</option>
               <option value = "wb">पश्चिम बंगाल</option>
               <option value = "kar">कर्नाटक</option>
               <option value = "tamil">तमिलनाडु</option>
               <option value = "goa">गोवा</option>
               <option value = "kerela">केरल</option>
             </select>
          </p>
          <br>
          <br>
          <p>
                             <a href="http://www.agmarknet.nic.in/agnew/NationalBEnglish/commoditywisedailyreport3.aspx" class="btn btn-default" id="shana">GO</a>
                        </p>
       </fieldset>

    </div>
<style>#shana{margin: auto 0;}</style>

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
