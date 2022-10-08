<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.html">Global Mobile</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>


        <!-- User Menu-->

        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="<?= base_url('') ?>profile"><i class="fa fa-user-circle-o fa-lg"></i> Edit Profile</a></li>
                <li><a class="dropdown-item" href="<?= base_url('') ?>profile/timeline"><i class="fa fa-comments-o fa-lg"></i> Post</a></li>
                <li><a class="dropdown-item" href="<?= base_url('') ?>logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
        </li>

    </ul>
</header>