<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url("css/bootstrap.css");?>">
    <!-- MetisMenu CSS -->
    <link href="<?=base_url("css/metisMenu.min.css");?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url("css/sb-admin-2.css");?>" rel="stylesheet">
    <!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?=base_url("fonts/font-awesome-4.1.0/css/font-awesome.min.css");?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?=base_url("js/jquery-1.11.1.min.js");?>"></script>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url("/user");?>">Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> New Message
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url("/user/logout");?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?=base_url("/user");?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="<?=base_url("/user/rental");?>"><i class="fa fa-building fa-fw"></i> Estate Rental</a>
                        </li>
                        <!--
						<li>
                            <a href="<?=base_url("/user/sale");?>"><i class="fa fa-home fa-fw"></i> Estate Sale</a>
                        </li>    
                        -->                    
                    </ul>
                    <br>
                    <center>
                    	<a href="<?=base_url();?>">Back to Website</a>
                    </center>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Estate Rental</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <a type="button" href="<?=base_url("/user/rentalAdd");?>" class="btn btn-primary btn-sm" style="float:right;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Add</a>
            <br><br>
            <div class="list-group">
            <?
            	for($i=0;$i<sizeof($List);$i++){
            ?>
            	<a href="<?=base_url("/user/rentalUpdate/".$List[$i]['id']);?>" type="button" class="list-group-item"><?=$List[$i]['title'];?><em><small style="float:right"><?=$List[$i]['date'];?></small></em></a>
            <?
            	}
            ?>
            </div>
            <select class="form-control" style="float:right;max-width:100px;" id="pagenum">
            <? 
            	for($i=1;$i<=$TotalPage;$i++){
            ?>
            	<option value="<?=$i?>" <? if($page==$i){echo "selected";}?>><?=$i;?></option>
            <?
            	}
            ?>
            </select>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
    	$(function () {
    		$('select#pagenum').change(function(){
		        var pagenum = $(this).children('option:selected').val();
		        window.location.href = "<?=base_url("/user/rental");?>/"+pagenum;
	        });
	      });
    </script>
    
    <script src="<?=base_url("js/bootstrap.min.js");?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url("js/metisMenu.min.js");?>"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url("js/sb-admin-2.js");?>"></script>

</body>

</html>
