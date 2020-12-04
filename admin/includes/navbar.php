<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
        </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
<!--                <i class="far fa-bell"></i>-->
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" style="height: 30px;width: auto" class="img-circle elevation-2" alt="User Image">
                </div>
<!--                <span class="badge badge-warning navbar-badge">15</span>-->
            </a>
            <div class="dropdown-menu dropdown-menu-sm-right dropdown-menu-right">
                <a href="index.php?changePass"><span class="dropdown-item dropdown-header">Change Password</span></a>
                <a href="controllers/logout.php"> <span class="dropdown-item dropdown-header">Logout</span></a>

            </div>
        </li>
    </ul>
</nav>

