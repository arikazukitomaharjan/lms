<?php include('include/header.php'); ?>
<?php include('session.php'); ?>
<?php include('include/navigation.php'); ?>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Backup Database
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Admin</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> backup
                            </li>
                        </ol>
                    </div>
                </div>
               <script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#data').load('db.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>

<style type="text/css">
body{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
a{
text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
table { 

text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
 }
td { padding: .3em;}
#head { background: #fc9; float:left; }
#eee { background: #fff;}
</style>

<table border="0" style="margin-left:50px; margin-top:20px;">
<tr style=" background:none; "><td rowspan="2">

<img src="../img/download-database-icon.png" height="50"  alt="backup" />
</td>
<td style=" background:none;font-size:20px; ">Back-UP Database<br/>

</td>
<tr>
<td>Automatically backup database everyday
</td>
</tr>
</tr></table>

<br />
<div id="data"></div>




                
                  

                

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

