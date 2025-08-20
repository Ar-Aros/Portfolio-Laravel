<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>{{ $title ?? 'Md. Abdur Rahim Sojib | Portfolio' }}</title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
  html, body {
    height: 100%;
  }
  body {
    display: flex;
    flex-direction: column;
    padding-top: 4.5rem;
  }
  main {
    flex: 1; /* push footer down */
  }
  .hero { 
    background: #0b1220; 
    color: #e5e7eb; 
    border-radius: 1rem; 
  }
  footer { 
    border-top: 1px solid #444; 
    background: #001224ff; 
  }
  a { 
    text-decoration: none; 
  }
  footer a:hover {
    color: #66b2ff !important; /* subtle hover effect */
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Sojib</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">
  @yield('content')
</main>

<footer class="py-3 text-center text-white">
  <div class="container">
    <p class="mb-1">&copy; {{ date('Y') }} Md. Abdur Rahim Sojib</p>
    <p class="mb-0">
      <a href="mailto:sojib.ece@gmail.com" class="text-white">sojib.ece@gmail.com</a> ·
      <a href="https://www.linkedin.com/in/ar-aros/" target="_blank" rel="noopener" class="text-white">LinkedIn</a>
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
