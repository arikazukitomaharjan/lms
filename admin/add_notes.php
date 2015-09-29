<?php include('include/header.php'); ?>
<?php include('session.php'); ?>
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
							<form role="form" method="POST" action="note_save.php">

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title">
                           </div>
                           <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" name="subject">
                           </div>
                      
					
							<div class="form-group">
									<label>Note</label>
									<textarea class="form-control" rows="3" name="note"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-default">Save</button>
							</form>
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
	<script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
