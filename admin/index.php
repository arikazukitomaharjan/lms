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
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Academa Library</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#login">Login</a>
            </li>
            
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Library management system</h1>

            <div class="alert alert-info">
                Welcome
                    &nbsp; to <strong>Academia</strong> Library                                 
    
                                <div class="pull-right">
								<img src="../img/cal.gif">
                                <?php
                                $Today = date('y:m:d');
                                $new = date('l, F d, Y', strtotime($Today));
                                echo $new;
                                ?>
                            </div>
            </div>
			<div class="container">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>
				 
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="../img/l3.jpg" alt="Library">
					  <div class="carousel-caption">
						  <h3></h3>
					  </div>
					</div>
					<div class="item">
					  <img src="../img/l2.jpg" alt="Library">
					  <div class="carousel-caption">
						  <h3></h3>
					  </div>
					</div>
					<div class="item">
					  <img src="../img/l3.jpg" alt="Library">
						  <h3></h3>
					  </div>
					</div>
				  </div>
				 
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div> <!-- Carousel -->
        </div>
	</div>	     
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container jumbotron">
            <div class="alert alert-info">
                Welcome
                    &nbsp; to <strong>Academia</strong> Library                                 
    
                                <div class="pull-right">
								<img src="../img/cal.gif">
                                <?php
                                $Today = date('y:m:d');
                                $new = date('l, F d, Y', strtotime($Today));
                                echo $new; ?>
                            </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <table width="450" style="margin: 0pt auto;">
    
    <thead><tr><th colspan="3" style="text-align: center;"><h3>LIBRARY HOURS</h3></th></tr></thead>
    <tbody>
    <tr>
    <td colspan="3"></td>
    </tr>
    <tr>
    <td>Monday and Satuarday</td>
    
    <td>7:00 a.m. to 2:00 p.m.</td>
    </tr>
    <tr>
    
    <td>BREAK</td>
    <td>9:00 a.m. to 9:30 a.m.</td>
    </tr>
    </tbody>
    </table>
    <table class="pull-right">
    <thead><tr><th><h3>LIBRARY STAFF</h3></th></tr></thead>
    <tbody>
    <tr>
    <td colspan="3"></td>
    </tr>
    <tr>
    <td>Ms.Sharmila<br />Librarian </td>
    </tr>
    
    </tbody>
    </table>
                   
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- login -->
    
    <section id="login" class="login bg-primary">
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
					
               
                </form>
            </div>
            
        </div>
    </div>
</div>
        <!-- /.container -->
    </section>
	<footer>
		<div class="navbar navbar-inverse">
			
				<center><h1><font color="white"> Copyright@academia </font </h1></center>
			
		</div>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- jQuery Version 1.11.0 -->
    <script src="LMS/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="LMS/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>