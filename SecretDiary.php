<?php include ("login.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body, html{
		height: 100%;
	}
	.container{
		background-image:url("diary.jpg");
		height: 100%;
		width: 100%;
		background-size: cover; 
		background-position: center;
		color: #FAFAFA;
	}
	h1{
		font-size: 5em;
	}
	p{
		font-size: 1.75em;
	}
	#siteTitle{
		color: #FAFAFA;
		font-size: 3em;  
	}
	.center{
		text-align: center; 
	}
	.marginTop{
		margin-top: 100px;
	}
	.login{
		padding: 25px;
		position: relative;
		left: -20px;
	}
	.opacity{
		opacity: .8;
	}
	.opacityT{
	}
	</style>
  </head>
  <body>
  <body data-spy="scroll" data-target=".navbar-collapse">
	<div class = "navbar  opacity navbar-default navbar-fixed-top">
		<div class="mcontainer opacityT">
			<div class = "navbar-header">
				<a href ="" class = "navbar-brand">Secret Diary</a>
				<button type = "button" class = "navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class = "sr-only">Toggle navigation</span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</div>
			<div class = "collapse navbar-collapse">
				
				<form class = "navbar-form navbar-right" method = "post">
					<div class = "form-group">
						<input id = "loginEmail"  name = "loginEmail" type = "loginEmail" value = "<?php echo addslashes($_POST['loginEmail']); ?>" placeholder = "Email" class = "form-control" />
					</div>
					<div class = "form-group">
						<input type = "password" name = "loginPassword" value = "<?php echo addslashes($_POST['loginPassword']); ?>"placeholder = "Password" class = "form-control" />
					</div>
					<input type = "submit" name = "submitLogIn" value = "Log In" class = "btn btn-primary"></input>
				</form>
			</div>
		</div>
	</div>
  <div class = "container">
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3 center white marginTop">
				<h1> Secret Diary </h1>
				<p> Your own, private diary, with you wherever you go. </p>

		<?php
			if ($error){
				echo '<div class = "alert alert-danger">'.addslashes($error).'</div>';
			}
			if ($logoutMessage){
				echo '<div class = "alert alert-success">'.addslashes($logoutMessage).'</div>';
			}
		?>
		<form method="post" class = "center">
			<div class = "form-group">
				<label for = "email"> Email Address </label>
				<input type = "email" name = "email" class = "form-control" placeholder = "Enter your email here..." value = "<?php echo addslashes($_POST['email']); ?>" />
			</div>
			<div class = "form-group">
				<label for = "password"> Password </label>
				<input type = "password" name = "password" class = "form-control" placeholder = "Enter your password here..." value = "<?php echo addslashes($_POST['password']); ?>"/>
			</div>
			<input type = "submit" name = "submitSignUp" value = "Register" class = "btn btn-success" />
		</form>
		</div>
	</div>
</div>
	
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
	
	</script>
 </body>
</html>