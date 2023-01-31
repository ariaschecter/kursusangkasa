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
                    <a href="{{ route('teacher.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Course</li>

                <li>
                    <a href="{{ route('teacher.course.index') }}" class="waves-effect">
                        <i class="ri-book-2-line"></i>
                        <span>Course</span>
                    </a>
                </li>

                <li class="menu-title">Wallet</li>

                <li>
                    <a href="{{ route('teacher.wallet.index') }}" class="waves-effect">
                        <i class="ri-wallet-line"></i>
                        <span>Wallet</span>
                    </a>
                </li>

                <li class="menu-title">Teacher</li>

                <li>
                    <a href="{{ route('teacher.teacher.index') }}" class="waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Teacher Bio</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('teacher.review.index') }}" class="waves-effect">
                        <i class="ri-feedback-line"></i>
                        <span>Review</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
