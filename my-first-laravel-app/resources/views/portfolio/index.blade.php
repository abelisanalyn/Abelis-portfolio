@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p>Hi im Analyn Ledonio Abelis , 30 years old and Im 2nd year College</p>
        <p>I am an IT student passionate about technology and software development, eager to apply my skills in real-world projects and continuously learn in the ever-evolving tech industry.',</p>

    </div>

</section>


<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>

        <p>Portfolio</p>

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">Get In Touch</h2>

        <p>analyn112394@gmail.com</p>
         <p>09976853939</p>
          <p>45 Parrot street Brgy. Batasan Hills Quezon City , Metro Manila</p>


    </div>

</section>

@endsection