@extends('layouts')

@section('layouts')




  <main id="main">

    @include('services.services_hero')
    @include('home.home_services')
    @include('home.home_construction')
    @include('home.home_solar')
    @include('home.home_why_choose')
    @include('home.home_testimonial')


  </main><!-- End #main -->






@endsection