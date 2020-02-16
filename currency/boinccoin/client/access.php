<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>boinccoin - created with CryptoCoinCreator.com</title>

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
      <a class="navbar-brand" href="index.php"><img style="max-width:50px; margin-top: -14px;" src="images/users/icon.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="getawallet.php">Get A Wallet</a></li>
<li><a href="access.php">Access My Wallet</a></li>
<li><a href="faqs.php">FAQs</a></li>
<li><a href="transactions.php">Public Ledger</a></li>
</ul>
</div>  </div><!-- /.container-fluid -->
</nav>
   
         
 <!-- Jumbotron -->
    <form action="auth.php" method="post">
      <div class="jumbotron">
        <p class="lead">Fill out the form below to access your wallet.</p>
                                       <p class="lead">
          <label for="textfield">UID:</label>
          <input name="uzid" type="text" id="textfield" size="32" maxlength="100">
        *Enter your UID</p>
          <p class="lead">
          <label for="textfield">Wallet Key:</label>
          <input name="wallet_key" type="text" id="textfield" size="32" maxlength="32">
        *The Key you chose when creating your wallet.        </p>
        <p class="lead">
          <label for="textfield">Wallet Address:</label>
          <input name="wallet_address" type="text" id="textfield" size="32" maxlength="32">
        *Enter your wallet address.        </p>
          <p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
		    <p><input type="text" size="6" maxlength="5" name="captcha" value=""><br>
			<small>copy the digits from the image into this box</small>
		    </p>
        <p><input type="submit" value="Access My Wallet" class="btn btn-primary btn-lg" onclick="this.disabled=true;this.value='Please wait...';this.form.submit();"></p>
      </div>
</form>
      <!-- START THE FEATURETTES --><!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right" style="color:#ebebeb"><a href="#" style="color:#666666">Back to top</a></p>
        <p style="color:#666666">© 2015 boinccoin. All Rights Reserved.</p>
      </footer>
	
 </div>   		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>