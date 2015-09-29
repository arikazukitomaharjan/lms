<?php include('include/header.php'); ?>
<?php include('include/dbcon.php'); ?>
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
        $query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
        $row=mysql_fetch_array($query);
        
        ?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Member</div>
            <p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
    <div class="addstudent">
    <div class="details">Please Enter Details Below</div>   
    <form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
            
        <div class="control-group">
            <label class="control-label" for="inputEmail">Firstname:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
            <input  type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Firstname" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Lastname:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Gender:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="gender" value="<?php echo $row['gender']; ?>" placeholder="Gender" required>
            </div>
        </div>  
        <div class="control-group">
            <label class="control-label" for="inputPassword">Adddress:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Contact:</label>
            <div class="controls">
            <input class="form-control" type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Type:</label>
            <div class="controls">
            <select class="form-control" name="type" required>
            
            
    
                                    
                                    <option><?php echo $row['type']; ?></option>
                                    <option>Student</option>
                                    <option>Teacher</option>
                                    
                </select>
            </div>
        </div>
            
        <div class="control-group">
            <label class="control-label" for="inputPassword">Year Level:</label>
            <div class="controls">
                <select class="form-control" name="year_level" required>         
                                    <option><?php echo $row['year_level']; ?></option>
                                        <option>I</option>
                                        <option>II</option>
                                        <option>III</option>
                                        <option>IV</option>
                                        <option>V</option>
                                        <option>VI</option>
                                        <option>VII</option>
                                        <option>VIII</option>
                </select>
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

      <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>
        <script>
        $(function() {
<!--             $(".datepicker").datepicker(); -->
<!--             $(".uniform_on").uniform() -->;
            $(".chzn-select").chosen();
   <!--          $('.textarea').wysihtml5(); -->

        });
        </script>
           
</body>
</html>