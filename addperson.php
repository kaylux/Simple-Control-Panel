<!DOCTYPE html>
<html>

<? 
session_start(); 
?>
<head>


    <title>National Crime Information Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="views/panel/lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="views/panel/css/style.css">
    <link rel="stylesheet" type="text/css" href="views/panel/css/flat-blue.css">
</head>
<body class="flat-blue">
    <div class="app-container">
                <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Fort Carson</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                            <ul class="dropdown-menu danger  animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                                view all
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo $_SESSION['user_name'] ?><span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="../img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo $_SESSION['user_name'] ?></h4>
                                        <p><?php echo $_SESSION['user_email'] ?></p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title"></div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <span class="icon fa fa-desktop"></span><span class="title">Persons Database</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="addperson.php">Add Person</a>
                                            </li>
                                            <li><a href="searchperson.php">Search Person</a>
                                            </li>
                                            <li><a href="updateperson.html">Update Details</a>
                                            </li>
                
            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-table"></span><span class="title">Vehicle Database</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="views/panel/html/table/table.html">Add Vehicle</a>
                                            </li>
                                            <li><a href="views/panel/html/table/datatable.html">Search Vehicle</a>
                                            </li>
											  <li><a href="views/panel/html/table/datatable.html">Update Vehicle</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-form">
                                    <span class="icon fa fa-file-text-o"></span><span class="title">Warrants</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-form" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="views/panel/html/form/ui-kits.html">Check Warrants</a>
                                            </li>
											<li><a href="views/panel/html/form/ui-kits.html">Add Warrant</a>
                                            </li>
											<li><a href="views/panel/html/form/ui-kits.html">Delete Warrant</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                     
                      
                            <!-- Dropdown-->
							<li>
                                <a href="report.php">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">Report A Crime</span>
                                </a>
                            </li>
                            <li>
                                <a href="deputy.html">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">Deputy Information</span>
                                </a>
                            </li>
							  <li>
                                <a href="index.php?logout">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <center><span class="title">Add Suspect</span>
                        <div class="description">Adding A Suspect Into The Database</div></center>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" >
                            <div class="card" >
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Please Fill Out Correctly</div>
                                    </div>
                                </div>
                                <div class="card-body" >
								
								
								
                                    <form action="classes/addsuspect.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="text" class="form-control" name="suspect_name" placeholder="James_Walker" required>
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Ethniicity</label>
                                            <input type="text" class="form-control" name="suspect_ethnicity" placeholder="James_Walker" required>
                                        </div>
                                    
                                    	<div class="form-group">
                                            <label for="exampleInputEmail1">Sex</label>
                                            <input type="text" class="form-control" name="suspect_sex" placeholder="James_Walker" required>
                                        </div>
                         
                                   
                                     
                                        <button type="submit" name="addsuspect" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
            </div>
        </footer>
        <div>
            <!-- Javascript Libs -->
            <script type="text/javascript" src="views/panel/lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="views/panel/lib/js/ace/theme-github.js"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="views/js/app.js"></script>
            <script type="text/javascript" src="views/js/index.js"></script>
</body>

</html>
