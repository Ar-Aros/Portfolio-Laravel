@extends('layouts.layout')

@section('content')
<div class="container">
  <h1 class="mb-5 text-center">📖 Blog</h1>

  <div class="row g-4">
    <!-- Blog Post 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">My Journey into Laravel Development</h5>
          
          <p class="card-text">
            I started building with Laravel to create practical tools—like internal systems that replace manual processes. 
            My focus is clean code, reusability, and clear documentation.
          </p>
        </div>
      </div>
    </div>

    <!-- Blog Post 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Automating Voice Logger & Reminder Systems at BRACNet</h5>
          
          <p class="card-text">
            At BRACNet, I automated expiry reminder systems and helped deploy a voice logger across multiple buildings. 
            These initiatives saved time and reduced manual workload for the team.
          </p>
        </div>
      </div>
    </div>

    <!-- Blog Post 3 -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Learning Linux & Docker for DevOps and QA</h5>
          
          <p class="card-text">
            Linux and Docker are part of my daily toolkit for development and testing. 
            I use them to containerize services, script repeatable tasks, and keep environments consistent.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
