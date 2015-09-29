<?php include('include/header.php'); ?>
<?php include('session.php'); ?>
<?php include('include/navigation.php'); ?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
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
					<div class="jumbotron col-md-12">
					<a class="btn btn-primary" href="add_users.php" role="button">Add User</a> 
                      
						<br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>                                 
                                        <th>Firstname</th>                                 
                                        <th>Lastname</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
                                    <?php include('include/dbcon.php'); ?>
                                    <?php $user_query=mysql_query("select * from users")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['user_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['password']; ?></td> 
                                    <td><?php echo $row['firstname']; ?></td> 
                                    <td><?php echo $row['lastname']; ?></td> 
                                      <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="delete_user.php<?php echo '?id='.$id;?>" data-target="#myModal" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                        
                                        <a rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="edit_user.php<?php echo '?id='.$id;?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                       
                                    </td>
                                  
                                      
                                    </tr><?php } ?>
                                </tbody>
                            </table>
                        </div>
					</div>
                    </div>
                </div>
                <!-- /.row -->

                
                  

                
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
	<script src="../js/datatables/js/jquery.dataTables.min.js"></script>  
    <script>
        $(document).ready(function(){
            $('#myTable').dataTable();
        });
    </script>

</body>

</html>


										
