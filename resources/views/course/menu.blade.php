@extends('/template/layout')

@section('title', 'Course')

@section('custom-csspage', '/css/course-menu.css')

@section('content')
    <div class="courses-area-wrapper">
        {{-- Popular --}}
        <div class="courses-area">
            <div class="row course-properties-wrap most-popular d-flex justify-content-center">
                <div class="row course-properties pt-5">
                    <h1 class="course-properties-title">Most Popular</h1>
                </div>
                <div class="row course-properties all-card">
                    @for ($i = 0; $i < 16; $i++)
                        <div class="col-3 course-card">
                            <a href="/course/view" style="text-decoration: none; color: inherit; display: block">
                                <div class="card d-flex justify-content-center">
                                    <div class="card-properties">
                                        <div class="card_img overlay1">
                                            <img class="card-image" src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/couseMenu.png?raw=true" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Docker Bootcamp: Conquer Docker with Real-World Projects</h3>
                                            <p class="card-writer">by : Donald Davidson </p>
                                            <p class="card-description">Containerize Apps, Manage Microservices, and Deploy to
                                                the Cloud with Docker!</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="row course-properties course-more">
                    <div class="col">
                        <button class="btn btn-light" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2" id="btn-show-more-popular">Show
                            More</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Trending Course --}}
        <div class="courses-area">
            <div class="row course-properties-wrap trending d-flex justify-content-center">
                <div class="row course-properties pt-5">
                    <h1 class="course-properties-title">Trending Course</h1>
                </div>
                <div class="row course-properties all-card">
                    @for ($i = 0; $i < 16; $i++)
                        <div class="col-3 course-card">
                            <a href="/course/view" style="text-decoration: none; color: inherit; display: block">
                                <div class="card d-flex justify-content-center">
                                    <div class="card-properties">
                                        <div class="card_img overlay1">
                                            <img class="card-image" src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/couseMenu.png?raw=true" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Docker Bootcamp: Conquer Docker with Real-World Projects</h3>
                                            <p class="card-writer">by : Donald Davidson </p>
                                            <p class="card-description">Containerize Apps, Manage Microservices, and Deploy to
                                                the Cloud with Docker!</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="row course-properties course-more">
                    <div class="col">
                        <button class="btn btn-light" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2" id="btn-show-more-trend">Show
                            More</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- New Course --}}
        <div class="courses-area">
            <div class="row course-properties-wrap new-course d-flex justify-content-center">
                <div class="row course-properties pt-5">
                    <h1 class="course-properties-title">New Course</h1>
                </div>
                <div class="row course-properties all-card">
                    @for ($i = 0; $i < 16; $i++)
                        <div class="col-3 course-card">
                            <a href="/course/view" style="text-decoration: none; color: inherit; display: block">
                                <div class="card d-flex justify-content-center">
                                    <div class="card-properties">
                                        <div class="card_img overlay1">
                                            <img class="card-image" src="https://github.com/nathrizandi/brainery/blob/main/public/assets/courseBanner/couseMenu.png?raw=true" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">Docker Bootcamp: Conquer Docker with Real-World Projects</h3>
                                            <p class="card-writer">by : Donald Davidson </p>
                                            <p class="card-description">Containerize Apps, Manage Microservices, and Deploy to
                                                the Cloud with Docker!</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="row course-properties course-more">
                    <div class="col">
                        <button class="btn btn-light" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2" id="btn-show-more-new">Show
                            More</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection