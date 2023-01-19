<div class="col-lg-4 col-md-6">
    <div class="tp-courses__item mb-30">
        <div class="tp-courses__thumb w-img fix p-relative">
            <img src="{{ asset('storage/' . $category->category_picture) }}" alt="">
        </div>
        <div class="tp-courses__content white-bg">
            <h3 class="tp-courses__title"><a href="{{ route('home.category.show', $category->category_slug) }}">{{ $category->category_name }}</a></h3>
            <div class="tp-courses__price d-flex justify-content-between">
                <div class="tp-courses__time">
                    <span><a href="{{ route('home.course.show', $category->category_slug) }}" class="more-btn">Read More <i class="fa-regular fa-arrow-right"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
