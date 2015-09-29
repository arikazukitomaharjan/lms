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
        $query=mysql_query("select * from notes")or die(mysql_error());
        $row=mysql_fetch_array($query);
       
        ?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Notes</div>
            <p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
    <div class="addstudent">
    <div class="details">Please Enter Details Below</div>   
    <form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
            
        <div class="control-group">
            <label class="control-label" for="inputEmail">Note id:</label>
            <div class="controls">
            <input type="text" class="span4" id="inputEmail" name="note_id" value="<?php echo $row['note_id']; ?>" placeholder="id" required>
            <input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="inputPassword">Title:</label>
            <div class="controls">
            <input type="text" class="span4" id="inputPassword" name="title" value="<?php echo $row['title']; ?>" placeholder="title" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Subject:</label>
            <div class="controls">
            <input class="span1" type="text" id="inputPassword" name="subject" value="<?php echo $row['subject']; ?>" placeholder="subject" required>
            </div>
        </div>
         <div class="control-group">
            <label class="control-label" for="inputPassword">Note:</label>
            <div class="controls">
            <input class="span1" type="text" id="inputPassword" name="note" value="<?php echo $row['note']; ?>" placeholder="note" required>
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