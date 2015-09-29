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
                         <form role="form" method="POST" action="books_save.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>BOOK TITLE</label>
                                <input class="form-control" type="text"  id="inputEmail" name="book_title"  placeholder="Book Title" required>
                                
                            </div>

                             <div class="form-group">
                                <label>CATEGORY</label>
                                <select class="form-control" name="category_id">
                                    <option></option>
                                   
                                    <?php
                                        $cat_query = mysql_query("select * from category");
                                        while($cat_row = mysql_fetch_array($cat_query)){
                                        ?>
                                        <option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
                                        <?php  } ?>
                                </select>
                            </div>

                            <div class="form-group" method="POST" action="books_save.php" enctype="multipart/form-data">
                                <label>AUTHOR</label>
                                <input class="form-control" type="text"  id="inputPassword" name="author"  placeholder="Author" required>
                                
                            </div>

                            <div class="form-group">
                                <label>BOOK COPIES.</label>
                                <input class="form-control" type="text"  id="inputPassword" name="book_copies"  placeholder="" required>
                                
                            </div>

                             <div class="form-group">
                                <label>BOOK PUBLICATION</label>
                                <input class="form-control" type="text"  id="inputPassword" name="book_puB"  placeholder="book_pulication   " required>
                                
                            </div>

                             <div class="form-group">
                                <label>PUBLISHER NAME</label>
                                <input class="form-control" type="text"  id="inputPassword" name="publisher_name"  placeholder="publisher name" required>
                                
                            </div>

                             <div class="form-group">
                                <label>ISBN</label>
                                <input class="form-control" type="text"  id="inputPassword" name="isbn"  placeholder="ISBN" required>
                                
                            </div>

            
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                        <option></option>
                                        <option>New</option>
                                        <option>Old</option>
                                        <option>Lost</option>
                                        <option>Damage</option>
                                        <option>Subject for Replacement</option>
                                </select>
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