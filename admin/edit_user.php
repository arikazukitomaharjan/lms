<?php include('include/header.php'); ?>
<?php include('include/dbcon.php'); ?>
<?php include('session.php'); ?>
<?php include('include/navigation.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Book
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Admin</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Book
                            </li>
                        </ol>
                    </div>
                 </div>
                  <!-- /.row -->

         
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 jumbotron">
                    <?php $get_id = $_GET['id']; ?>
                      <?php 
        $query=mysql_query("select * from users where user_id='$get_id'")or die(mysql_error());
        $row=mysql_fetch_array($query);
        
        ?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit User</div>
           
    <div class="addstudent">
    <div class="details">Please Enter Details Below</div>   
    <form class="form-horizontal" method="POST" action="update_users.php" enctype="multipart/form-data">
        
        <div class="control-group">
            <label class="control-label" for="inputPassword">Username:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="username" value="<?php echo $row['username']; ?>" placeholder="Address" required>
            </div>
        </div>
         <div class="control-group">
            <label class="control-label" for="inputPassword">Password:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="password" value="<?php echo $row['password']; ?>" placeholder="Address" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputEmail">Firstname:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
            <input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Lastname:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
            </div>
        </div>
         
                          
        
                
        
        
        
        <div class="control-group">
            <div class="controls">
            <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
            </div>
        </div>
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