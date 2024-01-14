<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/css/mdb.min.css">
    <link rel="stylesheet" href="dashboard/css/sidenav.css">
    <link rel="stylesheet" href="dashboard/css/style.css">
    <link rel="icon" type="image/x-icon" href="/img/icon.png">

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li>
                     <li class="nav-item mt-3">ADMIN</li>
					</ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="{{route('logout')}}"  method="post" class="btn btn-sm btn-danger">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>

                        <li> <a class="nav-link" href="VisitorTable.html"  ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Add Doctor</span></a></li>
                        <li> <a href="VisitorTable.html" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Campus</span></a></li>
                        <li> <a href="{{route('service.index')}}" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Services</span></a></li>
                        <li> <a href="{{route('pages.index')}}" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Doctor List</span></a></li>
                        <li> <a href="" ><span> <i class="fas fa-users"></i> </span><span class="hide-menu">Message</span></a></li>

					</ul>
                </nav>
            </div>
        </aside>
<div class="page-wrapper">



    @yield('content')




</div>
</div>

<script src="dashboard/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="dashboard/js/popper.min.js"></script>
<script type="text/javascript" src="dashboard/js/bootstrap.js"></script>
<script type="text/javascript" src="dashboard/js/mdb.min.js"></script>

<script src="dashboard/js/sidebarmenu.js"></script>


<script src="dashboard/js/custom.js"></script>

</body>
</html>







