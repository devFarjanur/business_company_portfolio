@extends('layouts')

@section('layouts')




<div class="page-content">


@include('home.home_hero')

  <main id="main">

    <!-- ======= Get Started Section ======= -->

    @include('home.home_services')

    @include('home.home_construction')

    @include('home.home_solar')

    @include('home.home_why_choose')

    @include('home.home_projects')

    @include('home.home_testimonial')


  </main><!-- End #main -->


</div>

 


  @endsection