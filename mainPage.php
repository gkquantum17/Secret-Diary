<?php  
	session_start();
	include("connection.php"); 
	
	$query="SELECT diary FROM users WHERE id = '".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result); 
	
	$diary = $row['diary'];
?>

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
		margin-top: 80px;
		
	}
	.login{
		padding: 25px;
		position: relative;
		left: -20px;
	}
	.opacity{
		opacity: .8;
	}
	.logout{
		padding-right: 10px;
	}
	</style>
  </head>
  <body>
  <body data-spy="scroll" data-target=".navbar-collapse">
	<div class = "navbar  opacity navbar-default navbar-fixed-top">
		<div class="mcontainer ">
			<div class = "navbar-header pull-left">
				<a href ="" class = "navbar-brand">Secret Diary</a>
			</div>
			<div class = "pull-right">
				<ul class = "navbar-nav nav logout">
					<li><a href = "SecretDiary.php?logout=1"> Log Out </a></li>
				</ul>
			</div>
		</div>
	</div>
  <div class = "container">
	<div class = "row">
		<div class = "col-md-6 col-md-offset-3 center white marginTop">
			<textarea class = "form-control" ><?php echo $diary; ?></textarea>
		</div>
	</div>
</div>
	
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		$(".container").css("min-height",$(window).height());
		$("textarea").css("min-height",$(window).height()-100); 
		$("textarea").keyup(function(){
			$.post("updateDiary.php", {diary:$("textarea").val()});
		});
	</script>
 </body>
</html>