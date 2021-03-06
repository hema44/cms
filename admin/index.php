<?php
include "db/usersDb.php";
$user = new usersDb();
$userdata = $user->getUser(1);
echo $userdata['username'];
//print_r($userdata);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

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
            <a class="navbar-brand" href="">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-left top-nav">
            <li class="dropdown">
                <a href="http://localhost/cms" > blog </a>
            </li>
        </ul>
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">

                    <li class="message-preview">
                        <a href="#" > Blog</a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <strong><?php echo $userdata['username'];?></strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userdata['username']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li onclick="getHomePage()">
                    <a><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li onclick="getPostsPage()">
                    <a><i class="fa fa-fw fa-bar-chart-o"></i> posts</a>
                </li>
                <li onclick="getCategoryPage()">
                    <a ><i class="fa fa-fw fa-table"></i> categories</a>
                </li>
                <li onclick="getSubCategoryPage()">
                    <a ><i class="fa fa-fw fa-edit"></i> subCategorise</a>
                </li>
                <li onclick="getUsersPage()">
                    <a ><i class="fa fa-fw fa-desktop"></i> user</a>
                </li>
                <li onclick="getCommentsPage()">
                    <a ><i class="fa fa-fw fa-wrench"></i> comments</a>
                </li>
                <!--                <li>-->
                <!--                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>-->
                <!--                    <ul id="demo" class="collapse">-->
                <!--                        <li>-->
                <!--                            <a href="#">Dropdown Item</a>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="#">Dropdown Item</a>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">


        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    function getPostsPage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/posts.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }
    function getHomePage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/home.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }
    function getCategoryPage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/categories.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }
    function getSubCategoryPage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/subCategories.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }
    function getUsersPage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/user.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }
    function getCommentsPage(){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "includes/comments.php", false);
        ajax.send();
        document.getElementById("page-wrapper").innerHTML = ajax.responseText;
    }

</script>
</body>

</html>