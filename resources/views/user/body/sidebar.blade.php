@php
    $user = Auth::user();
@endphp

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('storage/' . $user->user_picture) }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $user->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('user.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Course</li>

                <li>
                    <a href="{{ route('user.course.index') }}" class="waves-effect">
                        <i class="ri-book-2-line"></i>
                        <span>Course</span>
                    </a>
                </li>

                <li class="menu-title">Payment</li>

                <li>
                    <a href="{{ route('user.order.index') }}" class="waves-effect">
                        <i class="ri-shopping-cart-2-line"></i>
                        <span>Order</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.payment.index') }}" class="waves-effect">
                        <i class="ri-money-dollar-circle-line"></i>
                        <span>Payment</span>
                    </a>
                </li>

                <li class="menu-title">Wallet</li>

                <li>
                    <a href="{{ route('user.wallet.index') }}" class="waves-effect">
                        <i class="ri-wallet-line"></i>
                        <span>Wallet</span>
                    </a>
                </li>

                <li class="menu-title">Affiliate</li>

                <li>
                    <a href="{{ route('user.affiliate.index') }}" class="waves-effect">
                        <i class="ri-gift-line"></i>
                        <span>My Affiliate</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
