<?php include('include/header.php'); ?>

<?php include('include/navigation.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Notes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Admin</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> notes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                    <div class="row">
					<div class="jumbotron col-md-12">
					<a class="btn btn-primary" href="add_notes.php" role="button">Add Note</a> 
                      
						<br>
                        <br>
                        <div class="table-responsive">
                            
							<table class="table table-bordered table-hover table-striped" id="noteTable">
                                <thead>
                                    <tr>
									    <th style="width:3px;">Sn</th>   
                                        <th >Topic</th>
                                        <th >Subject</th>
                                        <th>Notes</th>                     
                                                          
                                        <th style="width:3px;">Action</th>
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
                                     <?php include('include/dbcon.php'); ?>
                                     
                                    <?php $user_query=mysql_query("select * from notes")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['note_id']; ?>

                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $id ?></td> 
                                    <td><?php echo $row['title']; ?></td> 
                                    <td><?php echo $row['subject']; ?></td> 
                                    <td><?php echo $row['note']; ?></td> 
                                     <?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a title="Delete" id="<?php echo $id; ?>" href="delnote.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                        
                                        <a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="edit_note.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                        
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
	<script src="../js/datatables/js/jquery.dataTables.min.js"></script>
     <script>
    $(document).ready(function(){
        $('#noteTable').dataTable();
    });
    </script>

</body>

</html>
