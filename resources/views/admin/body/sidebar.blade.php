@php
    $user = Auth::user();
@endphp

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('storage/' . Auth::user()->user_picture) }}" alt="" class="avatar-md rounded-circle">
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
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Course</li>

                <li>
                    <a href="{{ route('admin.course_acces.index') }}" class="waves-effect">
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
                    <a href="{{ route('admin.wallet.all') }}" class="waves-effect">
                        <i class="ri-wallet-2-line"></i>
                        <span>All Wallet</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.wallet.index') }}" class="waves-effect">
                        <i class="ri-wallet-line"></i>
                        <span>Wallet</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.withdraw.index') }}" class="waves-effect">
                        <i class="ri-exchange-dollar-line"></i>
                        <span>Withdraw</span>
                    </a>
                </li>

                <li class="menu-title">Payment</li>

                <li>
                    <a href="{{ route('admin.payment.index') }}" class="waves-effect">
                        <i class="ri-money-dollar-circle-line"></i>
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
                    <a href="{{ route('admin.affiliate.all') }}" class="waves-effect">
                        <i class=" ri-vip-diamond-line"></i>
                        <span>All Affiliate</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.affiliate.index') }}" class="waves-effect">
                        <i class="ri-gift-line"></i>
                        <span>My Affiliate</span>
                    </a>
                </li>

                <li class="menu-title">Email</li>

                <li>
                    <a href="{{ route('admin.mail.user') }}" class="waves-effect">
                        <i class="ri-mail-line"></i>
                        <span>Mail to User</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.mail.index') }}" class="waves-effect">
                        <i class="ri-mail-line"></i>
                        <span>Custom Email</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.mail.broadcast') }}" class="waves-effect">
                        <i class="ri-mail-line"></i>
                        <span>Broadcast Email</span>
                    </a>
                </li>

                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{ route('admin.youtube.index') }}" class="waves-effect">
                        <i class="ri-youtube-line"></i>
                        <span>Youtube</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.testimoni.index') }}" class="waves-effect">
                        <i class="ri-chat-smile-line"></i>
                        <span>Testimoni</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.faq.index') }}" class="waves-effect">
                        <i class="ri-book-line"></i>
                        <span>Faq</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.review.index') }}" class="waves-effect">
                        <i class="ri-feedback-line"></i>
                        <span>Review</span>
                    </a>
                </li>

                <li class="menu-title">Users</li>

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
                    <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                        <i class="ri-contacts-book-2-line"></i>
                        <span>Contact</span>
                    </a>
                </li>

                <li class="menu-title">Setting</li>

                <li>
                    <a href="{{ route('admin.setting.index') }}" class="waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Setting</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.setting.image') }}" class="waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Setting Image</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
