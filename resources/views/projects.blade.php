@extends('layouts.layout')


@section('content')
<h1 class="mb-4">Projects</h1>
<div class="row g-4">
<div class="col-md-6">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title">Number Management System</h5>
<p class="card-text">Laravel-based internal tool for IPTSP team to simplify and automate number management. Continuously upgraded with new features.</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title">Hospital Management System</h5>
<p class="card-text">Web app built with HTML, CSS, Java, PHP & MySQL for managing hospital operations: patients, diagnoses, doctors, and availability.</p>
<a href="https://github.com/Ar-Aros/Hospital-Management-System" target="_blank" class="btn btn-primary">GitHub</a>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title">Bluecarbot Robot</h5>
<p class="card-text">Arduino-based robot with auto obstacle avoidance, Bluetooth control, and voice command via mobile app.</p>
<a href="https://github.com/Ar-Aros/Bluecarbot-An_Obstacle_Avoiding_Voice_and_Manual_Control_Robotic_Car" target="_blank" class="btn btn-primary">GitHub</a>
</div>
</div>
</div>
</div>
@endsection