 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand fa fa-fw fa-home" href="dashboard.php">&nbsp;&nbsp;Library&nbsp;Management&nbsp;System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                 <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Advance Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="users.php"><i class="fa fa-fw fa-user"></i>&nbsp;&nbsp;&nbsp;Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>&nbsp;&nbsp;&nbsp;Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="member.php"><i class="fa fa-fw fa-eye"></i>&nbsp;&nbsp;&nbsp;Member</a>
                    </li>
                    <li>
                        <a href="books.php"><i class="fa fa-fw fa-book"></i>&nbsp;&nbsp;&nbsp;Books</a>
                    </li>
                    
                   
                
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Transaction <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="borrow.php">&nbsp;&nbsp;&nbsp;Borrow</a>
                            </li>
                            <li>
                                <a href="return.php">&nbsp;&nbsp;&nbsp;View Returned Books</a>
                            </li>
							<li>
                                <a href="view_borrow.php">&nbsp;&nbsp;&nbsp;View Borrowed Books</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="archive.php"><i class="fa fa-fw fa-list"></i>&nbsp;&nbsp;&nbsp;Archive</a>
                    </li>
					 <li>
                        <a href="notes.php"><i class="glyphicon glyphicon-text-height"></i>&nbsp;&nbsp;&nbsp;Remember Notes</a>
                    </li>
                     <li>
                        <a href="backupdatabase.php"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Backup</a>
                    </li>
                     <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>