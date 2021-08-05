<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align:center;">

        <span class="brand-text font-weight-light">Ab SIddique</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('') ?>assets/backend/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">TEST</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->

                <!-- dashboard Section  -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?php echo base_url('backend/authority/Doctors/index') ?>" class="nav-link <?= active_nav('dashboard', $main_nav); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ড্যাশবোর্ড
                            <!--								<i class="right fas fa-angle-left"></i>-->
                        </p>
                    </a>
                </li>

                <!-- prescription section -->
                <li class="nav-item has-treeview <?= active_open('member', $main_nav); ?>">
                    <a href="#" class="nav-link <?= active_nav('member', $main_nav); ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            সদস্য
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('all_member') ?>" class="nav-link <?= active_nav('all_member', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সকল সদস্য</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('add_daily_meal') ?>" class="nav-link <?= active_nav('add_daily_meal', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>দৈনিক মিল হিসাব</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('balance_manage') ?>" class="nav-link <?= active_nav('balance_manage', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>টাকাপয়সা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('marketer_manage') ?>" class="nav-link <?= active_nav('marketer_manage', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>বাজারকারী তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('marketing_cost') ?>" class="nav-link <?= active_nav('marketing_cost', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>বাজার খরচ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('another_marketing_cost') ?>" class="nav-link <?= active_nav('another_marketing_cost', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>বিবিধ খরচ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('notice_manage') ?>" class="nav-link <?= active_nav('notice_manage', $sub_nav); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>নোটিশ খালা আছে/নাই</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url('liveChat') ?>" class="nav-link <?= active_nav('livechat', $sub_nav); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>চ্যাটিং অপশন</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>