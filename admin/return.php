<?php include('include/header.php'); ?>
<?php include('include/dbcon.php'); ?>
<?php include('include/navigation.php'); ?>
<?php include('session.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Return
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Admin</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> return
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				 <div class="row">
					<div class="jumbotron col-md-12">
					 
						<div class="pull-right">
                                <a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
                                </div>
                                <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="myTable">
                                <thead>
                                    <tr>
                                         <th>Book title</th>                                 
                                        <th>Borrower</th>                                 
                                        <th>Semester</th>                                 
                                        <th>Date Borrow</th>                                 
                                        <th>Due Date</th>                                
                                        <th>Date Returned</th>
                                        
                                        
                                    </tr>
                                </thead>
                                </thead>
                                <tbody>
                                    <?php  $user_query=mysql_query("select * from borrow
                                LEFT JOIN member ON borrow.member_id = member.member_id
                                LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
                                LEFT JOIN book on borrowdetails.book_id =  book.book_id 
                                where borrowdetails.borrow_status = 'returned'ORDER BY borrow.borrow_id DESC
                                  ")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['borrow_id'];
                                    $book_id=$row['book_id'];
                                    $borrow_details_id=$row['borrow_details_id'];
                
                                    ?>
                                    <tr class="del<?php echo $id ?>">
                                    
                                                                  
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?> </td>
                                    <td><?php echo $row['date_return']; ?> </td>
                                    
                                     
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


