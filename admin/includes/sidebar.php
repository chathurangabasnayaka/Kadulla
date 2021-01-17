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
                    <a href="index.php?delivery_cost" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p>Manage Delivery Cost</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?dollar_rate" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Dollar Rate</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>
                            Index Page Setting
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">4</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?slider" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?banner" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?dayBook" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Book of the Day</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            Blog Page Setting
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">4</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?blog_cats" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?blog_post" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Post</p>
                            </a>
                        </li>
                    </ul>
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
