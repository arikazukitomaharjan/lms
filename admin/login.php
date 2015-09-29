	 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Library Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	 <link href="../css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
           
            <div class="account-wall">
                <img class="profile-img" src="../img/photo.png"     alt="sabin">
                <form action="login.php" class="form-signin" method="POST">
                <input name="username" type="text" class="form-control" placeholder="username" required autofocus>
                <input name="password" type="password" class="form-control" placeholder="Password" required>
                <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">
                    Login</button>
					
               <?php
	if (isset($_POST['submit'])){

mysql_select_db('library',mysql_connect('localhost','root',''))or die(mysql_error());

	
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			header('location:dashboard.php');
	$_SESSION['id']=$row['user_id'];
		}
		else{ ?>
	<div class="alert alert-danger">Access Denied</div>		
	<?php
	}}
	?>
                </form>
            </div>
            
        </div>
    </div>
	<script src="../https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 <script src="../js/bootstrap.min.js"></script>
</div>
</body>
</html>
