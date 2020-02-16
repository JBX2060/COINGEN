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
		    <ul class="nav navbar-nav">
        <li><a href="https://www.cryptocoincreator.com/create.php">Create Your Own Currency Now</a></li>
	<li><a href="upgrades.php">Upgrades</a></li>
	<li><a href="updates.php">Updates</a></li>
        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="https://www.cryptocoincreator.com/currencies.php">Currencies Created</a></li>
	<li><a href="contact.php">Contact</a></li>
      </ul>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70444196-3', 'auto');
  ga('send', 'pageview');

</script>



		</div><!-- /.container-fluid -->
	    </nav>

	    <!-- Jumbotron -->
	    <form action="create_new_currency.php" method="post" id="glc_form">
		<div class="jumbotron">
<p class="lead">
<strong>NOTE:</strong> Trial sites created with CryptoCoinCreator.com do not support bulk transfer, auto coin generation, have a downloadable wallet, and can be removed at anytime for any reason. They are created for you
to try our easy to use software while deciding to purchase a commercial license. To purchase a commercial license please click <strong>Upgrades</strong> from the navigation menu above.<br /><br />If you want to create a trial site please fill out the form below.
If you have additional questions please email support at support@cryptocoincreator.com for more info.
</p>

		    <p class="lead"><strong>Fill out the form below to create your currency now.</stromng></p>
		    
		    <p class="lead">
			<label for="textfield">UID:</label>
			<input name="uid" type="text" id="uid" size="32" maxlength="32">
			*Please create a unique id. 32 Characters Max.</p>
		    <p class="lead">
			<label for="textfield">ACCESS KEY:</label>
			<input name="access_key" type="text" id="access_key" size="32" maxlength="32">
			*Please create an access key. 32 Characters Max.</p>
		    <p class="lead">
			<label for="textfield">Currency Name:</label>
			<input name="name" type="text" id="name" size="32" maxlength="32">
			*Name your currency. 32 Characters Max.</p>
		    <p class="lead">
			<label for="textfield">Currency Symbol:</label>
			<input name="symbol" type="text" id="symbol" size="6" maxlength="6">
			*Choose a symbol upto 6 characters for your currency</p>
		    <p class="lead">
			<label for="textfield">Coins Available:</label>
			<input name="available" type="text" id="available" size="12" maxlength="12">
			*Total number of coins to be minted. </p>
		   <!-- <p class="lead">
			<label for="textfield">Funding Amount :</label>
			<input name="funding_amount" type="text" id="funding_amount" size="10" maxlength="10">
			*The amount you want to fund your coin with in BTC. </p>
		    <p class="lead">
			<label for="textfield">Initial Base Value:</label>
						<input name="ibv" type="text" id="ibv" value="" size="10" maxlength="10" readonly>

			*The initial base value of each coin.</p> -->
		    <p class="lead">
			<label for="textfield">Distribution Method:</label>
			<select name="method" id="method">
			    <option value="drop">Drop</option>
			</select> 
			*Choose a method of coin distribution</p>


		    <p><input type="button" id="submit_btn" value="Create My Currency" class="btn btn-primary btn-lg" onclick="
			    validate();
			    "></p>
		    <p id="validate_response" style="color: red;">
			
		    </p>
		</div>
	    </form>

	    <!-- START THE FEATURETTES --><!-- /END THE FEATURETTES -->


	    <!-- FOOTER -->
	    <footer>
		<p class="pull-right" style="color:#ebebeb"><a href="#" style="color:#666666">Back to top</a></p>
		<p style="color:#666666">© 2015 CryptoCoinCreator.com. All Rights Reserved.</p>
	    </footer>

	</div>   	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	
	
	<script>
	    //regexp = ^(?=.*[A-Z])(?=.*\d)(?=.*(_|[-+_!@#$%^&*.,?])).+$;
	    function validate(){
		jQuery('#validate_response').text('');
		var uid = jQuery('#uid').val();
		var access_key = jQuery('#access_key').val();
		var name = jQuery('#name').val();
		var symbol = jQuery('#symbol').val();
		var available = parseFloat(jQuery('#available').val());
		var selected_amount = parseFloat(jQuery('#funding_amount').val());
		var message;
		var valid = true;
		
		
		jQuery('#name').val(name.toLowerCase());
		jQuery('#symbol').val(symbol.toUpperCase());
		
		if(uid.length < 8 || !/^(?=.*[A-Z])(?=.*\d)(?=.*(_|[-+_!@#$%^&*.,?])).+$/.test(uid)){
		    message = "UID should be at least 8 characters long and should contain an uppercase letter, a symbol and a number";
		    valid = false;
		}else if(access_key.length < 8 || !/^(?=.*[A-Z])(?=.*\d)(?=.*(_|[-+_!@#$%^&*.,?])).+$/.test(access_key)){
		    message = "Access Key should be at least 8 characters long and should contain an uppercase letter, a symbol and a number";
		    valid = false;
		}else if(name.length < 8 || /^(?=.*(_|[-+_!@#$%^&*.,?])).+$/.test(name)){
		    message = "Currency name should be at least 8 characters long and should not contain a symbol";
		    valid = false;
		}else if(symbol.length > 6 || /^(?=.*(_|[-+_!@#$%^&*.,?])).+$/.test(symbol)){
		    message = "Currency Symbol should be at most 6 characters long and should not contain a symbol";
		    valid = false;
		}else if(available >= 1 && available <= 100000){
		    if(selected_amount < 0.05){
			message = "Minimum funding amount for " + available + " coins is 0.05 BTC";
			valid = false;
		    }
		}else if(available >= 100001 && available <= 1000000){
		    if(selected_amount < 0.10){
			message = "Minimum funding amount for " + available + " coins is 0.10 BTC";
			valid = false;
		    }
		}else if(available >= 1000001 && available <= 10000000){
		    if(selected_amount < 0.50){
			message = "Minimum funding amount for " + available + " coins is 0.50 BTC";
			valid = false;
		    }
		}else if(available >= 10000001 && available <= 100000000){
		    if(selected_amount < 1.00){
			message = "Minimum funding amount for " + available + " coins is 1.00 BTC";
			valid = false;
		    }
		}else if(available >= 100000001 && available <= 1000000000){
		    if(selected_amount < 2.50){
			message = "Minimum funding amount for " + available + " coins is 2.50 BTC";
			valid = false;
		    }
		}else if(available >= 1000000001 && available <= 2000000000){
		    if(selected_amount < 3.0){
			message = "Minimum funding amount for " + available + " coins is 3.0 BTC";
			valid = false;
		}
				}else if(available >= 2000000001 && available <= 3000000000){
		    if(selected_amount < 3.5){
			message = "Minimum funding amount for " + available + " coins is 3.5 BTC";
			valid = false;
		    }
					}else if(available >= 3000000001 && available <= 4000000000){
		    if(selected_amount < 4.0){
			message = "Minimum funding amount for " + available + " coins is 4.0 BTC";
			valid = false;
		    }
					}else if(available >= 4000000001 && available <= 5000000000){
		    if(selected_amount < 4.5){
			message = "Minimum funding amount for " + available + " coins is 4.5 BTC";
			valid = false;
		    }
					}else if(available >= 5000000001 && available <= 6000000000){
		    if(selected_amount < 5.0){
			message = "Minimum funding amount for " + available + " coins is 5.0 BTC";
			valid = false;
		    }
					}else if(available >= 6000000001 && available <= 7000000000){
		    if(selected_amount < 5.5){
			message = "Minimum funding amount for " + available + " coins is 5.5 BTC";
			valid = false;
		    }
					}else if(available >= 7000000001 && available <= 8000000000){
		    if(selected_amount < 6.0){
			message = "Minimum funding amount for " + available + " coins is 6.0 BTC";
			valid = false;
		    }
					}else if(available >= 8000000001 && available <= 8000000000){
		    if(selected_amount < 6.5){
			message = "Minimum funding amount for " + available + " coins is 6.5 BTC";
			valid = false;
		    }
					}else if(available >= 9000000001 && available <= 9999999999){
		    if(selected_amount < 7.0){
			message = "Minimum funding amount for " + available + " coins is 7.0 BTC";
			valid = false;
		    }

			
		}
		
		
		
		
		
		jQuery.ajax({
		    url: 'validate.php',
		    data: {
			name: jQuery('#name').val(),
			symbol: jQuery('#symbol').val()
		    },
		    type: 'POST',
		    success: function(response){
			if(valid){
			    if(response == "name"){
				message = "Sorry but the name you have chosen is already in use on our system.";
				valid = false;
			    }else if(response == "symbol"){
				message = "Sorry but the symbol you have chosen is already in use on our system.";
				valid = false;
			    }
			}
		    },
		    dataType: 'text'
		}).promise().done(function(){
		    if(!valid){
			jQuery('#validate_response').text(message);
		    }else{
			jQuery('#validate_response').text('');
			jQuery('#submit_btn').attr('disabled', 'disabled').val('Creating, please wait...');
			jQuery('#glc_form').submit();
		    }
		});
	    }
	    
	    jQuery(document).on('keyup focus', '#available, #funding_amount', function(){
		update_ibv();
	    });

	    function update_ibv(){
		var available = parseFloat(jQuery('#available').val());
		var selected_amount = parseFloat(jQuery('#funding_amount').val());
		jQuery.ajax({
		    url: 'get_ibv.php',
		    data: {
			available: available,
			selected_amount: selected_amount
		    },
		    type: 'POST',
		    success: function(response){
			jQuery('#ibv').val(response);
		    },
		    dataType: 'text'
		});
	    }
	    
	    
	</script>
	
    </body>
</html>
