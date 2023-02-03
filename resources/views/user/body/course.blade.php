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
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Course</li>
                @php
                    $i = 1;
                    $last_acces = $acces->course_acces_last;
                @endphp
                @foreach ($course->sub_course as $sub_course)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="{{ ($i > $last_acces) ? 'ri-book-2-line' : ' ri-book-open-line' }}"></i>
                            <span>{{ $sub_course->sub_course_name }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @foreach ($sub_course->list_course as $list_course)
                                <li>
                                    <a href="{{ ($i > $last_acces) ? '#' : route('user.course.acces', [$course->course_slug, $list_course->list_course_slug]) }}">
                                        <span class="float-end">
                                            <i class="{{ ($i > $last_acces) ? 'ri-lock-2-line' : ' ri-play-line' }}"></i>
                                        </span>
                                        <span>{{ $list_course->list_course_name }}</span>
                                    </a>
                                </li>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
