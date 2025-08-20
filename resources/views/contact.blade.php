@extends('layouts.layout')


@section('content')
<h1 class="mb-4">Contact</h1>
<div class="row g-4">
<div class="col-lg-6">
<form action="#" method="post" onsubmit="event.preventDefault(); alert('This is a static demo form.');">
<div class="mb-3">
<label for="name" class="form-label">Name</label>
<input type="text" id="name" class="form-control" placeholder="Your name" required />
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" id="email" class="form-control" placeholder="you@example.com" required />
</div>
<div class="mb-3">
<label for="message" class="form-label">Message</label>
<textarea id="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
</div>
<button class="btn btn-dark" type="submit">Send Message</button>
</form>
</div>
<div class="col-lg-6">
<div class="card shadow-sm">
<div class="card-body">
<h5 class="card-title">Reach Me</h5>
<p class="mb-1"><strong>Email:</strong> <a href="mailto:sojib.ece@gmail.com">sojib.ece@gmail.com</a></p>
<p class="mb-1"><strong>Phone:</strong> <a href="tel:+8801889933972">+8801889933972</a></p>
<p class="mb-0"><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/ar-aros/" target="_blank" rel="noopener">linkedin.com/in/ar-aros</a></p>
</div>
</div>
</div>
</div>
@endsection