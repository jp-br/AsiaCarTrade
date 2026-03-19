@extends('layouts.app')

@section('content')

<div class="bg-primary text-white py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold">Our Story & Mission</h1>
        <p class="lead mx-auto" style="max-width: 700px;">
            Empowering over 12 million programmers worldwide through accessible, 
            high-quality computer science resources.
        </p>
    </div>
</div>

<div class="container my-5">
    
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h2 class="fw-bold mb-4">Who We Are</h2>
            <p class="text-muted">
                GeeksforGeeks is a leading platform that provides computer science resources and coding challenges for programmers and technology enthusiasts. We bridge the gap between academia and industry by providing a supportive community for learners at every stage of their journey.
            </p>
            <p class="text-muted">
                From interview preparations to advanced coding tutorials, our platform offers a vast collection of resources covering various domains of computer science.
            </p>
        </div>
        <div class="col-lg-6">
            <div class="p-5 bg-light rounded-3 text-center border">
                <h3 class="display-5 fw-bold text-primary">12M+</h3>
                <p class="text-uppercase fw-bold text-muted">Registered Users</p>
                <hr class="w-25 mx-auto">
                <p class="small text-muted mb-0">Trusted by students and professionals from top organizations worldwide.</p>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5 text-center">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <div class="mb-3 text-primary"><i class="bi bi-award fs-1"></i></div>
                <h4 class="fw-bold">Expertise</h4>
                <p class="text-muted">Content curated by exceptional mentors hailing from top colleges and global organizations.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <div class="mb-3 text-success"><i class="bi bi-universal-access fs-1"></i></div>
                <h4 class="fw-bold">Accessibility</h4>
                <p class="text-muted">Breaking down complex coding concepts into digestible tutorials available to everyone, everywhere.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <div class="mb-3 text-info"><i class="bi bi-people fs-1"></i></div>
                <h4 class="fw-bold">Community</h4>
                <p class="text-muted">A supportive ecosystem where learners can grow from humble beginnings to the pinnacle of expertise.</p>
            </div>
        </div>
    </div>

    <div class="bg-light rounded-5 p-5 mb-5 shadow-sm">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold">Guided by the Best</h2>
                <p class="lead">Our exceptional mentors lay the foundation to help you conquer the world of coding.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="#" class="btn btn-primary btn-lg px-4 rounded-pill">Meet Our Mentors</a>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <h2 class="fw-bold">Ready to Start Your Journey?</h2>
        <p class="text-muted mb-4">Join millions of others and start mastering computer science today.</p>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-dark px-4">Browse Tutorials</button>
            <button class="btn btn-outline-dark px-4">Join the Community</button>
        </div>
    </div>

</div>

@endsection