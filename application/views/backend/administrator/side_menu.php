<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

        <span class="brand-text font-weight-light">এডমিন</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">এডমিন</a></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?php echo base_url('backend/authority/administrator/index') ?>" class="nav-link <?= active_nav('dashboard', $main_nav); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ড্যাশবোর্ড
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
       
                <li class="nav-item has-treeview <?= active_open('member', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('member', $main_nav); ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           সদস্য কন্ট্রোল
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('member_list') ?>" class="nav-link <?= active_nav('member_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('add_member') ?>" class="nav-link <?= active_nav('add_member', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নতুন সদস্য এন্ট্রি</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('decoration_fee') ?>" class="nav-link <?= active_nav('decoration_fee', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য ফি</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('manager_controll') ?>" class="nav-link <?= active_nav('manager_controll', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ম্যানেজার নিয়ন্ত্রন</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('member_password_controll') ?>" class="nav-link <?= active_nav('member_password_controll', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সদস্য পাসওয়ার্ড কন্ট্রোল</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('notice_controll') ?>" class="nav-link <?= active_nav('notice_controll', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নোটিশ কন্ট্রোল</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('meeting_shedule') ?>" class="nav-link <?= active_nav('meeting_shedule', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> মিটিং শিডিউল</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('frontend_controll') ?>" class="nav-link <?= active_nav('frontend_controll', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> ফ্রন্ট ইন্ড কন্ট্রোল</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>