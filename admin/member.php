
<?php include('include/header.php'); ?>
<?php include('session.php'); ?>
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
                                <i class="fa fa-table"></i> member
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                    <div class="row">
					<div class="jumbotron col-md-12">
					<a class="btn btn-primary" href="add_member.php" role="button">Add User</a> 
                      
                      <br/>
                      <hr>
						
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="sabin">
                                <thead>
                                    <tr>
                       
                                        <th>Name</th>                                 
                                        <th>Gender</th>
										<th>Address</th>
										<th>Contact</th>
										<th>Type</th>
										<th>Semester</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
								<?php include('include/dbcon.php'); ?>
                                    <?php  $user_query=mysql_query("select * from member")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['gender']; ?> </td> 
                                    <td><?php echo $row['address']; ?> </td>
                                    <td><?php echo $row['contact']; ?></td>
									<td><?php echo $row['type']; ?></td> 
									<td><?php echo $row['year_level']; ?></td> 
								
                                    <td >
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="delete_member.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                        
                                        <a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                        
                                    </td>
                                    </tr>
									<?php  }  ?>
                                    
                                </tbody>
                            </table>
                        </div>
					</div>
                    </div>
                </div>
                <!-- /.row -->

                
                  

                

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
$(document).ready( function () {
    $('#sabin').dataTable().makeEditable({
                        sUpdateURL: "member.php",
                        "aoColumns": [
                                    null,
                                    {
                                    },
                                    {
                                        indicator: 'Saving platforms...',
                                        tooltip: 'Click to edit platforms',
                                        type: 'textarea',
                                        submit:'Save changes',
                                        fnOnCellUpdated: function(sStatus, sValue, settings){
                                            alert("(Cell Callback): Cell is updated with value " + sValue);
                                        }
                                    },
                                    {
                                        //indicator: 'Saving Engine Version...',
                                        tooltip: 'Click to select engine version',
                                        loadtext: 'loading...',
                                        type: 'select',
                                        onblur: 'cancel',
                                        submit: 'Ok',
                                        loadurl: 'EngineVersionList.php',
                                        loadtype: 'GET',
                                        sUpdateURL: "CustomUpdateEngineVersion.php"
                                    },
                                    {
                                        indicator: 'Saving CSS Grade...',
                                        tooltip: 'Click to select CSS Grade',
                                        loadtext: 'loading...',
                                        type: 'select',
                                        onblur: 'submit',
                                        data: "{'':'Please select...', 'A':'A','B':'B','C':'C'}",
                                        sUpdateURL: function(value, settings){
                                            alert("Custom function for posting results");
                                            return value;

                                        }
                                    }
                    ]                                   
                });
    })
    
</script>

</body>

</html>
