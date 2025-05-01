<x-exam title="Exam List">
    <div class="section page-banner-section bg-color-1">

        <img class="shape-1" src="{{asset('exam')}}/assets/images/shape/shape-5.png" alt="shape">
        <img class="shape-2" src="{{asset('exam')}}/assets/images/shape/shape-6.png" alt="shape">
        <img class="shape-3" src="{{asset('exam')}}/assets/images/shape/shape-7.png" alt="shape">

        <img class="shape-4" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">
        <img class="shape-5" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">

        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Exam List</h2>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Course List Wrapper Start -->
            <div class="course-list-wrapper">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid">
                                <div class="row">
                                    @foreach($exams as $exam)
                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Courses Start -->
                                            <div class="single-course">
                                                <div class="courses-image">
                                                    <a href="{{route('exam.detail',['id'=>$exam->id])}}"><img src="{{asset('exam')}}/assets/images/courses/courses-1.jpg" alt="Courses"></a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="top-meta">
                                                        <a class="tag" href="#">Beginner</a>
                                                        <span class="price">
                                                        <span class="sale-price">Free</span>
                                                        </span>
                                                    </div>
                                                    <h3 class="title"><a href="{{route('exam.detail',['id'=>$exam->id])}}">{{$exam->title}}</a></h3>
                                                    <p class="author-name">Andrew paker</p>
                                                </div>
                                                <div class="courses-meta">
                                                    <p class="student"><i class="fa fa-user-o"></i> 10 Student</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Courses End -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course List Wrapper End -->

        </div>
    </div>
    <!-- Course List End -->
</x-exam>