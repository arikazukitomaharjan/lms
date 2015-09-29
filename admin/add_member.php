<?php include('include/header.php'); ?>
<?php include('include/dbcon.php'); ?>
<?php include('include/navigation.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Member
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
                         <form role="form" method="POST" action="member_save.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>FIRST NAME</label>
                                <input class="form-control" type="text"  id="inputEmail" name="firstname"  placeholder="first name" required>
                                
                            </div>

                            

                            <div class="form-group" method="POST" action="member_save.php" enctype="multipart/form-data">
                                <label>LASTNAME</label>
                                <input class="form-control" type="text"  id="inputPassword" name="lastname"  placeholder="last name" required>
                                
                            </div>

                            <div class="form-group">
                                <label>GENDERr</label>
                                <select class="gender" name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                      
                                </select>
                            </div>        

                            <div class="form-group">
                                <label>ADDRESS</label>
                                <input class="form-control" type="text"  id="inputPassword" name="address"  placeholder="" required>
                                
                            </div>

                             <div class="form-group">
                                <label>PHONE NO.</label>
                                <input class="form-control" type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="10">
                                
                            </div>

                                        
                            <div class="form-group">
                                <label>TYPE</label>
                                <select class="type" name="type">
                                        <option>Student</option>
                                        <option>Teacher</option>
                                        <option>Staff</option>
                                        <option>Employee</option>
                                        <option>Non-Teaching</option>
                                      
                                </select><br><br>
                                

                                <div class="form-group">
                                <label>SEMESTER</label>
                                <select class="type" name="year_level">
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