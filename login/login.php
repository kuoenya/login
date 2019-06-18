<html>
<head>
	<title>LOGIN</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
	<style>
		.well, .panel {text-align: center;}
	</style>
</head>
<body>

	<!-- <div>
		<form action="actionlogin.php" method="POST">
			Email:<br />
			<input type="email" name="email">
			<br />
			Password:<br />
			<input type="password" name="password">
			<br /> <br />
			<input type="submit" name="submit" value="Login">
			<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
		</form>
	</div> -->
	<div class="container">
        <form role="form" action="actionlogin.php" method="POST">
            <div class="form-group">
                Email:<input type="email" class="form-control" id="exampleInputEmail1" name="email"> 
            </div>
            <div class="form-group">
                Password:<input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
     
            <input type="submit" name="submit" value="Login" class="btn btn-default">
            <input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer']:'index.php';?>">
        </form>
    </div>

		

	
</body>
</html>