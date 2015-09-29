<?php include('include/header.php'); ?>
<?php include('include/dbcon.php'); ?>
<?php include('include/navigation.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Admin</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> user
                            </li>
                        </ol>
                    </div>
                 </div>
                  <!-- /.row -->

         
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 jumbotron">
                         <form role="form" method="POST">

                            <div class="form-group">
                                <label>USER NAME</label>
                                <input class="form-control" type="text"  id="inputEmail" name="username"  placeholder="first name" required>
                                
                            </div>

                            

                            <div class="form-group" method="POST" action="member_save.php" enctype="multipart/form-data">
                                <label>PASSWORD</label>
                                <input class="form-control" type="text"  id="inputPassword" name="password"  placeholder="last name" required>
                                
                            </div>

                            <div class="form-group">
                                <label>FIRST NAME</label>
                                <input class="form-control" type="text"  id="inputEmail" name="firstname"  placeholder="first name" required>
                                
                            </div>

                           
                            <div class="form-group">
                                <label>LASTNAME</label>
                                <input class="form-control" type="text"  id="inputPassword" name="lastname"  placeholder="" required>
                                
                            </div>

                                         

                            <button type="submit" name="submit" class="btn btn-default">Save</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


           
</body>
</html>
<?php
    if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    
    mysql_query("insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysql_error());
   
   header('location:users.php');
    }
    ?>