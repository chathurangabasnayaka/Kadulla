<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Kadulla Publication</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="index.php" class="d-block"><?php echo $_SESSION['login']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?list_category" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Manage Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?list_author" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Manage Author</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?list_publisher" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Manage Publisher</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?list_type" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Manage Type</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?list_translator" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Manage Translator</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?list_book" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p>Manage Book</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="index.php?list_news" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Manage News</p>
                    </a>
                </li>

<!--                <li class="nav-item">-->
<!--                    <a href="index.php?list_book" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-book"></i>-->
<!--                        <p>Manage Flipping Book</p>-->
<!--                    </a>-->
<!--                </li>-->

<!--                <li class="nav-item">-->
<!--                    <a href="index.php?app_version" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-phone"></i>-->
<!--                        <p>App Version</p>-->
<!--                    </a>-->
<!--                </li>-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?php
