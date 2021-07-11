<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

        <span class="brand-text font-weight-light">ইউজার</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> ইউজার</a></a></a>
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
       
                <li class="nav-item has-treeview <?= active_open('user', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('user', $main_nav); ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            ইনফরমেশন
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">                       
                        <li class="nav-item">
                            <a href="<?php echo base_url('meal_list') ?>" class="nav-link <?= active_nav('meal_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> আমার মিল</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('marketer_list') ?>" class="nav-link <?= active_nav('marketer_list', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> বাজারকারী তালিকা </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('see_ammount') ?>" class="nav-link <?= active_nav('see_ammount', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>টাকা জমা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('meeting_time') ?>" class="nav-link <?= active_nav('meeting_time', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>মিটিং সময়</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('cost_marketing') ?>" class="nav-link <?= active_nav('cost_marketing', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>বাজার খরচ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('comment') ?>" class="nav-link <?= active_nav('comment', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>মতামত</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('meal_control') ?>" class="nav-link <?= active_nav('meal_control', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> মিল অফ কন্ট্রোল </p>
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