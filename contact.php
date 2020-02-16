<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

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
			<a class="navbar-brand" href="index.php"><img style="max-width:50px; margin-top: -14px;" src="symbol_sm_white.png" alt=""></a>	    </div>

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

	    <div class="jumbotron">
		
		

    
    		<div class="row">
		  	
		    <div class="panel panel-default">
			<div class="panel-heading">
			    <h3>Contact</h3>
			</div>
			<div class="panel-body">
			    <form id="form_contact">
				<div class="col-md-12 col-xs-8">
				    <div class="input-group text">
					<label class="">Name</label>
					<input id="name" class="form-control" name="name" type="text">
				    </div>
				</div>
				<div class="col-md-12 col-xs-12">
				    <br/>
				</div>
				<div class="col-md-12 col-xs-8">
				    <div class="input-group text">
					<label class="">Email</label>
					<input id="email" class="form-control" name="email" type="text" size="40">
				    </div>
				</div>
				
				<div class="col-md-12 col-xs-12">
				    <br/>
				</div>
				<div class="col-md-12 col-xs-8">
				    <div class="input-group text">
					<label class="">Message</label><br/>
					<textarea name="message" id="message" cols="60" rows="5"></textarea>
				    </div>
				</div>
				<div class="col-md-12 col-xs-12">
				    <br/>
				</div>
				<div class="col-md-12 col-xs-8">
				    <label class="lbl_field_label">Please enter the values shown:</label>
				    <img id="img_captcha" />:
				    <div id="img_captcha_container">

				    </div>
				    <br/>
				    <input type="text" id="captcha" name="captcha"/>
				    <img src="images/generate.gif" id="img_refresh"/>
				</div>
				<div class="col-md-12 col-xs-12">
				    <br/>
				</div>
				<div class="col-md-12 col-xs-12">
				    <span id="b_message"></span><br/>
				    <button type="submit" class="btn btn-lg btn-primary" id="do_buy">Send</button>
				</div>
			    </form>
			</div>
		    </div>
		</div>

		
	    </div>
	    <!-- FOOTER -->
	    <footer>
		<p class="pull-right" style="color:#ebebeb"><a href="#" style="color:#666666">Back to top</a></p>
		<p style="color:#666666">© 2015 . All Rights Reserved.</p>
	    </footer>

	</div>   		

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script>
	    $(document).ready(function(){
		$.fn.image = function (src, f) {
		    return this.each(function () {
			var i = new Image();
			i.src = src;
			i.onload = f;
			$(this).html(i);
		    });
		};

		$('#form_contact').ajaxForm({
		    url: 'process_contact.php',
		    type: 'POST',
		    success: function(data) {
			if(data.indexOf('not pass')!==-1){
			    $('#b_message').text("Sorry you did not pass the captcha test. Please try again.");
			    load_captcha();
			}else{
			    $('#b_message').text(data);
			    $('#form_contact').find("input[type=text], textarea").val("");
			}
		    },
		    dataType: 'HTML'
		});


		function load_captcha(){
		    $('#img_captcha_container').image('get_captcha.php', function(){});
		}

		load_captcha();

		$(document).on('click', '#img_refresh', function(){
		    load_captcha();
		});
	    });
	</script>
    </body>
</html>
