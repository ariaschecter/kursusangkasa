<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('backend/assets/images/users/logo-admin.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Name Here</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Course</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Course Acces</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.category.index') }}" class="waves-effect">
                        <i class=" ri-bookmark-line"></i>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.course.index') }}" class="waves-effect">
                        <i class="ri-book-2-line"></i>
                        <span>Course</span>
                    </a>
                </li>

                <li class="menu-title">Wallet</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-wallet-line"></i>
                        <span>Wallet</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-history-line"></i>
                        <span>Wallet History</span>
                    </a>
                </li>

                <li class="menu-title">Payment</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class=" ri-money-dollar-circle-line"></i>
                        <span>Payment</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.payment_method.index') }}" class="waves-effect">
                        <i class="ri-bank-card-line"></i>
                        <span>Payment Method</span>
                    </a>
                </li>

                <li class="menu-title">Affiliate</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class=" ri-vip-diamond-line"></i>
                        <span>All Affiliate</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-gift-line"></i>
                        <span>My Affiliate</span>
                    </a>
                </li>

                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{ route('admin.user.index') }}" class="waves-effect">
                        <i class="ri-group-line"></i>
                        <span>User</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.teacher.index') }}" class="waves-effect">
                        <i class="ri-user-line"></i>
                        <span>Teacher</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.setting.index') }}" class="waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Setting</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
