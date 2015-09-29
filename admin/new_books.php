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
                <?php include('include/head-menu.php'); ?>
                    <div class="row">
                    <div class="jumbotron col-md-12">

                    <a class="btn btn-primary" href="addbooks.php" role="button">Add books</a> 
                      <a class="pull-right" href="" onclick="window.print()" class="btn btn-info"><i class="glyphicon glyphicon-print"></i> Print</a>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
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
                                        <th class="action">Action</th>      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php include('include/dbcon.php'); ?>
                                   <?php  $user_query=mysql_query("select * from book where status = 'new'")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['book_id'];  
                                    $cat_id=$row['category_id'];

                                            $cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
                                            $cat_row = mysql_fetch_array($cat_query);
                                    ?>
                                    <tr class="del<?php echo $id ?>">
                                    
                                                                  
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo $row['book_copies']; ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
                                     <td><?php echo $row['publisher_name']; ?></td>
                                     <td><?php echo $row['isbn']; ?></td>
                                     <td><?php echo $row['copyright_year']; ?></td>     
                                     <td><?php echo $row['date_added']; ?></td>
                                    <?php include('toolttip_edit_delete.php'); ?>
                                     <td>
                                         <a id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_books.php'); ?>
                                        <a  id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        
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

</body>

</html>
