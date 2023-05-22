@extends('layouts.master')

@section('content')
     <!-- home area start -->
     <p class = "header bg-bright">
            <div class = "container">
                <div class = "header-content text-center">
                    <h6 class = "text-uppercase text-blue-dark fs-14 pt-6 fw-6 ls-1" style="font-weight: 700;">online course Create and Download</h6>
                    <h1 class = "lg-title" style="font-weight: 700;">Unlock your learning potential with our Course sharing platform!</h1>
                    <p class = "text-dark fs-18">Use this web application to create courses to upload notes and tutorials for students to come and download. Easy to use and done within minutes - try now!</p>
                    <a href="{{route('course.create')}}" class = "btn btn-primary text-uppercase" style="font-size: 14.5px; font-weight: 600;padding: 1.0rem 1.6rem; border-radius: 4px; display: inline-block;">create Course</a>
                    <img src = "img/full-stack-developer-1946887-1651585.gif">
                </div>
            </div>
</p>

        <div class="section-one" style="background-color: white">
            <div class="container">
                <div class = "section-one-content">
                    <div class="section-one-l">
                        <img src = "img/visual-0c7080adf17f1f207276f613447c924f667dab34b7ac415cd7ef653172defd0b.svg">
                    </div>
                    <div class = "section-one-r">
                        <h2 class = "lg-title" style="font-weight: 700;">Access a wide range of courses uploaded</h2>
                        <p class = "text fs-16">Discover a world of learning opportunities with this course sharing platform. Explore a vast collection of courses on a wide range of topics, all uploaded by learners and educators. Whether you're looking to expand your skillset, learn something new, or simply explore your interests, our platform has something for everyone.</p>
                        <div class = "btn-group">
                            <a href="{{route('available')}}" class = "btn btn-primary text-uppercase" style="font-size: 14.5px; font-weight: 600;padding: 1.0rem 1.6rem; border-radius: 4px; display: inline-block;">Available Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "section-two bg-bright">
            <div class="container">
                <div class="section-two-content">
                    <div class = "section-items">
                        <div class = "section-item">
                            <h5 class = "section-item-title fs-16">Create Course</h5>
                            <p class = "text fs-16">Whether you're an educator, industry professional, or simply a passionate learner, our platform provides you with the tools to create and upload your own course content. </p>
                        </div>

                        <div class = "section-item">
                            <h5 class = "section-item-title fs-16">Upload Notes</h5>
                            <p class = "text fs-16">This platform provides you with the tools to easily upload notes content, making it easy to share your knowledge with learners around the world.</p>
                        </div>

                        <div class = "section-item">
                            <h5 class = "section-item-title fs-18">Upload Tutorials</h5>
                            <p class = "text fs-16">This platform provides you with the tools to easily upload tutorials content, making it easy to share your knowledge with learners around the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
