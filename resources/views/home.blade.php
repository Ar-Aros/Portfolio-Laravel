@extends('layouts.layout')

@section('content')
<div class="p-5 mb-4 hero">
  <div class="container py-5 text-center">
    <img src="{{ asset('images/profile.jpg') }}" alt="Profile photo" 
         class="rounded-circle mb-4 shadow" 
         style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #fff;">
    <h1 class="display-5 fw-bold">Hi, I’m Md. Abdur Rahim Sojib</h1>
    <p class="col-lg-8 mx-auto fs-5">
      Laravel Developer & QA Enthusiast based in Dhaka, Bangladesh. I build scalable web apps, automate workflows, and contribute to reliable software delivery.
    </p>
    <a href="{{ route('projects') }}" class="btn btn-light btn-lg me-2">View Projects</a>
    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Contact</a>
  </div>
</div>

<div class="row g-4">
  <div class="col-md-6">
    <div class="card h-100 shadow-sm">
      <div class="card-body">
        <h5 class="card-title">What I Do</h5>
        <p class="mb-2">Web development with PHP (Laravel), automation with Shell/Python, and infrastructure on Linux & AWS.</p>
        <ul class="mb-0">
          <li>Laravel Apps, RESTful APIs</li>
          <li>Linux, Docker, Git</li>
          <li>AWS EC2/S3 basics</li>
          <li>QA mindset: test cases & documentation</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card h-100 shadow-sm">
      <div class="card-body">
        <h5 class="card-title">Current Role</h5>
        <p class="mb-0">Jr. Executive (IPTSP) at BRACNet Ltd. Building internal tools, automating reminders, and improving processes.</p>
      </div>
    </div>
  </div>
</div>
@endsection
