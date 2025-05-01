<x-exam title="Exam Detail">
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">

        <img class="shape-4" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">
        <img class="shape-5" src="{{asset('exam')}}/assets/images/shape/shape-21.png" alt="shape">

        <div class="container">
            <div class="course-details-banner-content">
                <h2 class="title">{{$exam->title}}</h2>
                <p>{{$exam->description}}</p>

                <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="{{asset('exam')}}/assets/images/author-1.jpg" alt="Author">
                        </div>
                        <div class="meta-name">
                            <h5 class="name">Adam Helen</h5>
                        </div>
                    </div>

                    <div class="meta-action">
                        <p class="label">Last Update : <span>{{date('d/m/Y',strtotime($exam->updated_at))}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Exam List Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wrap">
                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">$49.99</span>
                                    <span class="regular-price">$102</span>
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100" href="{{route('exam.start',['exam'=>$exam->id,'question'=>$exam->questions()->first()->id])}}">Start Exam</a>
                                <ul class="description-list">
                                    <li><i class="fa fa-clock-o"></i> Duration <span>10 mins</span></li>
                                    <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                    <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                    <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                    <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                </ul>
                                <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i>
                                    Share This exam</a>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->
                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Exam List End -->
</x-exam>