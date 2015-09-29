<?php include('include/header.php'); ?>
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
                     <ul class="nav nav-pills">
                                        <li   class="active"><a href="books.php">All</a></li>
                                        <li><a href="new_books.php">New Books</a></li>
                                        <li><a href="old_books.php">Old Books</a></li>
                                        <li><a href="lost.php">Lost Books</a></li>
                                        <li><a href="damage.php">Damage Books</a></li>
                                        <li><a href="sub_rep.php">Subject for Replacement</a></li>
                                    </ul>
                    <div class="jumbotron col-md-12">

                    <a class="btn btn-primary" href="addbooks.php" role="button">Add books</a> 
                      <a class="pull-right" href="" onclick="window.print()" class="btn btn-info"><i class="glyphicon glyphicon-print"></i> Print</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="bookTable">
                               <thead>
                                    <tr>
                                        <th>Acc No.</th>                                 
                                        <th>Book Title</th>                                 
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th class="action">copies</th>
                                        <th>Book Pub</th>
                                        <th>Publisher Name</th>
                                        <th>ISBN</th>
                                        <th>Copyright Year</th>
                                        <th>Date Added</th>
                                        <th>Status</th>
                                        <th class="action">Action</th>      
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php include('include/dbcon.php'); ?>
                                    <?php       
                                            
                                  $user_query=mysql_query("select * from book where status != 'Archive'")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['book_id'];  
                                    $cat_id=$row['category_id'];
                                    $book_copies = $row['book_copies'];
                                    
                                    $borrow_details = mysql_query("select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
                                    $row11 = mysql_fetch_array($borrow_details);
                                    $count = mysql_num_rows($borrow_details);
                                    
                                    $total =  $book_copies  -  $count; 
                                    /* $t4otal =  $book_copies  - $borrow_details;
                                    
                                    echo $total; */
                                            $cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
                                            $cat_row = mysql_fetch_array($cat_query);
                                    ?>
                                    <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo /* $row['book_copies']; */   $total;   ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
                                     <td><?php echo $row['publisher_name']; ?></td>
                                     <td><?php echo $row['isbn']; ?></td>
                                     <td><?php echo $row['copyright_year']; ?></td>     
                                     <td><?php echo $row['date_added']; ?></td>
                                     <td><?php echo $row['status']; ?></td>
                                   
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="delete_books.php<?php echo '?id='.$id; ?>"     class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                        
                                        <a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                        
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
        $(document).ready(function(){
            $('#bookTable').dataTable();
        });
    </script>

</body>

</html>
