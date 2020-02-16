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
<!--        <li><a href="exchange.php">Coin Exchange</a></li> -->
        <li><a href="currencies.php">Currencies Created</a></li>
      </ul>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70444196-3', 'auto');
  ga('send', 'pageview');

</script>



      
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Jumbotron -->
  
      <div class="jumbotron">
      
                  <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Exchange</li>

</ol>

  
      <div align="center">
<form class="form-inline" method="post" action="auth_exchange.php">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email" value="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password" value="Password">
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
<!--<a href="create_exchange.php" class="btn btn-default">Create Exchange Account</a><br>
-->
</form>
  </div>
<br><div class="table-responsive">


  <table class="table">
 <tr>
  <td>SYM</td>
  <td>NAME</td>
  <td>PRICE</td>
  <td>ACTIONS</td>
</tr>


 <tr>
  <td class="active">BTC</td>
<td class="active">bitcoin</td>
<td class="active">
<font color="">$606.37 (USD)</font>
</td>
        
<td class="active">
  <a href="exchange_deposit.php?coin=BTC" class="btn btn-default">DEPOSIT</a> 
  </td>
  
</tr>


 <tr>
  <td class="active">XRD</td>
<td class="active">
rupeedigicoin </td>
<td class="active">

<font color="#FF0004"> (BTC) | $ (USD)</font>
</td>
        
<td class="active">
  <a href="exchange_order.php?coin=XRD" class="btn btn-default">BUY / SELL</a> 
  <a href="exchange_deposit.php?coin=XRD" class="btn btn-default">DEPOSIT</a> 
  </td>
  
</tr>

 <tr>
  <td class="active">LUCKY</td>
<td class="active">
luckycoin </td>
<td class="active">

<font color="#FF0004"> (BTC) | $ (USD)</font>
</td>
        
<td class="active">
  <a href="exchange_order.php?coin=LUCKY" class="btn btn-default">BUY / SELL</a> 
  <a href="exchange_deposit.php?coin=LUCKY" class="btn btn-default">DEPOSIT</a> 
  </td>
  
</tr>

  </table>
</div>

  
   </div>

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
