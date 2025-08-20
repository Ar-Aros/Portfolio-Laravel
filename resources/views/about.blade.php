@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row align-items-center mb-5">
    <!-- Profile Image -->
    <div class="col-lg-4 text-center mb-4 mb-lg-0">
      <img src="{{ asset('images/profile.jpg') }}" alt="Profile photo" 
           class="rounded-circle shadow-lg"
           style="width: 220px; height: 220px; object-fit: cover; border: 6px solid #fff;">
      <h2 class="mt-3">Md. Abdur Rahim Sojib</h2>
      <p class="text-muted">Laravel Developer & QA Enthusiast</p>
    </div>

    <!-- Intro -->
    <div class="col-lg-8">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h4 class="mb-3">About Me</h4>
          <p>
            I am a detail-oriented developer with a strong foundation in Laravel and Linux-based environments. 
            I enjoy crafting clean, maintainable code and improving workflows through automation and testing.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Skills -->
  <h4 class="mt-5 mb-3">💡 Skills</h4>
  <div class="row g-3">
    <div class="col-md-6">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h6 class="fw-bold">Development</h6>
          <p>PHP (Laravel), HTML, CSS, Bootstrap, JavaScript, MySQL</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h6 class="fw-bold">Cloud & Scripting</h6>
          <p>AWS EC2/S3, Shell scripting, Python</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h6 class="fw-bold">Tools</h6>
          <p>Git, Linux, Docker, Softswitch, IPPBX</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h6 class="fw-bold">Soft Skills</h6>
          <p>Analytical thinking, documentation, communication</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Experience -->
  <h4 class="mt-5 mb-3">💼 Experience</h4>
  <ul class="timeline list-unstyled">
    <li class="mb-4">
      <h6 class="fw-bold">Jr. Executive, IPTSP — BRACNet Ltd. <span class="text-muted">(Jul 2024 – Present)</span></h6>
      <p>Built and hosted a Laravel web app, automated expiry reminders, onboarded IPTSP services, deployed voice logger, fixed PBX issues, automated CDR filtering with Python.</p>
    </li>
    <li class="mb-4">
      <h6 class="fw-bold">IPTSP Intern — BRACNet Ltd. <span class="text-muted">(Feb 2024 – May 2024)</span></h6>
    </li>
    <li>
      <h6 class="fw-bold">Internship — BTCL, Dinajpur <span class="text-muted">(Oct 2023 – Nov 2023)</span></h6>
    </li>
  </ul>

  <!-- Education -->
  <h4 class="mt-5 mb-3">🎓 Education</h4>
  <p><strong>B.Sc. (Engineering)</strong> in Electronics & Communication Engineering — HSTU (2018–2023)</p>

  <!-- Certifications -->
  <h4 class="mt-5 mb-3">📜 Certifications</h4>
  <ul>
    <li>MTCNA (May 25, 2024)</li>
    <li>KodeKloud: Linux Basics, Git, Shell Scripting (Sep 21, 2024)</li>
    <li>KodeKloud: Docker Training Course (Apr 8, 2025)</li>
    <li>Ostad: Full Stack Web Development (Laravel & Vue) — Enrolled (Mar 20, 2025)</li>
  </ul>

  <!-- Contact Card -->
  <div class="mt-5">
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title">📞 Contact</h5>
        <p class="mb-1"><strong>Location:</strong> Dhaka, Bangladesh</p>
        <p class="mb-1"><strong>Email:</strong> <a href="mailto:sojib.ece@gmail.com">sojib.ece@gmail.com</a></p>
        <p class="mb-1"><strong>Phone:</strong> <a href="tel:+8801889933972">+8801889933972</a></p>
        <p class="mb-0"><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/ar-aros/" target="_blank">linkedin.com/in/ar-aros</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
