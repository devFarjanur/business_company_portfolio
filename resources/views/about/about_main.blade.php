@extends('layouts')

@section('layouts')




<div class="page-content">


  <main id="main">

  @include('about.about_hero')

  @include('about.about_story')





    @include('home.home_why_choose')

    @include('about.about_team')


    @include('home.home_testimonial')

  </main><!-- End #main -->





</div>




@endsection