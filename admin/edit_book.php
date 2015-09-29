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
        $query=mysql_query("select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$get_id'")or die(mysql_error());
        $row=mysql_fetch_array($query);
        $category_id = $row['category_id'];
        ?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Books</div>
               <div class="addstudent">
      <br>
    <form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
            
        <div class="control-group">
            <label class="control-label" for="inputEmail">Book_title:</label>
            <div class="controls">
            <input type="text" class="form-control" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="book_title" required>
            <input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Category:</label>
            <div class="controls">
            <select name="category_id">
                <option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
                <?php $query1 = mysql_query("select * from category where category_id != '$category_id'")or die(mysql_error());
                while($row1 = mysql_fetch_array($query1)){
                ?>
                <option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Author:</label>
            <div class="controls">
            <input type="text" class="form-control" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="author" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Book_copies:</label>
            <div class="controls">
            <input class="form-control" type="text" id="inputPassword" name="book_copies" value="<?php echo $row['book_copies']; ?>" placeholder="book_copies" required>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="inputPassword">Book_pub:</label>
            <div class="controls">
            <input type="text" class="form-control"  id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="book_pub" required>
            </div>
        </div>  
        <div class="control-group">
            <label class="control-label" for="inputPassword">Publisher_name:</label>
            <div class="controls">
            <input type="text" class="form-control" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="publisher_name" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Isbn:</label>
            <div class="controls">
            <input type="text" class="form-control" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Copyright_year:</label>
            <div class="controls">
            <input type="text" class="form-control" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="copyright_year" required>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="inputPassword">Status:</label>
            <div class="controls">
            <select name="status" class="form-control">
                <option><?php echo $row['status']; ?></option>
                <option>New</option>
                <option>Old</option>
                <option>Lost</option>
                <option>Damage</option>
                <option>Subject for Replacement</option>
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