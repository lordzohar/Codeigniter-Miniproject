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
                <a href="<?php echo site_url('Kisaan/profileeng');?>"><h5>WELCOME</h5></a>
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
                        <a href="http://www.bbc.com/weather/1275339">weather</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/profileeng');?>">english</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/profile');?>">hindi</a>
                    </li>
                    <li>    
                        <a href="<?php echo site_url('Kisaan/profileset');?>">profile</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Kisaan/logout');?>   ">logout</a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<h2>Edit your account settings below!</h2>

	<hr>
	<p>Change Profile Picture:</p>
	<form action="" method="post" enctype="multipart/form-data" class="form">
	<img src="<?php echo "profile_pic"; ?>" width="70">
	<input class="in" type="file" name="profilepic"><br>
	<input class="update" type="submit" name="uploadpic" id="uploadpic" value="Upload Image"><br>

</form>
	<hr>
	<p>Change Your Password:</p>
<form action="<? site_url('Kisaan/update')?>" method="POST">
	<input class="in" type="text" name="oldpassword" id="oldpassword" size="50" placeholder="Your Old Password"><br>
	<input class="in" type="text" name="newpassword" id="newpassword" size="50" placeholder="Your New Password"><br>
	<input class="in" type="text" name="newpassword2" id="newpassword2" size="50" placeholder="Re-Enter Your New Password"><br>
	<input class="update" type="submit" name="senddata" id="senddata" value="Update Password"><br>
</form>

	<hr>
	<p>Edit Your Profile:</p>
<form action="<? site_url('Kisaan/update')?>" method="POST">
	<input class="in" type="text" name="fname" id="fname" size="50" placeholder="First Name" value="<?php echo $db_firstname ?>"><br>
	<input class="in" type="text" name="lname" id="lname" size="50" placeholder="Last Name" value="<?php echo $db_last_name ?>"><br>
	<textarea name="bio" id="bio" placeholder="About You" rows="7" cols="50"></textarea>


	<hr>
	<input class="update" type="submit" name="updateinfo" id="updateinfo" value="Update Info"><br>
</form>

<h2>Edit your account settings below!</h2>

	<hr>
	<p>Change Profile Picture:</p>
	<form action="<? site_url('Kisaan/update')?>" method="post" enctype="multipart/form-data" class="form">
	<img src="<?php echo $profile_pic; ?>" width="70">
	<input class="in" type="file" name="profilepic"><br>
	<input class="update" type="submit" name="uploadpic" id="uploadpic" value="Upload Image"><br>

</form>
	<hr>
	<p>Change Your Password:</p>
<form action="<? site_url('Kisaan/update')?>" method="POST">
	<input class="in" type="text" name="oldpassword" id="oldpassword" size="50" placeholder="Your Old Password"><br>
	<input class="in" type="text" name="newpassword" id="newpassword" size="50" placeholder="Your New Password"><br>
	<input class="in" type="text" name="newpassword2" id="newpassword2" size="50" placeholder="Re-Enter Your New Password"><br>
	<input class="update" type="submit" name="senddata" id="senddata" value="Update Password"><br>
</form>

	<hr>
	<p>Edit Your Profile:</p>
<form action="<? site_url('Kisaan/update')?>" method="POST">
	<input class="in" type="text" name="fname" id="fname" size="50" placeholder="First Name" value="<?php echo $db_firstname ?>"><br>
	<input class="in" type="text" name="lname" id="lname" size="50" placeholder="Last Name" value="<?php echo $db_last_name ?>"><br>
	<textarea name="bio" id="bio" placeholder="About You" rows="7" cols="50"><?php echo $db_bio ?></textarea>


	<hr>
	<input class="update" type="submit" name="updateinfo" id="updateinfo" value="Update Info"><br>
</form>
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
