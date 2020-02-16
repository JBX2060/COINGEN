<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CryptoCoinCreator.com - Create your own Hybrid CryptoCurrency!</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.navbar {
border-radius: 0px;
padding-bottom: 0px;
margin-bottom:0px !important;
margin-top:10px;
}

body { 
background:#C8C8C8;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
.carousel-caption { margin-top:0px !important }

</style>
  </head>
  <body>

 <div class="container">
  <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img style="max-width:50px; margin-top: -14px;" src="symbol_sm_white.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav">
        <li><a href="create.php">Create Your Own Currency Now</a></li>
        <li><a href="faqs.php">FAQs</a></li>  
        <li><a href="updates.php">Updates</a></li>  
        <li><a href="exchange.php">Coin Exchange</a></li>
        <li><a href="currencies.php">Currencies Created</a></li>
      </ul>      
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Jumbotron -->
  
	    <form action="create_new_exchange_account.php" method="post" >
		<div class="jumbotron">
		    <p class="lead"><a href="exchange.php">COIN EXCHANGE</a> > CREATE ACCOUNT</p>
          
            <p class="lead">Fill out the form below to create your exchange account.</p>
		    
		    <p>
			<label for="textfield">Email Address:</label>
			<input name="email" type="text" id="textfield" size="32" maxlength="32">
			</p>
                <p>
                  <label for="textfield">Confirm Email Address:</label>
			<input name="verify_email" type="text" id="textfield" size="32" maxlength="32">
			</p>
		    <p>
			<label for="textfield">Password:</label>
			<input name="password" type="password" id="textfield" size="32" maxlength="32">
			</p>
	      <p>
			<label for="textfield">Confirm Password:</label>
			<input name="verify_password" type="password" id="textfield" size="32" maxlength="32">
			</p>
	      <p><input type="submit" value="Create My Account" class="btn btn-primary btn-lg">
		    </p>
		</div>
	    </form>
 



      <!-- START THE FEATURETTES --><!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right" style="color:#ebebeb"><a href="#" style="color:#666666">Back to top</a></p>
        <p style="color:#666666">© 2015 CryptoCoinCreator.com. All Rights Reserved.</p>     </footer>
	
 </div>   		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>